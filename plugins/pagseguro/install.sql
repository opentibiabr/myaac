CREATE TABLE `pagseguro_transactions` (
  `id`               int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `transaction_code` varchar(50) NOT NULL,
  `account_id`       int(11) UNSIGNED NOT NULL,
  `payment_method`   varchar(50) NOT NULL,
  `payment_status`   varchar(50) NOT NULL,
  `code`             varchar(10) NOT NULL,
  `coins_amount`     int(11) NOT NULL,
  `bought`           int(11) DEFAULT NULL,
  `delivered`        char(1) NOT NULL DEFAULT '0',
  `in_double`        char(1) NOT NULL DEFAULT '0',
  `request`          longtext,
  `created_at`       datetime NOT NULL,
  `updated_at`       datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `pagseguro_transactions`
  ADD UNIQUE KEY `transaction_code` (`transaction_code`,`payment_status`),
  ADD KEY `pagseguro_transactions_account_fk` (`account_id`),
  ADD KEY `payment_method` (`payment_method`),
  ADD KEY `payment_status` (`payment_status`),
  ADD KEY `coins_amount` (`coins_amount`),
  ADD KEY `delivered` (`delivered`);


CREATE TABLE `myaac_send_items` (
   `id`               int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `transaction_code` varchar(50) NOT NULL,
   `item_id`          varchar(20) NOT NULL,
   `item_name`        varchar(50) NOT NULL,
   `item_count`       int(11) UNSIGNED NOT NULL DEFAULT '1',
   `account_id`       int(11) UNSIGNED NOT NULL,
   `payment_method`   varchar(50) NOT NULL,
   `payment_status`   varchar(50) NOT NULL,
   `status`           char(1) NOT NULL DEFAULT '0' COMMENT '0 = pending | 1 = approved | 2 = delivered | 3 = canceled',
   `request`          longtext,
   `created_at`       datetime NOT NULL,
   `updated_at`       datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `myaac_send_items`
  ADD UNIQUE KEY `transaction_code` (`transaction_code`,`payment_status`),
  ADD KEY `myaac_send_items_account_fk` (`account_id`),
  ADD KEY `status` (`status`),
  ADD KEY `payment_method` (`payment_method`),
  ADD KEY `payment_status` (`payment_status`);
