<?php
global $db, $template_path, $characterId, $showNameInInfo, $BlessCount, $Charm_Expansion, $Charm_Points;

/* PLAYER */
$character = $db->query("SELECT `id`, `account_id`, `name`, `level`, `vocation`, `sex`, `health`, `healthmax`, `mana`, `manamax`, `maglevel`, `manaspent`, `balance`, `skill_fist`, `skill_fist_tries`, `skill_club`, `skill_club_tries`, `skill_sword`, `skill_sword_tries`, `skill_axe`, `skill_axe_tries`, `skill_dist`, `skill_dist_tries`, `skill_shielding`, `skill_shielding_tries`, `skill_fishing`, `skill_fishing_tries`, `skill_shielding`, `skill_shielding_tries`, `cap`, `experience`, `created`, `soul`, `blessings` FROM `players` WHERE `id` = {$db->quote($characterId)}")->fetch();
/* PLAYERS END */

$character_sex = $character['sex'] == 0 ? 'Female' : 'Male';

if ($character['vocation'] == 0) {
    $character_voc = 'None';
} elseif ($character['vocation'] == 1) {
    $character_voc = 'Sorcerer';
} elseif ($character['vocation'] == 2) {
    $character_voc = 'Druid';
} elseif ($character['vocation'] == 3) {
    $character_voc = 'Paladin';
} elseif ($character['vocation'] == 4) {
    $character_voc = 'Knight';
} elseif ($character['vocation'] == 5) {
    $character_voc = 'Master Sorcerer';
} elseif ($character['vocation'] == 6) {
    $character_voc = 'Elder Druid';
} elseif ($character['vocation'] == 7) {
    $character_voc = 'Royal Paladin';
} elseif ($character['vocation'] == 8) {
    $character_voc = 'Elite Knight';
} else {
    $character_voc = 'None';
}
?>

