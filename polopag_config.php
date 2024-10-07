<?php
if (!defined('INCLUDED')) {
    http_response_code(403);
    die('Direct access not permitted.');
}

global $config, $db;
require_once 'common.php';
require_once 'config.php';
require_once 'config.local.php';

error_reporting(0);
ini_set('display_errors', 0);

function read_config()
{
    $configPolopag['api_url'] = "https://api.polopag.com/v1/cobpix";
    $configPolopag['api_key'] = "95d2ceff4bd277201b0a28010aa6184a1f990c79fb8427b192c79988450b9cce"; // Adicionar sua key aqui!!!
    $configPolopag['coins_column'] = "coins_transferable";
    $configPolopag['webhook_url'] = "https://" . $_SERVER['HTTP_HOST'] . "/polopag_webhook.php";

    return $configPolopag;
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
