<?php
define('INCLUDED', true);
require 'polopag_config.php';

error_reporting(0);
ini_set('display_errors', 0);

function connect_to_database($config)
{
    try {
        $dsn = "mysql:host={$config['host']};dbname={$config['database']};port={$config['port']};charset=utf8mb4";
        $pdo = new PDO($dsn, $config['user'], $config['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erro ao conectar ao banco de dados.");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reference = filter_input(INPUT_POST, 'reference', FILTER_SANITIZE_STRING);

    if (!$reference) {
        echo json_encode(['status' => 'ERROR', 'message' => 'Referência inválida.']);
        exit;
    }

    $config = read_config($config_path);
    $pdo = connect_to_database($config);

    try {
        $query = "SELECT status FROM polopag_transacoes WHERE reference = :reference LIMIT 1";
        $stmt = $pdo->prepare($query);
        $stmt->execute([':reference' => $reference]);
        $pix = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($pix) {
            echo json_encode(['status' => $pix['status']]);
        } else {
            echo json_encode(['status' => 'NOT_FOUND']);
        }
    } catch (PDOException $e) {
        echo json_encode(['status' => 'ERROR', 'message' => "Erro ao verificar status do PIX"]);
    }
}
