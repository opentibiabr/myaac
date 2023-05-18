<?php

if (!$db->hasColumn(TABLE_PREFIX . 'accounts', 'phone')) {
    $db->exec("ALTER TABLE `" . TABLE_PREFIX . "accounts`  ADD `phone` VARCHAR(15) NULL AFTER `rlname`;");
}

if (!$db->hasColumn(TABLE_PREFIX . 'players', 'ismain')) {
    $db->exec("ALTER TABLE `" . TABLE_PREFIX . "players`  ADD `ismain` BOOLEAN NOT NULL DEFAULT FALSE AFTER `istutorial`;");
}
