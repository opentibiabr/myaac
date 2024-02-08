<?php

global $db, $twig;
$map = [];

if ($db->hasTable('pagseguro_transactions')) {
    $result = $db->query("SELECT `account_id`, SUM(`bought`) as total FROM `pagseguro_transactions` GROUP BY account_id ORDER BY total DESC LIMIT 10;")->fetchAll();
    foreach ($result as $item) {
        if ($acc = $db->query("SELECT `id`, `name`, `email` FROM `accounts` WHERE `id` = {$item['account_id']}")->fetch()) {
            $map[$acc['id']] = [
                'name'    => $acc['name'],
                'email'   => $acc['email'],
                'players' => getPlayerByAccountId($acc['id']),
                'value'   => "R$ " . number_format((float)$item['total'], 2, ',', '.')
            ];
        }
    }
}
$twig->display('most_donates.html.twig', ['result' => $map]);
