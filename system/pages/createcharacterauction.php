<style>
form {
    display: block;
    margin-top: 0em;
	margin-block-end: 0em;

}
.BigButtonText {
    position: absolute;
    top: 0;
    left: 0;
    width: 135px;
    height: 25px;
    margin: 0;
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: none;
    text-align: center;
    color: #ffd18c;
    font-family: Verdana,Arial,Times New Roman,sans-serif;
    font-size: 12px;
    font-weight: 400;
    z-index: 20;
    text-shadow: -1px -1px 0 #000, 0 -1px 0 #000, 1px -1px 0 #000, 1px 0 0 #000, 1px 1px 0 #000, 0 1px 0 #000, -1px 1px 0 #000, -1px 0 0 #000;
}
.LevelRange {
    float: left;
    height: 8px;
    width: 8px;
    margin-right: 5px;
    border-bottom: 1px solid #000;
}
.LevelRangeInput {
    text-align: right;
    width: 100px;
}

.AuctionInput {
    width: 115px;
    margin-right: 7px;
    float: left;
}
.AuctionFilterHelper {
    clear: both;
}
.AuctionInputLong {
    width: 237px;
}

#CurrentTradesItemSearch #ItemInput {
    width: 350px;
}

.DisplayOptionsContent #ItemInput {
    width: 352px;
}
.DisplayOptionsContent {
    min-height: 25px;
    min-width: 600px;
}
.DisplayOptionsContent .DisplayOptionsLabel {
    float: left;
    padding-top: 2px;
}
.DisplayOptionsButton .BigButton {
	position: absolute;
	right: 5px;
}

.Content .BoxContent td {
    font-family: Verdana,Arial,Times New Roman,sans-serif;
    font-size: 10pt;
    color: #5a2800;
}
.LabelV100 {
    font-weight: 700;
    padding-right: 10px;
    white-space: nowrap;
    vertical-align: top;
    width: 100px;
}
.LabelV120 {
    font-weight: 700;
    padding-right: 10px;
    white-space: nowrap;
    vertical-align: top;
    width: 120px;
}
.PageNavigation {
    padding-right: 10px;
    padding-bottom: 7px;
}
	
.TableContentContainer {
    border: 1px solid #5f4d41;
    position: relative;
    margin-right: 7px;
    margin-bottom: 5px;
    height: 100%;
    background-color: #d4c0a1;
    padding: 0;
}
.InnerTableContainer .TableContentContainer {
    box-shadow: 3px 3px 2px #875f3e;
}


.AuctionLinks {
    position: absolute;
    right: 6px;
    top: 4px;
    height: 15px;
}
.AuctionLinks a {
    margin-left: 5px;
}
.AuctionCharacterName {
    font-weight: 700;
	margin-bottom: 4px;
}
.AuctionBody {
    display: flex;
    width: 100%;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-items: stretch;
    align-content: stretch;
    margin-top: 5px;
    padding-top: 5px;
    border-top: 1px dashed #5a2800;
}
.AuctionOutfit {
    position: relative;
}
.AuctionBodyBlock {
    margin-top: 5px;
    margin-bottom: 5px;
}
.AuctionDisplay {
    flex-basis: 76px;
    flex-grow: 0;
    flex-shrink: 0;
    order: 0;
    padding: 1px;
    background-color: #f1e0c6;
    border: 1px solid #5a2800;
    box-shadow: 2px 2px 5px 0 rgb(0 0 0 / 75%);
    float: left;
    margin-right: 10px;
}
.AuctionNewIcon {
    position: absolute;
    left: -4px;
    top: -4px;
    z-index: 100;
}
.AuctionOutfitImage {
    position: absolute;
    left: 5px;
    top: 2px;
    z-index: 100;
    image-rendering: crisp-edges;
    image-rendering: pixelated;
}
.AuctionItemsViewBox {
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(36px,1fr));
    grid-auto-rows: 38px;
}

.VSCCoinImages {
    position: relative;
    margin-left: 2px;
    margin-right: 2px;
}
.CVIcon.CVIconObject {
    width: 32px;
    height: 32px;
    overflow: hidden;
}
.CVIcon {
    float: left;
    position: relative;
    z-index: 150;
    cursor: help;
    background-color: #d5c0a1;
    border: 1px solid #5a2800;
    margin: auto;
    padding: 1px;
    width: 64px;
    height: 64px;
    overflow: hidden;
    image-rendering: crisp-edges;
    image-rendering: pixelated;
}
.CVIcon.CVIconObject img {
    width: 32px;
    height: 32px;
}

.ObjectAmount {
    position: absolute;
    bottom: 0;
    right: 2px;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 10px;
    font-weight: 700;
    z-index: 100;
    color: #fff;
    text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
}
.ShortAuctionData {
    position: relative;
    min-width: 300px;
    flex-shrink: 0;
    flex-grow: 1;
    padding: 10px;
    padding-top: 2px;
    padding-bottom: 2px;
    text-align: left;
    background-color: #f1e0c6;
    border: 1px solid #5a2800;
    box-shadow: 2px 2px 5px 0 rgb(0 0 0 / 50%);
}
.ShortAuctionData .AuctionTimer {
    position: absolute;
    top: 18px;
    right: 10px;
    width: 200px;
    text-align: right;
    background-color: #f1e0c6;
    color: red;
}
.ShortAuctionData .ShortAuctionDataLabel {
    width: 115px;
    font-weight: 700;
    float: left;
}
.ShortAuctionDataValue {
    text-align: right;
}
.ShortAuctionDataBidRow {
    margin-top: 5px;
}
.CurrentBid {
    width: 142px;
    flex-shrink: 0;
    margin-left: 10px;
    padding: 5px;
    text-align: center;
    background-color: #f1e0c6;
    border: 1px solid #5a2800;
    box-shadow: 2px 2px 5px 0 rgb(0 0 0 / 50%);
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}
.CurrentBid .Container {
    margin-right: auto;
    margin-left: auto;
    text-align: center;
}
.MyMaxBidLabel {
    font-weight: 700;
}
.MyMaxBidInput {
    width: 131px;
    margin-top: 4px;
    margin-bottom: 4px;
}
.SpecialCharacterFeatures {
    flex-basis: 300px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: stretch;
    align-items: center;
    padding: 10px;
    background-color: #f1e0c6;
    border: 1px solid #5a2800;
    box-shadow: 2px 2px 5px 0 rgb(0 0 0 / 50%);
}
.SpecialCharacterFeatures .Entry {
    width: 100%;
    min-width: 300px;
    text-align: left;
}
.SpecialCharacterFeatures .CharacterFeatureCategory {
    margin-right: 5px;
}
.AuctionInfo {
    width: 100%;
    text-align: center;
    font-weight: 700;
    font-size: 12px;
    color: #ff9712;
}



