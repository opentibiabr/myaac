<?php

if(!$db->hasTable('z_polls')) {
    $db->query('
        CREATE TABLE `polopag_transacoes` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `account_id` int(11) NOT NULL,
        `reference` varchar(255) DEFAULT NULL,
        `type` varchar(50) DEFAULT NULL,
        `txid` varchar(255) NOT NULL,
        `internalId` varchar(255) NOT NULL,
        `base64` mediumtext DEFAULT NULL,
        `copia_e_cola` mediumtext DEFAULT NULL,
        `price` decimal(10,2) DEFAULT NULL,
        `points` int(11) DEFAULT NULL,
        `coins_table` varchar(255) DEFAULT NULL,
        `status` varchar(50) DEFAULT NULL,
        `expires_at` datetime DEFAULT NULL,
        `origin` enum("game", "site") NOT NULL DEFAULT "site",
        `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    ');
}
