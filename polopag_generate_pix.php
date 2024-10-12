<?php
define('INCLUDED', true);
require 'polopag_config.php';

error_reporting(0);
ini_set('display_errors', 0);
session_start();
function connect_to_database($config)
{
    try {
        $dsn = "mysql:host={$config['host']};dbname={$config['database']};port={$config['port']};charset=utf8mb4";
        $pdo = new PDO($dsn, $config['user'], $config['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erro ao conectar ao banco de dados: ");
    }
}

function generate_pix_from_polopag($reference, $price, $config)
{
    $data = [
        "valor" => number_format($price, 2, '.', ''),
        "calendario" => ["expiracao" => 3600],
        "referencia" => $reference,
        "solicitacaoPagador" => "Pagamento via PIX",
        "infoAdicionais" => [],
        "webhookUrl" => $config['webhook_url']
    ];

    $headers = [
        "Api-Key: {$config['api_key']}",
        "Content-Type: application/json"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $config['api_url']);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code == 200) {
        $response_data = json_decode($response, true);
        return $response_data;
    } else {
        die("Erro ao gerar o PIX. Por favor, tente novamente mais tarde.");
    }
}

function check_existing_pix($account_id, $price, $pdo)
{
    $query_check = "SELECT * FROM polopag_transacoes 
                    WHERE account_id = :account_id 
                    AND price = :price 
                    AND status = 'ATIVA' 
                    AND expires_at > NOW() 
                    LIMIT 1";
    $stmt_check = $pdo->prepare($query_check);
    $stmt_check->execute([
        ':account_id' => $account_id,
        ':price' => $price
    ]);

    $existing_pix = $stmt_check->fetch(PDO::FETCH_ASSOC);

    if ($existing_pix) {
        return [
            'reference' => $existing_pix['reference'],
            'txid' => $existing_pix['txid'],
            'internalId' => $existing_pix['internalId'],
            'base64' => $existing_pix['base64'],
            'copia_e_cola' => $existing_pix['copia_e_cola'],
            'price' => $existing_pix['price'],
            'points' => $existing_pix['points'],
            'status' => $existing_pix['status']
        ];
    }

    return false;
}

function get_account_id($account_name, $pdo)
{
    try {
        $account_id_query = $pdo->prepare("SELECT id FROM accounts WHERE name = :account_name LIMIT 1");
        $account_id_query->execute([':account_name' => $account_name]);
        $account = $account_id_query->fetch(PDO::FETCH_ASSOC);

        if (!$account) {
            return false;
        }

        return $account['id'];
    } catch (PDOException $e) {
        die("Erro ao buscar o ID da conta.");
    }
}
function store_pix_data($reference, $txid, $internalId, $base64, $copia_e_cola, $price, $points, $status, $type, $account_id, $pdo)
{
    $current_time = time();
    $last_generated_time = $_SESSION['last_pix_generated_time'] ?? 0;

    if (($current_time - $last_generated_time) < 10) {
        die("Aguarde 10 segundos entre uma geração de PIX e outra.");
    }

    $_SESSION['last_pix_generated_time'] = $current_time;

    try {
        $query = "INSERT INTO polopag_transacoes (account_id, reference, txid, internalId, base64, copia_e_cola, price, points, status, type, origin, created_at, expires_at)
                  VALUES (:account_id, :reference, :txid, :internalId, :base64, :copia_e_cola, :price, :points, :status, :type, 'site', NOW(), NOW() + INTERVAL 1 HOUR)";
        $stmt = $pdo->prepare($query);

        $stmt->execute([
            ':account_id' => $account_id,
            ':reference' => $reference,
            ':txid' => $txid,
            ':internalId' => $internalId,
            ':base64' => $base64,
            ':copia_e_cola' => $copia_e_cola,
            ':price' => $price,
            ':points' => $points,
            ':status' => $status,
            ':type' => $type
        ]);

        return [
            'reference' => $reference,
            'txid' => $txid,
            'internalId' => $internalId,
            'base64' => $base64,
            'copia_e_cola' => $copia_e_cola,
            'price' => $price,
            'points' => $points,
            'status' => $status
        ];

    } catch (PDOException $e) {
        die("Erro ao armazenar dados do PIX.");
    }
}
function return_json_response($reference, $price, $points, $base64, $copia_e_cola)
{
    if (ob_get_length()) {
        ob_clean();
    }

    header('Content-Type: application/json');
    echo json_encode([
        'reference' => $reference,
        'price' => $price,
        'points' => $points,
        'base64' => $base64,
        'copia_e_cola' => $copia_e_cola // Adicione isso aqui
    ]);

    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $config = read_config($config_path);
    $account_name = filter_input(INPUT_POST, 'account_name', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);

    if ($price <= 1) {
        die("O preço deve ser maior que 1.");
    }

    if (!$account_name) {
        die("Nome da conta inválido.");
    }

    $pdo = connect_to_database($config);
    $account_id = get_account_id($account_name, $pdo);

    if (!$account_id) {
        die("Conta não encontrada para o nome de usuário: $account_name");
    }

    $reference = 'REF' . strtoupper(uniqid()) . strtoupper(uniqid());
    $existing_pix = check_existing_pix($account_id, $price, $pdo);

    if ($existing_pix) {
        return_json_response($existing_pix['reference'], $existing_pix['price'], $existing_pix['points'], $existing_pix['base64']);
    } else {
        $pix_data = generate_pix_from_polopag($reference, $price, $config);
        $txid = $pix_data['txid'];
        $internalId = $pix_data['internalId'];
        $base64 = $pix_data['qrcodeBase64'];
        $copia_e_cola = $pix_data['pixCopiaECola'];
        $status = $pix_data['status'];
        $type = $config['coins_column'];
        $points = calculatePromotionPoints($price);

        store_pix_data($reference, $txid, $internalId, $base64, $copia_e_cola, $price, $points, $status, $type, $account_id, $pdo);
        return_json_response($reference, $price, $points, $base64, $copia_e_cola); // Adicione copia_e_cola aqui
    }
}