.LabelColumn {
    width: 80px!important;
    white-space: nowrap;
}
.LevelColumn {
    width: 30px!important;
    text-align: right;
}
.PercentageColumn {
    position: relative;
    margin-right: 2px;
}
.PercentageColumn {
    width: 100%;
    position: relative;
}
.PercentageBar {
    position: absolute;
    height: 18px;
    background-color: #5f4d41;
    top: 1px;
}
.PercentageBarSpacer {
    width: 5px;
}
.PercentageStringContainer {
    width: 100%;
    text-align: center;
}
.PercentageString {
    position: absolute;
    top: 3px;
    width: 50%;
    margin-left: 20px;
    left: 0;
    text-align: right;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    font-weight: 700;
    color: #fff;
    text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
}
.BlockPageNavigationRow {
    height: 20px;
    margin-top: 3px;
    margin-bottom: 5px;
    padding: 6px;
    padding-top: 3px;
    padding-bottom: 0;
    background-color: #d5c0a1;
    border: 1px solid #5a2800;
}
.BlockPage.BlockPageObject {
    grid-template-columns: repeat(auto-fill,minmax(36px,1fr));
    grid-auto-rows: 38px;
}
.BlockPage {
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(68px,1fr));
    grid-auto-rows: 73px;
    grid-gap: 1px;
}
.PageLink {
    display: inline-block;
    min-width: 15px;
    text-align: center;
}
.BlockPageNavigationRow .CurrentPageLink {
    display: block;
    min-width: 15px;
    padding-left: 2px;
    padding-right: 2px;
    background-color: #d5c0a1;
}
.CharacterDetailsBlock .ShowMoreOrLess {
    padding: 7px;
    padding-bottom: 7px;
    font-size: 8pt;
    text-align: right;
}
.CharacterDetailsBlock .ShowMoreOrLess a {
    cursor: pointer;
}
.CollapsedBlock .TableContent tr:last-child {
    display: table-row;
    text-align: center;
}
.CollapsedBlock .IndicateMoreEntries {
    font-style: italic;
}
.ColorGreen {
    color: green;
}
.CharacterTradeTibiaCoinBalance {
    position: absolute;
    top: 8px;
    color: #fff;
    right: 5px;
    font-size: 7pt;
}
</style>

<?php
/**
 *
 * Char Bazaar
 *
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Create Auction';

if($logged){
$getAccountCoins = $db->query('SELECT `id`, `premdays`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = ' . $account_logged->getId() .'');
$getAccountCoins = $getAccountCoins->fetch();
?>
<div class="CharacterTradeTibiaCoinBalance"><?php echo $getAccountCoins['coins'] ?><img src="<?php echo $template_path; ?>/images//account/icon-tibiacoin.png" class="VSCCoinImages" title="Tibia Coins"> <?php echo $getAccountCoins['coins'] ?><img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div>
<?php
}

$groups = new OTS_Groups_List();
$config_salt_enabled = $db->hasColumn('accounts', 'salt');

if(!$logged){
	if(!empty($errors))
		$twig->display('error_box.html.twig', array('errors' => $errors));

	$twig->display('account.login.html.twig', array(
		'redirect' => isset($_REQUEST['redirect']) ? $_REQUEST['redirect'] : null,
		'account' => USE_ACCOUNT_NAME ? 'Name' : 'Number',
		'account_login_by' => getAccountLoginByLabel(),
		'error' => isset($errors[0]) ? $errors[0] : null
	));
	return;
}

/* CHAR BAZAAR CONFIG */

$bazaar_tax = 20;
$bazaar_enter = 50;
$bazaar_level = 8;
$bazaar_prem = true;

/* CHAR BAZAAR CONFIG END */



$getAuctionStep = $_GET['step'];

/* REDIRECT TO STEP 1 */
if($getAuctionStep == ''){
	header('Location: ' . BASE_URL . '?subtopic=createcharacterauction&step=1');
}
/* REDIRECT TO STEP 1 END */


/* STEP 01 START */
if($getAuctionStep == 1){

/* PLAYERS */
$players = array();
$account_players = $account_logged->getPlayersList();
/*$account_players->orderBy('id');*/
/* PLAYERS END */

?>
<div id="ProgressBar">
  <div id="MainContainer">
    <div id="BackgroundContainer"> <img id="BackgroundContainerLeftEnd" src="<?php echo $template_path; ?>/images/global/content/stonebar-left-end.gif">
      <div id="BackgroundContainerCenter">
        <div id="BackgroundContainerCenterImage" style="background-image:url(<?php echo $template_path; ?>/images/global/content/stonebar-center.gif);"></div>
      </div>
      <img id="BackgroundContainerRightEnd" src="<?php echo $template_path; ?>/images/global/content/stonebar-right-end.gif"> </div>
    <img id="TubeLeftEnd" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-left-green.gif"> <img id="TubeRightEnd" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-right-blue.gif">
    <div id="FirstStep" class="Steps">
      <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-1-green.gif">
        <div class="StepText" style="font-weight:bold;">Select character</div>
      </div>
    </div>
    <div id="StepsContainer1">
      <div id="StepsContainer2">
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green-blue.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-2-blue.gif">
            <div class="StepText" style="font-weight:normal;">Check character </div>
          </div>
        </div>
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-blue.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-3-blue.gif">
            <div class="StepText" style="font-weight:normal;">Set up auction </div>
          </div>
        </div>
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-blue.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-4-blue.gif">
            <div class="StepText" style="font-weight:normal;">Confirm auction</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<form method="post" action="?subtopic=createcharacterauction&step=2">
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">Select Character (1/4)</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table5" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>
                <tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                        <tbody>
                          <tr>
                            <td><table style="float: left; width: 100%; " cellspacing="0" cellpadding="0">
                                <tbody>
                                  <tr>
                                    <td><table style="float: left; width: 100%; " cellspacing="0" cellpadding="0">
                                        <tbody>
                                          <tr>
                                            <td><select style="width: 100%;" name="auction_character">
												<?php foreach($account_players as $player){ ?>
                                                	<option value="<?php echo $player->getId() ?>"><?php echo $player->getName() ?> | Level <?php echo $player->getLevel() ?> | Vocation: <?php echo $player->getVocationName() ?></option>
												<?php } ?>
                                            </select></td>
                                          </tr>
                                        </tbody>
                                      </table></td>
                                  </tr>
                                </tbody>
                              </table></td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<table class="InnerTableButtonRow" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div style="float: right;">
		  <a href="?news">
			  <div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red_over.gif); visibility: hidden;"></div><input class="BigButtonText" type="button" value="Cancel"></div></div>
		  </a>
		  </div></td>
      <td><div style="float: left;">
			  <div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_submit" class="BigButtonText" type="submit" value="Next"></div></div>
      </div></td>
    </tr>
  </tbody>
