<?php
if (!defined('INCLUDED')) {
    http_response_code(403);
    die('Acesso direto não permitido.');
}

error_reporting(0);
ini_set('display_errors', 0);

// Path para o config.lua
$config_path = ''; // Adicionar o caminho do servidor!!!
function read_config($config_path)
{
    $config = [];
    if (!file_exists($config_path)) {
        die("Arquivo de configuração não encontrado.");
    }

    $file_content = file_get_contents($config_path);

    preg_match('/mysqlHost\s*=\s*"(.*)"/', $file_content, $host_match);
    preg_match('/mysqlUser\s*=\s*"(.*)"/', $file_content, $user_match);
    preg_match('/mysqlPass\s*=\s*"(.*)"/', $file_content, $password_match);
    preg_match('/mysqlDatabase\s*=\s*"(.*)"/', $file_content, $database_match);
    preg_match('/mysqlPort\s*=\s*(\d+)/', $file_content, $port_match);

    $config['host'] = $host_match[1];
    $config['user'] = $user_match[1];
    $config['password'] = $password_match[1];
    $config['database'] = $database_match[1];
    $config['port'] = $port_match[1];
    $config['api_url'] = "https://api.polopag.com/v1/cobpix";
    $config['api_key'] = ""; // Adicionar sua key aqui!!! Works with PIX from: https://polopag.com
    $config['coins_column'] = "coins_transferable";
    $config['webhook_url'] = "https://" . $_SERVER['HTTP_HOST'] . "/polopag_webhook.php";

    return $config;
}

function calculatePromotionPoints($price) { // Implemente ou modifique sua própria fórmula de cálculo de pontos
    if ($price > 0) {
        $points = floor($price);
        if ($price > 50) {
            $points *= 2;
        }
        return $points;
    } else {
        return 0;
    }
}
