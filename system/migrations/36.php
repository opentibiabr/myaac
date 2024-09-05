<?php
// Add colum world_id and adjusts privileges on myaac_config table
global $db;
$db->exec("ALTER TABLE `myaac_config` ADD `world_id` INT(3) UNSIGNED NOT NULL DEFAULT 1 AFTER `value`");
$db->exec("ALTER TABLE `myaac_config` ADD FOREIGN KEY (`world_id`) REFERENCES `worlds` (`id`) ON DELETE CASCADE");
$db->exec("ALTER TABLE `myaac_config` DROP INDEX `name`");
$db->exec("ALTER TABLE `myaac_config` ADD UNIQUE `unique_name_world` (`name`, `world_id`)");