</table>
</form>
<?php
}
/* STEP 01 END */


/* STEP 02 START */
if($getAuctionStep == 2){
	if(isset($_POST['auction_submit']) and isset($_POST['auction_character'])){
		$selected_character = $_POST['auction_character'];
		$next_truecount = 0;

/* PLAYERS */
$getCharacter = $db->query('SELECT `id`, `account_id`, `name`, `level`, `vocation`' . 'FROM `players`' . 'WHERE `id` = ' . $selected_character .'');
$getCharacter = $getCharacter->fetch();
/* PLAYERS END */


/* VERIFICA CONTA */	
$idLogged = $account_logged->getCustomField('id');

if($idLogged == $getCharacter['account_id']){
    $next_truecount++;
}else{
    header('Location: index.php?news');
}
/* VERIFICA CONTA */
	

/* GET LEVEL PLAYERS */
if($getCharacter['level'] >= 8){
	$verif_level = '<img src="' . $template_path . '/images/premiumfeatures/icon_yes.png">';
	$next_truecount++;
}else{
	$verif_level = '<img src="' . $template_path . '/images/premiumfeatures/icon_no.png">';
}
/* GET LEVEL PLAYERS END */


/* GET FRAGS PLAYERS */
$frags_enabled = $db->hasTable('player_killers') && $config['characters']['frags'];
$frags_count = 0;
if($frags_enabled) {
	$query = $db->query(
		'SELECT COUNT(`player_id`) as `frags`' .
		'FROM `player_killers`' .
		'WHERE `player_id` = ' . $getCharacter['id'] . ' ' .
		'GROUP BY `player_id`' .
		'ORDER BY COUNT(`player_id`) DESC');

	$frags_count = $query['frags'];
}
if($frags_count == 0){
	$verif_frags = '<img src="' . $template_path . '/images/premiumfeatures/icon_yes.png">';
	$next_truecount++;
}else{
	$verif_frags = '<img src="' . $template_path . '/images/premiumfeatures/icon_no.png">';
}
/* GET FRAGS PLAYERS END */


/* GET COINS */
$getCoins = $db->query('SELECT `coins`' . 'FROM `accounts`' . 'WHERE `id` = ' . $getCharacter['account_id'] .'');
$getCoins = $getCoins->fetch();

if($getCoins >= 50) {
	$verif_coins = '<img src="' . $template_path . '/images/premiumfeatures/icon_yes.png">';
	$next_truecount++;
}else{
	$verif_coins = '<img src="' . $template_path . '/images/premiumfeatures/icon_no.png">';
}
/* GET COINS END */


/* GET HOUSE */
$getHouse = $db->query('SELECT `owner`' . 'FROM `houses`' . 'WHERE `owner` = ' . $getCharacter['id'] .'');
$getHouse = $getHouse->fetch();

if($getHouse == 0) {
	$verif_house = '<img src="' . $template_path . '/images/premiumfeatures/icon_yes.png">';
	$next_truecount++;
}else{
	$verif_house = '<img src="' . $template_path . '/images/premiumfeatures/icon_no.png">';
}
/* GET HOUSE END */
	

/* GET GUILD */
$getGuildOwner = $db->query('SELECT `ownerid`' . 'FROM `guilds`' . 'WHERE `ownerid` = ' . $getCharacter['id'] .'');
$getGuildOwner = $getGuildOwner->fetch();

$getGuildInvited = $db->query('SELECT `player_id`' . 'FROM `guild_invites`' . 'WHERE `player_id` = ' . $getCharacter['id'] .'');
$getGuildInvited = $getGuildInvited->fetch();

$getGuildMember = $db->query('SELECT `player_id`' . 'FROM `guild_membership`' . 'WHERE `player_id` = ' . $getCharacter['id'] .'');
$getGuildMember = $getGuildMember->fetch();

if($getGuildOwner == 0 and $getGuildInvited == 0 and $getGuildMember == 0) {
	$verif_guild = '<img src="' . $template_path . '/images/premiumfeatures/icon_yes.png">';
	$next_truecount++;
}else{
	$verif_guild = '<img src="' . $template_path . '/images/premiumfeatures/icon_no.png">';
}
/* GET GUILD END */


/* GET MARKET */
$getMarket = $db->query('SELECT `player_id`' . 'FROM `market_offers`' . 'WHERE `player_id` = ' . $getCharacter['id'] .'');
$getMarket = $getMarket->fetch();

if($getMarket == 0){
	$verif_market = '<img src="' . $template_path . '/images/premiumfeatures/icon_yes.png">';
	$next_truecount++;
}else{
	$verif_market = '<img src="' . $template_path . '/images/premiumfeatures/icon_no.png">';
}
/* GET MARKET END */


/* GET REGISTER ACCOUNT */
$recovery_key = $account_logged->getCustomField('key');
if(empty($recovery_key)) {
	$verif_registered = '<img src="' . $template_path . '/images/premiumfeatures/icon_no.png">';
} else {
	$verif_registered = '<img src="' . $template_path . '/images/premiumfeatures/icon_yes.png">';
	$next_truecount++;
}
/* GET REGISTER ACCOUNT END */


/* GET CHARACTER ONLINE */
$getOnline = $db->query('SELECT `player_id`' . 'FROM `players_online`' . 'WHERE `player_id` = ' . $getCharacter['id'] .'');
$getOnline = $getOnline->rowCount();

if($getOnline == 0){
	$verif_online = '<img src="' . $template_path . '/images/premiumfeatures/icon_yes.png">';
	$next_truecount++;
}else{
	$verif_online = '<img src="' . $template_path . '/images/premiumfeatures/icon_no.png">';
}
/* GET CHARACTER ONLINE */



?>
<div id="ProgressBar">
  <div id="MainContainer">
    <div id="BackgroundContainer"> <img id="BackgroundContainerLeftEnd" src="<?php echo $template_path; ?>/images/global/content/stonebar-left-end.gif">
      <div id="BackgroundContainerCenter">
        <div id="BackgroundContainerCenterImage" style="background-image:url(<?php echo $template_path; ?>/images/global/content/stonebar-center.gif);"></div>
      </div>
      <img id="BackgroundContainerRightEnd" src="<?php echo $template_path; ?>/images/global/content/stonebar-right-end.gif"> </div>
    <img id="TubeLeftEnd" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-left-green.gif"> <img id="TubeRightEnd" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-right-blue.gif">
    <div id="FirstStep" class="Steps">
      <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-1-green.gif">
        <div class="StepText" style="font-weight:normal;">Select character</div>
      </div>
    </div>
    <div id="StepsContainer1">
      <div id="StepsContainer2">
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-2-green.gif">
            <div class="StepText" style="font-weight:bold;">Check character </div>
          </div>
        </div>
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green-blue.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-3-blue.gif">
            <div class="StepText" style="font-weight:normal;">Set up auction </div>
          </div>
        </div>
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-blue.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-4-blue.gif">
            <div class="StepText" style="font-weight:normal;">Confirm auction</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<form method="post" action="?subtopic=createcharacterauction&step=3">
<input type="hidden" name="auction_character" value="<?php echo $getCharacter['id'] ?>">
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">Check Character (2/4)</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table3" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>
                <tr>
                  <td><table style="width:100%;">
                      <tbody>
                        <tr>
                          <td><div class="TableContentContainer">
                              <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                                <tbody>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_coins; ?></td>
                                    <td>You need to have enough transferable Tibia Coins to create this auction.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_registered; ?></td>
                                    <td>Your account must be registered.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_level ?></td>
                                    <td>The character needs to be al least level 8.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_house; ?></td>
                                    <td>The character may not own any houses.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_house; ?></td>
                                    <td>The character may not bid for a house.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_house; ?></td>
                                    <td>The character may not be involved in a house transfer.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_guild; ?></td>
                                    <td>The character may not be a member of a guild.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_guild; ?></td>
                                    <td>The character may not have applied to a guild.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_market; ?></td>
                                    <td>The character may not have any running auctions in the Market.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_frags; ?></td>
                                    <td>The character may not be marked with a skull.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_online; ?></td>
                                    <td>The character must be in a protection zone.</td>
                                  </tr>
                                  <tr>
                                    <td style="vertical-align: middle;"><?php echo $verif_online; ?></td>
                                    <td>Your character may not have a logout block.</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<table class="InnerTableButtonRow" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div style="float: right;">
		  <a href="?subtopic=createcharacterauction&step=1">
			  <div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_over.gif); visibility: hidden;"></div><input class="BigButtonText" type="button" value="Back"></div></div>
		  </a>
		  </div></td>
      <td><div style="float: left;">
<?php if($next_truecount == 9){ ?>
	<div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_submit" class="BigButtonText" type="submit" value="Next"></div></div>
<?php }else{ ?>
	<div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red_over.gif); visibility: hidden;"></div><input name="auction_submit" class="BigButtonText" type="button" value="Erro"></div></div>
<?php } ?>
      </div></td>
    </tr>
  </tbody>
