<?php

global $db, $template_path;

if (isset($_POST['auction_submit']) && isset($_POST['auction_character'])) {
    $characterId = $_POST['auction_character'];
    $character = $db->query("SELECT `id`, `account_id` FROM `players` WHERE `id` = {$db->quote($characterId)}")->fetch();
    $showNameInInfo = true;
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
                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-tube-right-blue.gif">
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
                            <div class="StepText" style="font-weight:bold;">Set up auction</div>
                        </div>
                    </div>
                    <div class="Steps" style="width:33%">
                        <div class="TubeContainer">
                            <img class="Tube"
                                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green-blue.gif">
                        </div>
                        <div class="SingleStepContainer">
                            <img class="StepIcon"
                                 src="<?= $template_path; ?>/images/global/content/progressbar/progress-bar-icon-4-blue.gif">
                            <div class="StepText" style="font-weight:normal;">Confirm auction</div>
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
                <div class="Text">Set up Auction (3/4)</div>
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
        <table class="Table5" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
                <td>
                    <div class="InnerTableContainer">
                        <table style="width:100%;">
                            <tbody>
                            <tr>
                                <form method="post" action="?subtopic=createcharacterauction&step=4">
                                    <input type="hidden" name="auction_character" value="<?= $characterId ?>">
                                    <tr>
                                        <td>
                                            <div class="TableContentContainer">
                                                <table class="TableContent" style="border:1px solid #faf0d7;"
                                                       width="100%">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <table style="width:100%;">
                                                                <tbody>
                                                                <tr>
                                                                    <td style="vertical-align:middle; text-align: right;"
                                                                        class="LabelV150">Price:
                                                                    </td>
                                                                    <td class="GreedyCell">
                                                                        <input type="number" style="width: 100%;"
                                                                               name="auction_price" min="1" max="999999"
                                                                               placeholder="in Tibia Coins"
                                                                               size="15" maxlength="15" autofocus>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align:middle; text-align: right;"
                                                                        class="LabelV150">Days to end:
                                                                    </td>
                                                                    <td class="GreedyCell">
                                                                        <input type="number" style="width: 100%;"
                                                                               name="auction_days" min="1" max="28"
                                                                               placeholder="min 1 day and max 28 days"
                                                                               size="29" maxlength="2" autofocus>
                                                                    </td>
                                                                    <td>
                                                                        <div id="auction_result"></div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
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
    <table class="InnerTableButtonRow" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td>
                <div style="float: right;">
                    <a href="?subtopic=createcharacterauction&step=1">
                        <div class="BigButton"
                             style="background-image:url(<?= $template_path; ?>/images/global/buttons/sbutton.gif)">
                            <div onmouseover="MouseOverBigButton('BackBazaar');"
                                 onmouseout="MouseOutBigButton('BackBazaar');">
                                <div id="BackBazaar" class="BigButtonOver"
                                     style="background-image: url(<?= $template_path; ?>/images/global/buttons/sbutton_over.gif); visibility: hidden;"></div>
                                <input class="BigButtonText" type="button" value="Back">
                            </div>
                        </div>
                    </a>
                </div>
            </td>
            <td>
                <div style="float: left;">
                    <div class="BigButton"
                         style="background-image:url(<?= $template_path; ?>/images/global/buttons/sbutton_green.gif)">
                        <div onmouseover="MouseOverBigButton('NextBazaar');"
                             onmouseout="MouseOutBigButton('NextBazaar');">
                            <div id="NextBazaar" class="BigButtonOver"
                                 style="background-image: url(<?= $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div>
                            <input name="auction_submit" class="BigButtonText" type="submit" value="Next">
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    </form>
    <?php
}