<table class="Table5" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td>
            <div class="InnerTableContainer">
                <table style="width:100%;">
                    <tbody>
                    <?php if ($showNameInInfo) { ?>
                        <tr>
                            <td>
                                <div class="TableContentContainer">
                                    <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="AuctionHeader">
                                                    <div
                                                            class="AuctionCharacterName"><?= $character['name'] ?></div>
                                                    Level: <?= $character['level'] ?> |
                                                    Vocation: <?= $character_voc ?> | <?= $character_sex ?><br>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td>
                            <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td style="vertical-align:top;width:210px;;">
                                        <div class="TableContentContainer">
                                            <table class="TableContent" style="border:1px solid #faf0d7;"
                                                   width="100%">
                                                <tbody>
                                                <tr class="Even">
                                                    <td><span class="LabelV">Health:</span>
                                                        <div style="float:right; text-align: right;">
                                                            <?= $character['health'] ?>
                                                            / <?= $character['healthmax'] ?></div>
                                                    </td>
                                                </tr>
                                                <tr class="Odd">
                                                    <td><span class="LabelV">Mana:</span>
                                                        <div
                                                                style="float:right; text-align: right;"><?= $character['mana'] ?>
                                                            / <?= $character['manamax'] ?></div>
                                                    </td>
                                                </tr>
                                                <tr class="Even">
                                                    <td><span class="LabelV">Capacity:</span>
                                                        <div
                                                                style="float:right; text-align: right;"><?= $character['cap'] ?></div>
                                                    </td>
                                                </tr>
                                                <tr class="Odd">
                                                    <td><span class="LabelV">Soul:</span>
                                                        <div
                                                                style="float:right; text-align: right;"><?= $character['soul'] ?></div>
                                                    </td>
                                                </tr>
                                                <tr class="Even">
                                                    <td><span class="LabelV">Blessings:</span>
                                                        <div style="float:right; text-align: right;">
                                                            <?= $BlessCount ?> /7
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="Odd">
                                                    <td><span class="LabelV">Mounts:</span>
                                                        <div style="float:right; text-align: right;">0</div>
                                                    </td>
                                                </tr>
                                                <tr class="Even">
                                                    <td><span class="LabelV">Outfits:</span>
                                                        <div style="float:right; text-align: right;">0</div>
                                                    </td>
                                                </tr>
                                                <tr class="Odd">
                                                    <td><span class="LabelV">Titles:</span>
                                                        <div style="float:right; text-align: right;">0</div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="TableContentContainer">
                                            <table class="TableContent" style="border:1px solid #faf0d7;"
                                                   width="100%">
                                                <tbody>
                                                <tr class="Even">
                                                    <td class="LabelColumn"><b>Axe Fighting</b></td>
                                                    <td class="LevelColumn"><?= $character['skill_axe'] ?></td>
                                                    <td class="PercentageColumn">
                                                        <div id="SkillBar" class="PercentageBar"
                                                             style="width: <?= OTS_Player::getSkillPercent($character, 'skill_axe') ?>%">
                                                            <div class="PercentageBarSpacer"></div>
                                                        </div>
                                                        <div class="PercentageStringContainer">
                                                                <span class="PercentageString">
                                                                    <?= OTS_Player::getSkillPercent($character, 'skill_axe') ?> %
                                                                </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="Odd">
                                                    <td class="LabelColumn"><b>Club Fighting</b></td>
                                                    <td class="LevelColumn"><?= $character['skill_club'] ?></td>
                                                    <td class="PercentageColumn">
                                                        <div id="SkillBar" class="PercentageBar"
                                                             style="width: <?= OTS_Player::getSkillPercent($character, 'skill_club') ?>%">
                                                            <div class="PercentageBarSpacer"></div>
                                                        </div>
                                                        <div class="PercentageStringContainer">
                                                                <span class="PercentageString">
                                                                    <?= OTS_Player::getSkillPercent($character, 'skill_club') ?> %
                                                                </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="Even">
                                                    <td class="LabelColumn"><b>Distance Fighting</b></td>
                                                    <td class="LevelColumn"><?= $character['skill_dist'] ?></td>
                                                    <td class="PercentageColumn">
                                                        <div id="SkillBar" class="PercentageBar"
                                                             style="width: <?= OTS_Player::getSkillPercent($character, 'skill_dist') ?>%">
                                                            <div class="PercentageBarSpacer"></div>
                                                        </div>
                                                        <div class="PercentageStringContainer">
                                                                <span class="PercentageString">
                                                                    <?= OTS_Player::getSkillPercent($character, 'skill_dist') ?> %
                                                                </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="Odd">
                                                    <td class="LabelColumn"><b>Fishing</b></td>
                                                    <td class="LevelColumn"><?= $character['skill_fishing'] ?></td>
                                                    <td class="PercentageColumn">
                                                        <div id="SkillBar" class="PercentageBar"
                                                             style="width: <?= OTS_Player::getSkillPercent($character, 'skill_fishing') ?>%">
                                                            <div class="PercentageBarSpacer"></div>
                                                        </div>
                                                        <div class="PercentageStringContainer">
                                                                <span class="PercentageString">
                                                                    <?= OTS_Player::getSkillPercent($character, 'skill_fishing') ?> %
                                                                </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="Even">
                                                    <td class="LabelColumn"><b>Fist Fighting</b></td>
                                                    <td class="LevelColumn"><?= $character['skill_fist'] ?></td>
                                                    <td class="PercentageColumn">
                                                        <div id="SkillBar" class="PercentageBar"
                                                             style="width: <?= OTS_Player::getSkillPercent($character, 'skill_fist') ?>%">
                                                            <div class="PercentageBarSpacer"></div>
                                                        </div>
                                                        <div class="PercentageStringContainer">
                                                                <span class="PercentageString">
                                                                    <?= OTS_Player::getSkillPercent($character, 'skill_fist') ?> %
                                                                </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="Odd">
                                                    <td class="LabelColumn"><b>Magic Level</b></td>
                                                    <td class="LevelColumn"><?= $character['maglevel'] ?></td>
                                                    <td class="PercentageColumn">
                                                        <div id="SkillBar" class="PercentageBar"
                                                             style="width: <?= OTS_Player::getMagicLevelPercent($character) ?>%">
                                                            <div class="PercentageBarSpacer"></div>
                                                        </div>
                                                        <div class="PercentageStringContainer">
                                                                <span class="PercentageString">
                                                                    <?= OTS_Player::getMagicLevelPercent($character) ?> %
                                                                </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="Even">
                                                    <td class="LabelColumn"><b>Shielding</b></td>
                                                    <td class="LevelColumn"><?= $character['skill_shielding'] ?></td>
                                                    <td class="PercentageColumn">
                                                        <div id="SkillBar" class="PercentageBar"
                                                             style="width: <?= OTS_Player::getSkillPercent($character, 'skill_shielding') ?>%">
                                                            <div class="PercentageBarSpacer"></div>
                                                        </div>
                                                        <div class="PercentageStringContainer">
                                                                <span class="PercentageString">
                                                                    <?= OTS_Player::getSkillPercent($character, 'skill_shielding') ?> %
                                                                </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="Odd">
                                                    <td class="LabelColumn"><b>Sword Fighting</b></td>
                                                    <td class="LevelColumn"><?= $character['skill_sword'] ?></td>
                                                    <td class="PercentageColumn">
                                                        <div id="SkillBar" class="PercentageBar"
                                                             style="width: <?= OTS_Player::getSkillPercent($character, 'skill_sword') ?>%">
                                                            <div class="PercentageBarSpacer"></div>
                                                        </div>
                                                        <div class="PercentageStringContainer">
                                                                <span class="PercentageString">
                                                                    <?= OTS_Player::getSkillPercent($character, 'skill_sword') ?> %
                                                                </span>
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
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="TableContentContainer">
                                <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                                    <tbody>
                                    <tr class="Even">
                                        <td><span class="LabelV">Creation Date:</span>
                                            <div
                                                    style="float:right; text-align: right;"><?= date('d M Y, H:i:s', $character['created']) ?></div>
                                        </td>
                                    </tr>
                                    <tr class="Odd">
                                        <td><span class="LabelV">Experience:</span>
                                            <div
                                                    style="float:right; text-align: right;"><?= number_format($character['experience'], 0, ',', ',') ?></div>
                                        </td>
                                    </tr>
                                    <tr class="Even">
                                        <td><span class="LabelV">Gold:</span>
                                            <div
                                                    style="float:right; text-align: right;"><?= $character['balance'] ?></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="TableContentContainer">
                                <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                                    <tbody>
                                    <tr class="Odd">
                                        <td><span class="LabelV">Charm Expansion:</span>
                                            <div
                                                    style="float:right; text-align: right;"><?= $Charm_Expansion ?></div>
                                        </td>
                                    </tr>
                                    <tr class="Even">
                                        <td><span class="LabelV">Available Charm Points:</span>
                                            <div
                                                    style="float:right; text-align: right;"><?= $Charm_Points ?></div>
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
    </tr>
    </tbody>
</table>