</table>
</form>
<?php
	}
}
/* STEP 02 END */


if($getAuctionStep == 3){
	if(isset($_POST['auction_submit']) and isset($_POST['auction_character'])){
	$selectCharacter = $_POST['auction_character'];
		
/* PLAYERS */
$getCharacter = $db->query('SELECT `id`, `account_id`, `name`, `level`, `vocation`, `sex`, `health`, `healthmax`, `mana`, `manamax`, `maglevel`, `manaspent`, `balance`, `skill_fist`, `skill_fist_tries`, `skill_club`, `skill_club_tries`, `skill_sword`, `skill_sword_tries`, `skill_axe`, `skill_axe_tries`, `skill_dist`, `skill_dist_tries`, `skill_shielding`, `skill_shielding_tries`, `skill_fishing`, `skill_fishing_tries`, `skill_shielding`, `skill_shielding_tries`, `cap`, `experience`, `created`, `soul`' . 'FROM `players`' . 'WHERE `id` = ' . $selectCharacter .'');
$getCharacter = $getCharacter->fetch();
/* PLAYERS END */


/* ACCOUNT BY PLAYER */
$getAccount = $db->query('SELECT `id`, `premdays`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = ' . $getCharacter['account_id'] .'');
$getAccount = $getAccount->fetch();
if($getAccount['premdays'] > 0){
	$character_prem = '<b>Premium Account</b>';
}else{
	$character_prem = '<b>Free Account</b>';
}
/* ACCOUNT BY PLAYER END */


if($getCharacter['sex'] == 0){
	$character_sex = 'Female';
}else{
	$character_sex = 'Male';
}


if($getCharacter['vocation'] == 0){
	$character_voc = 'None';
}elseif($getCharacter['vocation'] == 1){
	$character_voc = 'Sorcerer';
}elseif($getCharacter['vocation'] == 2){
	$character_voc = 'Druid';
}elseif($getCharacter['vocation'] == 3){
	$character_voc = 'Paladin';
}elseif($getCharacter['vocation'] == 4){
	$character_voc = 'Knight';
}elseif($getCharacter['vocation'] == 5){
	$character_voc = 'Master Sorcerer';
}elseif($getCharacter['vocation'] == 6){
	$character_voc = 'Elder Druid';
}elseif($getCharacter['vocation'] == 7){
	$character_voc = 'Royal Paladin';
}elseif($getCharacter['vocation'] == 8){
	$character_voc = 'Elite Knight';
}else{
	$character_voc = 'None';
}


$getAccountLogged = $db->query('SELECT `id`, `premdays`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = ' . $account_logged->getId() .'');
$getAccountLogged = $getAccountLogged->fetch();
if($getAccountLogged['premdays'] > 0){
	$character_prem = '<b>Premium Account</b>';
}else{
	$character_prem = '<b>Free Account</b>';
}


$charbazaar_create = $config['bazaar_create'];
$charbazaar_tax = $config['bazaar_tax'];
$charbazaar_bid = $config['bazaar_bid'];
$charbazaar_newacc = $config['bazaar_accountid'];

?>
<div id="ProgressBar">
  <div id="MainContainer">
    <div id="BackgroundContainer"> <img id="BackgroundContainerLeftEnd" src="<?php echo $template_path; ?>/images/global/content/stonebar-left-end.gif">
      <div id="BackgroundContainerCenter">
        <div id="BackgroundContainerCenterImage" style="background-image:url(<?php echo $template_path; ?>/images/global/content/stonebar-center.gif);"></div>
      </div>
      <img id="BackgroundContainerRightEnd" src="<?php echo $template_path; ?>/images/global/content/stonebar-right-end.gif"> </div>
    <img id="TubeLeftEnd" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-left-green.gif"> <img id="TubeRightEnd" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-right-blue.gif">
    <div id="FirstStep" class="Steps">
      <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-1-green.gif">
        <div class="StepText" style="font-weight:normal;">Select character</div>
      </div>
    </div>
    <div id="StepsContainer1">
      <div id="StepsContainer2">
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-2-green.gif">
            <div class="StepText" style="font-weight:normal;">Check character </div>
          </div>
        </div>
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-3-green.gif">
            <div class="StepText" style="font-weight:bold;">Set up auction </div>
          </div>
        </div>
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green-blue.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-4-blue.gif">
            <div class="StepText" style="font-weight:normal;">Confirm auction</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">You account</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table5" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>
				<tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                        <tbody>
                          <tr>
                            <td style="font-weight:normal;"><?php echo $getAccount['coins'] ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacoin.png"> (<?php echo $getAccount['coins'] ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacointrusted.png">)</td>
                            <td style="font-weight:normal;"><?php echo $charbazaar_create ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacointrusted.png"> to create an auction.</td>
                            <td style="font-weight:normal;"><?php echo $charbazaar_tax ?>% fee on auction.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">Set up auction (3/4)</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table5" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>
                <tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                        <tbody>
                          <tr>
                            <td><div class="AuctionHeader">
                                <div class="AuctionCharacterName"><?php echo $getCharacter['name'] ?></div>
                                Level: <?php echo $getCharacter['level'] ?> | Vocation: <?php echo $character_voc ?> | <?php echo $character_sex ?><br>
                              </div></td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
				
<tr>
  <td><table style="width: 100%;" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td style="vertical-align:top;width:210px;;"><div class="TableContentContainer">
              <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                <tbody>
                  <tr class="Even">
                    <td><span class="LabelV">Health:</span>
                      <div style="float:right; text-align: right;"><?php echo $getCharacter['health'] ?> / <?php echo $getCharacter['healthmax'] ?></div></td>
                  </tr>
                  <tr class="Odd">
                    <td><span class="LabelV">Mana:</span>
                      <div style="float:right; text-align: right;"><?php echo $getCharacter['mana'] ?> / <?php echo $getCharacter['manamax'] ?></div></td>
                  </tr>
                  <tr class="Even">
                    <td><span class="LabelV">Capacity:</span>
                      <div style="float:right; text-align: right;"><?php echo $getCharacter['cap'] ?></div></td>
                  </tr>
                  <tr class="Odd">
                    <td><span class="LabelV">Soul:</span>
                      <div style="float:right; text-align: right;"><?php echo $getCharacter['soul'] ?></div></td>
                  </tr>
                  <tr class="Even">
                    <td><span class="LabelV">Blessings:</span>
                      <div style="float:right; text-align: right;">7/7</div></td>
                  </tr>
                  <tr class="Odd">
                    <td><span class="LabelV">Mounts:</span>
                      <div style="float:right; text-align: right;">3</div></td>
                  </tr>
                  <tr class="Even">
                    <td><span class="LabelV">Outfits:</span>
                      <div style="float:right; text-align: right;">18</div></td>
                  </tr>
                  <tr class="Odd">
                    <td><span class="LabelV">Titles:</span>
                      <div style="float:right; text-align: right;">6</div></td>
                  </tr>
                </tbody>
              </table>
            </div></td>
          <td><div class="TableContentContainer">
              <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                <tbody>
                  <tr class="Even">
                    <td class="LabelColumn"><b>Axe Fighting</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_axe'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_axe_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_axe_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Odd">
                    <td class="LabelColumn"><b>Club Fighting</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_club'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_club_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_club_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Even">
                    <td class="LabelColumn"><b>Distance Fighting</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_dist'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_dist_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_dist_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Odd">
                    <td class="LabelColumn"><b>Fishing</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_fishing'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_fishing_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_fishing_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Even">
                    <td class="LabelColumn"><b>Fist Fighting</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_fist'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_fist_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_fist_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Odd">
                    <td class="LabelColumn"><b>Magic Level</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['maglevel'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['maglevel'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['maglevel'] ?> %</span></div></td>
                  </tr>
                  <tr class="Even">
                    <td class="LabelColumn"><b>Shielding</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_shielding'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_shielding_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_shielding_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Odd">
                    <td class="LabelColumn"><b>Sword Fighting</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_sword'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_sword_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_sword_tries'] ?> %</span></div></td>
                  </tr>
                </tbody>
              </table>
            </div></td>
        </tr>
      </tbody>
    </table></td>
</tr>


<tr>
  <td><div class="TableContentContainer">
      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
        <tbody>
          <tr class="Even">
            <td><span class="LabelV">Creation Date:</span>
              <div style="float:right; text-align: right;"><?php echo date('M d Y, G:i:s', $getCharacter['created']) ?></div></td>
          </tr>
          <tr class="Odd">
            <td><span class="LabelV">Experience:</span>
              <div style="float:right; text-align: right;"><?php echo number_format($getCharacter['experience'], 0, ',', ',')  ?></div></td>
          </tr>
          <tr class="Even">
            <td><span class="LabelV">Gold:</span>
              <div style="float:right; text-align: right;"><?php echo $getCharacter['balance'] ?></div></td>
          </tr>
          <tr class="Odd">
            <td><span class="LabelV">Achievement Points:</span>
              <div style="float:right; text-align: right;">164</div></td>
          </tr>
        </tbody>
      </table>
    </div></td>
</tr>
<tr>
  <td><div class="TableContentContainer">
      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
        <tbody>
          <tr class="Odd">
            <td><span class="LabelV">Charm Expansion:</span>
              <div style="float:right; text-align: right;"><img src="<?php echo $template_path; ?>/images/charactertrade/icon_no.png"> no</div></td>
          </tr>
          <tr class="Even">
            <td><span class="LabelV">Available Charm Points:</span>
              <div style="float:right; text-align: right;">0</div></td>
          </tr>
          <tr class="Odd">
            <td><span class="LabelV">Spent Charm Points:</span>
              <div style="float:right; text-align: right;">0</div></td>
          </tr>
        </tbody>
      </table>
    </div></td>
</tr>

<form method="post" action="?subtopic=createcharacterauction&step=4">
<input type="hidden" name="auction_character" value="<?php echo $getCharacter['id']; ?>">
<tr>
  <td><div class="TableContentContainer">
	  <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
		<tbody>
		  <tr>
			<td><table style="width:100%;">
				<tbody>
				  <tr>
					<td style="vertical-align:middle; text-align: right;" class="LabelV150">Price:</td>
					<td class="GreedyCell"><input style="width: 100%;" name="auction_price" type="text" placeholder="in Tibia Coins" size="29" maxlength="29" autofocus=""></td>
				  </tr>
				  <tr>
					<td style="vertical-align:middle; text-align: right;" class="LabelV150">Days to end:</td>
					<td class="GreedyCell"><input style="width: 100%;" name="auction_days" type="text" placeholder="min 4 days and max 28 days" size="29" maxlength="2" autofocus=""></td>
					<td><div id="auction_result"></div></td>
				  </tr>
				</tbody>
			  </table></td>
		  </tr>
		</tbody>
	  </table>
	</div></td>
</tr>

              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<table class="InnerTableButtonRow" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div style="float: right;">
		  <a href="?subtopic=createcharacterauction&step=1">
			  <div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_over.gif); visibility: hidden;"></div><input class="BigButtonText" type="button" value="Back"></div></div>
		  </a>
		  </div></td>
      <td><div style="float: left;">
	<div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_submit" class="BigButtonText" type="submit" value="Next"></div></div>
      </div></td>

    </tr>
  </tbody>
</table>
</form>
<?php
	}
}


