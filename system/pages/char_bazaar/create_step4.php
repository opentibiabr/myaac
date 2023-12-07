<?php

global $db, $character_prem_info, $template_path, $charbazaar_tax;

if (!empty($_POST['auction_price']) && !empty($_POST['auction_days'])) {
    $characterId = $_POST['auction_character'];
    $character = $db->query("SELECT `id`, `account_id` FROM `players` WHERE `id` = {$db->quote($characterId)}")->fetch();
    $showNameInInfo = true;

    $auction_inputdays = $_POST['auction_days'];
    $auction_end = date('d M Y', strtotime('+' . $auction_inputdays . ' days'));

    if (isset($_POST['auction_price'])) {
        $auction_pricetaxone = $_POST['auction_price'] / 100;
        $auction_pricetaxtwo = $auction_pricetaxone * 12;
        $auction_pricetaxtwo = number_format($auction_pricetaxtwo, 0, ',', ',');
        $auction_finalprice = $_POST['auction_price'] - $auction_pricetaxtwo;
        $auction_finalprice = number_format($auction_finalprice, 0, ',', ',');
    }
    ?>

    <div id="ProgressBar">
        <div id="MainContainer">
            <div id="BackgroundContainer">
                <img id="BackgroundContainerLeftEnd"
                     src="<?= $template_path; ?>/images/global/content/stonebar-left-end.gif">
                <div id="BackgroundContainerCenter">
                    <div id="BackgroundContainerCenterImage"
                         style="background-image:url(<?= $template_path; ?>/images/global/content/stonebar-center.gif);"></div>
                </div>
                <img id="BackgroundContainerRightEnd"
                     src="<?= $template_path; ?>/images/global/content/stonebar-right-end.gif"></div>
            <img id="TubeLeftEnd"
                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-tube-left-green.gif">
            <img id="TubeRightEnd"
                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-tube-right-green.gif">
            <div id="FirstStep" class="Steps">
                <div class="SingleStepContainer">
                    <img class="StepIcon"
                         src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-icon-1-green.gif">
                    <div class="StepText" style="font-weight:normal;">Select character</div>
                </div>
            </div>
            <div id="StepsContainer1">
                <div id="StepsContainer2">
                    <div class="Steps" style="width:33%">
                        <div class="TubeContainer">
                            <img class="Tube"
                                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green.gif">
                        </div>
                        <div class="SingleStepContainer">
                            <img class="StepIcon"
                                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-icon-2-green.gif">
                            <div class="StepText" style="font-weight:normal;">Check character</div>
                        </div>
                    </div>
                    <div class="Steps" style="width:33%">
                        <div class="TubeContainer">
                            <img class="Tube"
                                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green.gif">
                        </div>
                        <div class="SingleStepContainer">
                            <img class="StepIcon"
                                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-icon-3-green.gif">
                            <div class="StepText" style="font-weight:normal;">Set up auction</div>
                        </div>
                    </div>
                    <div class="Steps" style="width:33%">
                        <div class="TubeContainer">
                            <img class="Tube"
                                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green.gif">
                        </div>
                        <div class="SingleStepContainer">
                            <img class="StepIcon"
                                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-icon-4-green.gif">
                            <div class="StepText" style="font-weight:bold;">Confirm auction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require SYSTEM . 'pages/char_bazaar/your_account.php'; ?>
    <br>
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
                <div class="Text">Confirm Auction (4/4)</div>
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
        <table class="Table3" cellspacing="0" cellpadding="0">
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
                                                <td style="font-weight:bold;">Auction Start Price:</td>
                                                <td style="font-weight:normal;"><?= $_POST['auction_price'] ?> <img
                                                            src="<?= $template_path; ?>/images/account/icon-tibiacointrusted.png">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">
                                                    Auction Tax (<?= $charbazaar_tax ?>%):
                                                </td>
                                                <td style="font-weight:normal;"><?= $auction_pricetaxtwo ?> <img
                                                            src="<?= $template_path; ?>/images/account/icon-tibiacointrusted.png">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">Total:</td>
                                                <td style="font-weight:normal;"><?= $auction_finalprice ?> <img
                                                            src="<?= $template_path; ?>/images/account/icon-tibiacointrusted.png">
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
                </td>

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
                                                <td style="font-weight:bold;">Auction total days:</td>
                                                <td style="font-weight:normal;"><?= $auction_inputdays ?> days
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">Start auction:</td>
                                                <td style="font-weight:normal;"><?= date('d M Y') ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight:bold;">End auction:</td>
                                                <td style="font-weight:normal;"><?= $auction_end ?></td>
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
    <br>
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
                <div class="Text">Selected Character</div>
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
        <?php require SYSTEM . 'pages/char_bazaar/char_info.php'; ?>
    </div>
    <br>

    <form method="post" action="?subtopic=createcharacterauction&step=confirm">
        <input type="hidden" name="auction_price" value="<?= $_POST['auction_price'] ?>">
        <input type="hidden" name="auction_days" value="<?= $_POST['auction_days'] ?>">
        <input type="hidden" name="auction_character" value="<?= $_POST['auction_character'] ?>">
        <table class="InnerTableButtonRow" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td>
                    <div style="float: right;">
                        <a href="?subtopic=createcharacterauction&step=1">
                            <div class="BigButton"
                                 style="background-image:url(<?= $template_path; ?>/images/global/buttons/sbutton_red.gif)">
                                <div onmouseover="MouseOverBigButton('CancelBazaar');"
                                     onmouseout="MouseOutBigButton('CancelBazaar');">
                                    <div id="CancelBazaar" class="BigButtonOver"
                                         style="background-image: url(<?= $template_path; ?>/images/global/buttons/sbutton_red_over.gif); visibility: hidden;"></div>
                                    <input class="BigButtonText" type="button" value="Cancel">
                                </div>
                            </div>
                        </a>
                    </div>
                </td>
                <td>
                    <div style="float: left;">
                        <div class="BigButton"
                             style="background-image:url(<?= $template_path; ?>/images/global/buttons/sbutton_green.gif)">
                            <div onmouseover="MouseOverBigButton('ConfirmBazaar');"
                                 onmouseout="MouseOutBigButton('ConfirmBazaar');">
                                <div id="ConfirmBazaar" class="BigButtonOver"
                                     style="background-image: url(<?= $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div>
                                <input name="auction_confirm" class="BigButtonText" type="submit" value="Confirm">
                            </div>
                        </div>
                    </div>
                </td>

            </tr>
            </tbody>
        </table>
    </form>


    <?php
} else {
    header('Location: ' . BASE_URL . '?subtopic=createcharacterauction&step=1');
}
