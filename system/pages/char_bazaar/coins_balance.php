<style>
    .VSCCoinImages.first {
        margin-right: 8px;
    }
</style>
<?php
$getAccount = $db->query("SELECT `id`, `premdays`, `coins`, `coins_transferable` FROM `accounts` WHERE `id` = {$account_logged->getId()}");
$account = $getAccount->fetch();
?>
<div class="CharacterTradeTibiaCoinBalance">
    <?= $account['coins'] ?>
    <img src="<?= $template_path; ?>/images/account/icon-tibiacoin.png" class="VSCCoinImages first"
         title="Tibia Coins">

    <?php if ($db->hasColumn('accounts', 'coins_transferable')) { ?>
        <?= $account['coins_transferable'] ?>
        <img src="<?= $template_path; ?>/images/account/icon-tibiacointrusted.png" class="VSCCoinImages"
             title="Transferable Tibia Coins">
    <?php } ?>
</div>