if($getAuctionStep == 4){
	if(!empty($_POST['auction_price']) and !empty($_POST['auction_days'])){
	$selectCharacter = $_POST['auction_character'];


/* PLAYERS */
$getCharacter = $db->query('SELECT `id`, `account_id`, `name`, `level`, `vocation`, `sex`, `health`, `healthmax`, `mana`, `manamax`, `maglevel`, `manaspent`, `balance`, `skill_fist`, `skill_fist_tries`, `skill_club`, `skill_club_tries`, `skill_sword`, `skill_sword_tries`, `skill_axe`, `skill_axe_tries`, `skill_dist`, `skill_dist_tries`, `skill_shielding`, `skill_shielding_tries`, `skill_fishing`, `skill_fishing_tries`, `skill_shielding`, `skill_shielding_tries`, `cap`, `experience`, `created`, `soul`' . 'FROM `players`' . 'WHERE `id` = ' . $selectCharacter .'');
$getCharacter = $getCharacter->fetch();
/* PLAYERS END */


/* ACCOUNT BY PLAYER */
$getAccount = $db->query('SELECT `id`, `premdays`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = ' . $getCharacter['account_id'] .'');
$getAccount = $getAccount->fetch();
if($getAccount['premdays'] > 0){
	$character_prem = '<b>Premium Account</b>';
}else{
	$character_prem = '<b>Free Account</b>';
}
/* ACCOUNT BY PLAYER END */


if($getCharacter['sex'] == 0){
	$character_sex = 'Female';
}else{
	$character_sex = 'Male';
}


if($getCharacter['vocation'] == 0){
	$character_voc = 'None';
}elseif($getCharacter['vocation'] == 1){
	$character_voc = 'Sorcerer';
}elseif($getCharacter['vocation'] == 2){
	$character_voc = 'Druid';
}elseif($getCharacter['vocation'] == 3){
	$character_voc = 'Paladin';
}elseif($getCharacter['vocation'] == 4){
	$character_voc = 'Knight';
}elseif($getCharacter['vocation'] == 5){
	$character_voc = 'Master Sorcerer';
}elseif($getCharacter['vocation'] == 6){
	$character_voc = 'Elder Druid';
}elseif($getCharacter['vocation'] == 7){
	$character_voc = 'Royal Paladin';
}elseif($getCharacter['vocation'] == 8){
	$character_voc = 'Elite Knight';
}else{
	$character_voc = 'None';
}


$getAccount = $db->query('SELECT `id`, `premdays`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = ' . $account_logged->getId() .'');
$getAccount = $getAccount->fetch();


if($_POST['auction_days'] > 28){
	$auction_inputdays = $_POST['auction_days'];
	$auction_end = date('d M Y', strtotime('+' . $auction_inputdays . ' days'));
}else{
	$auction_inputdays = $_POST['auction_days'];
	$auction_end = date('d M Y', strtotime('+' . $auction_inputdays . ' days'));
}

if(isset($_POST['auction_price'])){
	$auction_pricetaxone = $_POST['auction_price'] / 100;
	$auction_pricetaxtwo = $auction_pricetaxone * 12;
	$auction_pricetaxtwo = number_format($auction_pricetaxtwo, 0, ',', ',');
	$auction_finalprice = $_POST['auction_price'] - $auction_pricetaxtwo;
	$auction_finalprice = number_format($auction_finalprice, 0, ',', ',');
}


$charbazaar_create = $config['bazaar_create'];
$charbazaar_tax = $config['bazaar_tax'];
$charbazaar_bid = $config['bazaar_bid'];
$charbazaar_newacc = $config['bazaar_accountid'];


?>



<div id="ProgressBar">
  <div id="MainContainer">
    <div id="BackgroundContainer"> <img id="BackgroundContainerLeftEnd" src="<?php echo $template_path; ?>/images/global/content/stonebar-left-end.gif">
      <div id="BackgroundContainerCenter">
        <div id="BackgroundContainerCenterImage" style="background-image:url(<?php echo $template_path; ?>/images/global/content/stonebar-center.gif);"></div>
      </div>
      <img id="BackgroundContainerRightEnd" src="<?php echo $template_path; ?>/images/global/content/stonebar-right-end.gif"> </div>
    <img id="TubeLeftEnd" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-left-green.gif"> <img id="TubeRightEnd" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-right-green.gif">
    <div id="FirstStep" class="Steps">
      <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-1-green.gif">
        <div class="StepText" style="font-weight:normal;">Select character</div>
      </div>
    </div>
    <div id="StepsContainer1">
      <div id="StepsContainer2">
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-2-green.gif">
            <div class="StepText" style="font-weight:normal;">Check character </div>
          </div>
        </div>
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-3-green.gif">
            <div class="StepText" style="font-weight:normal;">Set up auction </div>
          </div>
        </div>
        <div class="Steps" style="width:33%">
          <div class="TubeContainer"> <img class="Tube" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-tube-green.gif"> </div>
          <div class="SingleStepContainer"> <img class="StepIcon" src="<?php echo $template_path; ?>/images/global/content/progressbar/progress-bar-icon-4-green.gif">
            <div class="StepText" style="font-weight:bold;">Confirm auction</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">You account</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table5" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>
				<tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                        <tbody>
                          <tr>
                            <td style="font-weight:normal;"><?php echo $getAccount['coins'] ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacoin.png"> (<?php echo $getAccount['coins'] ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacointrusted.png">)</td>
                            <td style="font-weight:normal;"><?php echo $charbazaar_create ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacointrusted.png"> to create an auction.</td>
                            <td style="font-weight:normal;"><?php echo $charbazaar_tax ?>% fee on auction.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">Confirm Auction (4/4)</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table3" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>
				<tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                        <tbody>
                          <tr>
                            <td style="font-weight:bold;">Auction Start Price: </td>
                            <td style="font-weight:normal;"><?php echo $_POST['auction_price'] ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacointrusted.png"></td>
                          </tr>
						  <tr>
                            <td style="font-weight:bold;">Auction Tax (12%): </td>
                            <td style="font-weight:normal;"><?php echo $auction_pricetaxtwo ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacointrusted.png"></td>
                          </tr>
						  <tr>
                            <td style="font-weight:bold;">Total: </td>
                            <td style="font-weight:normal;"><?php echo $auction_finalprice ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacointrusted.png"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div></td>
		  
		  <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>
				<tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                        <tbody>
                          <tr>
                            <td style="font-weight:bold;">Auction total days: </td>
                            <td style="font-weight:normal;"><?php echo $_POST['auction_days'] ?> days</td>
                          </tr>
						  <tr>
                            <td style="font-weight:bold;">Start auction: </td>
                            <td style="font-weight:normal;"><?php echo date('d M Y') ?></td>
                          </tr>
						  <tr>
                            <td style="font-weight:bold;">End auction: </td>
                            <td style="font-weight:normal;"><?php echo $auction_end ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div></td>
      </tr>



    </tbody>
  </table>
</div>
<br>
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">Selected character</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table5" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>
                <tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                        <tbody>
                          <tr>
                            <td><div class="AuctionHeader">
                                <div class="AuctionCharacterName"><?php echo $getCharacter['name'] ?></div>
                                Level: <?php echo $getCharacter['level'] ?> | Vocation: <?php echo $character_voc ?> | <?php echo $character_sex ?><br>
                              </div></td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
				
<tr>
  <td><table style="width: 100%;" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td style="vertical-align:top;width:210px;;"><div class="TableContentContainer">
              <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                <tbody>
                  <tr class="Even">
                    <td><span class="LabelV">Health:</span>
                      <div style="float:right; text-align: right;"><?php echo $getCharacter['health'] ?> / <?php echo $getCharacter['healthmax'] ?></div></td>
                  </tr>
                  <tr class="Odd">
                    <td><span class="LabelV">Mana:</span>
                      <div style="float:right; text-align: right;"><?php echo $getCharacter['mana'] ?> / <?php echo $getCharacter['manamax'] ?></div></td>
                  </tr>
                  <tr class="Even">
                    <td><span class="LabelV">Capacity:</span>
                      <div style="float:right; text-align: right;"><?php echo $getCharacter['cap'] ?></div></td>
                  </tr>
                  <tr class="Odd">
                    <td><span class="LabelV">Soul:</span>
                      <div style="float:right; text-align: right;"><?php echo $getCharacter['soul'] ?></div></td>
                  </tr>
                  <tr class="Even">
                    <td><span class="LabelV">Blessings:</span>
                      <div style="float:right; text-align: right;">7/7</div></td>
                  </tr>
                  <tr class="Odd">
                    <td><span class="LabelV">Mounts:</span>
                      <div style="float:right; text-align: right;">3</div></td>
                  </tr>
                  <tr class="Even">
                    <td><span class="LabelV">Outfits:</span>
                      <div style="float:right; text-align: right;">18</div></td>
                  </tr>
                  <tr class="Odd">
                    <td><span class="LabelV">Titles:</span>
                      <div style="float:right; text-align: right;">6</div></td>
                  </tr>
                </tbody>
              </table>
            </div></td>
          <td><div class="TableContentContainer">
              <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                <tbody>
                  <tr class="Even">
                    <td class="LabelColumn"><b>Axe Fighting</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_axe'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_axe_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_axe_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Odd">
                    <td class="LabelColumn"><b>Club Fighting</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_club'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_club_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_club_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Even">
                    <td class="LabelColumn"><b>Distance Fighting</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_dist'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_dist_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_dist_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Odd">
                    <td class="LabelColumn"><b>Fishing</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_fishing'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_fishing_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_fishing_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Even">
                    <td class="LabelColumn"><b>Fist Fighting</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_fist'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_fist_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_fist_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Odd">
                    <td class="LabelColumn"><b>Magic Level</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['maglevel'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['maglevel'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['maglevel'] ?> %</span></div></td>
                  </tr>
                  <tr class="Even">
                    <td class="LabelColumn"><b>Shielding</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_shielding'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_shielding_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_shielding_tries'] ?> %</span></div></td>
                  </tr>
                  <tr class="Odd">
                    <td class="LabelColumn"><b>Sword Fighting</b></td>
                    <td class="LevelColumn"><?php echo $getCharacter['skill_sword'] ?></td>
                    <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: <?php echo $getCharacter['skill_sword_tries'] ?>%">
                        <div class="PercentageBarSpacer"></div>
                      </div>
                      <div class="PercentageStringContainer"><span class="PercentageString"><?php echo $getCharacter['skill_sword_tries'] ?> %</span></div></td>
                  </tr>
                </tbody>
              </table>
            </div></td>
        </tr>
      </tbody>
    </table></td>
</tr>
<tr>
  <td><div class="TableContentContainer">
      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
        <tbody>
          <tr class="Even">
            <td><span class="LabelV">Creation Date:</span>
              <div style="float:right; text-align: right;"><?php echo date('M d Y, G:i:s', $getCharacter['created']) ?></div></td>
          </tr>
          <tr class="Odd">
            <td><span class="LabelV">Experience:</span>
              <div style="float:right; text-align: right;"><?php echo number_format($getCharacter['experience'], 0, ',', ',')  ?></div></td>
          </tr>
          <tr class="Even">
            <td><span class="LabelV">Gold:</span>
              <div style="float:right; text-align: right;"><?php echo $getCharacter['balance'] ?></div></td>
          </tr>
        </tbody>
      </table>
    </div></td>
</tr>
              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>
<br>

<form method="post" action="?subtopic=createcharacterauction&step=confirm">
<input type="hidden" name="auction_price" value="<?php echo $_POST['auction_price'] ?>">
<input type="hidden" name="auction_days" value="<?php echo $_POST['auction_days'] ?>">
<input type="hidden" name="auction_character" value="<?php echo $_POST['auction_character'] ?>">
<table class="InnerTableButtonRow" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div style="float: right;">
		  <a href="?subtopic=createcharacterauction&step=1">
			  <div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red_over.gif); visibility: hidden;"></div><input class="BigButtonText" type="button" value="Cancel"></div></div>
		  </a>
		  </div></td>
      <td><div style="float: left;">
	<div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_confirm" class="BigButtonText" type="submit" value="Confirm"></div></div>
      </div></td>

    </tr>
  </tbody>
</table>	
</form>
	
	
	
	
	
	
	
	
<?php
	}else{
		header('Location: ' . BASE_URL . '?subtopic=createcharacterauction&step=1');
	}
}

