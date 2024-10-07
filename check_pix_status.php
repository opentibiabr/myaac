<?php
global $config, $db;
define('INCLUDED', true);
require 'polopag_config.php';

error_reporting(0);
ini_set('display_errors', 0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reference = filter_input(INPUT_POST, 'reference', FILTER_SANITIZE_STRING);

    if (!$reference) {
        echo json_encode(['status' => 'ERROR', 'message' => 'Referencia invalida.']);
        exit;
    }

    try {
        $query = "SELECT status FROM polopag_transacoes WHERE reference = :reference LIMIT 1";
        $stmt = $db->prepare($query);
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
