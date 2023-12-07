<?php
global $db, $template_path, $character, $charbazaar_create, $charbazaar_tax;

/* ACCOUNT BY PLAYER */
$account = $db->query("SELECT `id`, `premdays`, `coins`, `coins_transferable` FROM `accounts` WHERE `id` = {$character['account_id']}");
$account = $account->fetch();
/* ACCOUNT BY PLAYER END */

?>
<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
                <span class="CaptionEdgeLeftTop"
                      style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop"
                  style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop"
                  style="background-image:url(<?= $template_path; ?>/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft"
                  style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
            <div class="Text">Your account</div>
            <span class="CaptionVerticalRight"
                  style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom"
                  style="background-image:url(<?= $template_path; ?>/images/global/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom"
                  style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom"
                  style="background-image:url(<?= $template_path; ?>/images/global/content/box-frame-edge.gif);"></span>
        </div>
    </div>
    <table class="Table5" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td>
                <div class="InnerTableContainer">
                    <table style="width:100%;">
                        <tbody>
                        <tr>
                            <td>
                                <div class="TableContentContainer">
                                    <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                                        <tbody>
                                        <tr>
                                            <td style="font-weight:normal;">
                                                <?= $account['coins'] ?>
                                                <img alt="Tibia Coins" title="Tibia Coins"
                                                     src="<?= $template_path; ?>/images/account/icon-tibiacoin.png">
                                                (<?= $account['coins_transferable'] ?>
                                                <img alt="Transferable Coins" title="Transferable Coins"
                                                     src="<?= $template_path; ?>/images/account/icon-tibiacointrusted.png">)
                                            </td>
                                            <td style="font-weight:normal;"><?= $charbazaar_create ?>
                                                <img alt="Transferable Coins" title="Transferable Coins"
                                                     src="<?= $template_path; ?>/images/account/icon-tibiacointrusted.png">
                                                to create an auction.
                                            </td>
                                            <td style="font-weight:normal;"><?= $charbazaar_tax ?>% fee on auction.</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