if($getAuctionStep == 'confirm'){
/* CADASTRAR AUCTION */
if(isset($_POST['auction_confirm']) and isset($_POST['auction_price']) and isset($_POST['auction_days']) and isset($_POST['auction_character'])){
	$auction_price = $_POST['auction_price'];
	$auction_days = $_POST['auction_days'];
	$auction_character = $_POST['auction_character'];

/* UPDATE CHARACTER TO NEW ACCOUNT */
/*$update_character = $db->query('UPDATE `players` SET `account_id` = `1`' . 'WHERE `id` = ' . $auction_character .'');
$update_character = $update_character->fetch();*/

/* UPDATE CHARACTER TO NEW ACCOUNT END */

/* REGISTER AUCTION */
$getCharacter = $db->query('SELECT `id`, `account_id`' . 'FROM `players`' . 'WHERE `id` = ' . $auction_character .'');
$getCharacter = $getCharacter->fetch();

$getAccount = $db->query('SELECT `id`, `premdays`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = ' . $getCharacter['account_id'] .'');
$getAccount = $getAccount->fetch();

if($auction_days > 28){
	$auction_inputdays = $auction_days;
	$auction_end = date('Ymd', strtotime('+' . $auction_inputdays . ' days'));
}else{
	$auction_inputdays = $auction_days;
	$auction_end = date('Ymd', strtotime('+' . $auction_inputdays . ' days'));
}

$account_old = $getCharacter['account_id'];
$account_new = $config['bazaar_accountid'];
$player_id = $auction_character;
$price = $auction_price;

$date_start = date('YmdHis');
$date_end = $auction_end.date('His');

$getCoinsAccountLogged = $db->query('SELECT `id`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = ' . $account_logged->getId() .'');
$getCoinsAccountLogged = $getCoinsAccountLogged->fetch();

$charbazaar_mycoins = $getCoinsAccountLogged['coins'];
$charbazaar_create = $config['bazaar_create'];
$charbazaar_mycoins_calc = $charbazaar_mycoins - $charbazaar_create;

if($getCoinsAccountLogged['coins'] > $charbazaar_create){

$update_accountcoins = $db->exec('UPDATE `accounts` SET `coins` = '.$charbazaar_mycoins_calc.' WHERE `id` = '.$getAccount['id'].'');

$insert_auction = $db->exec('INSERT INTO `myaac_charbazaar` (`account_old`, `account_new`, `player_id`, `price`, `date_end`, `date_start`) VALUES ('.$account_old.', '.$account_new .', '.$player_id.', '.$price.', '.$date_end.', '.$date_start.')');

$update_character = $db->exec('UPDATE `players` SET `account_id` = '.$account_new.' WHERE `id` = '.$getCharacter['id'].'');

}
/* REGISTER AUCTION END */
?>
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">Auction created</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table5" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>
				<tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                        <tbody>
                          <tr>
                            <td style="font-weight:normal;"><img src="<?php echo $template_path; ?>/images/charactertrade/confirm.gif"></td>
                            <td style="font-weight:bold; font-size: 24px;">Auction created</td>
							<td>
							<a href="?subtopic=currentcharactertrades"><div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_confirm" class="BigButtonText" type="submit" value="View auction"></div></div></a>
							</td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>
<?php
}
/* CADASTRAR AUCTION END */
}

if($getAuctionStep > 4){
	echo 'Nenhum step encontrado';
}


?>