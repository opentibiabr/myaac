<?php
/**
 *
 * Char Bazaar
 *
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Auction History';

if($logged){
$getAccountCoins = $db->query('SELECT `id`, `premdays`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = ' . $account_logged->getId() .'');
$getAccountCoins = $getAccountCoins->fetch();
?>
<div class="CharacterTradeTibiaCoinBalance"><?php echo $getAccountCoins['coins'] ?><img src="<?php echo $template_path; ?>/images//account/icon-tibiacoin.png" class="VSCCoinImages" title="Tibia Coins"> <?php echo $getAccountCoins['coins'] ?><img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div>
<?php
}
$getPageAuctions = $_GET['subtopic'];
$getPageDetails = $_GET['details'];
$getPageAction = $_GET['action'];
if(empty($getPageDetails) and empty($getPageAction)){
?>
<?php
	if(!$logged){
?>
<div class="SmallBox">
  <div class="MessageContainer">
    <div class="BoxFrameHorizontal" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-horizontal.gif);"></div>
    <div class="BoxFrameEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></div>
    <div class="BoxFrameEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></div>
    <div class="Message">
      <div class="BoxFrameVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></div>
      <div class="BoxFrameVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></div>
      <table style="width: 100%;">
        <tbody>
          <tr>
            <td><div style="float: right;">
                  <a href="?account/manage" target="_blank"><div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_over.gif); visibility: hidden;"></div><input name="auction_confirm" class="BigButtonText" type="button" value="Login"></div></div></a>
              </div>
              <p>Below you find all characters which have been <b>auctioned in the last 30 days.</b></p>
              <p><b>Log in</b> to your account for more options in this section.</p>
			  </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="BoxFrameHorizontal" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-horizontal.gif);"></div>
    <div class="BoxFrameEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></div>
    <div class="BoxFrameEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></div>
  </div>
</div>
<br>
<?php } ?>

<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">Auction History</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table3" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>

<?php
$getAuctions = $db->query('SELECT `id`, `account_new`, `player_id`, `price`, `date_end`, `date_start`, `bid_account`, `bid_price` FROM `myaac_charbazaar` ORDER BY `date_end` DESC');

foreach($getAuctions as $Auction){

/* GET INFO CHARACTER */
$getCharacter = $db->query('SELECT `name`, `vocation`, `level`, `sex`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet`' . 'FROM `players`' . 'WHERE `id` = ' . $Auction['player_id'] .'');
$getCharacter = $getCharacter->fetch();
/* GET INFO CHARACTER END */

/* OUTFIT CHARACTER */
$outfit_url = $config['outfit_images_url'] . '?id=' . $getCharacter['looktype']	. (!empty($getCharacter['lookaddons']) ? '&addons=' . $getCharacter['lookaddons'] : '') . '&head=' . $getCharacter['lookhead'] . '&body=' . $getCharacter['lookbody'] . '&legs=' . $getCharacter['looklegs'] . '&feet=' . $getCharacter['lookfeet'];
/* OUTFIT CHARACTER */

/* EQUIPAMENT CHARACTER */
global $db;
$eq_sql = $db->query('SELECT `pid`, `itemtype` FROM player_items WHERE player_id = '.$Auction['player_id'].' AND (`pid` >= 1 and `pid` <= 10)');
$equipment = array();
foreach($eq_sql as $eq)
	$equipment[$eq['pid']] = $eq['itemtype'];

$empty_slots = array("", "no_helmet", "no_necklace", "no_backpack", "no_armor", "no_handleft", "no_handright", "no_legs", "no_boots", "no_ring", "no_ammo");
for($i = 0; $i <= 10; $i++)
{
	if(!isset($equipment[$i]) || $equipment[$i] == 0)
		$equipment[$i] = $empty_slots[$i];
}

for($i = 1; $i < 11; $i++)
{
	if(Validator::number($equipment[$i]))
		$equipment[$i] = getItemImage($equipment[$i]);
	else
		$equipment[$i] = '<img src="images/items/' . $equipment[$i] . '.gif" width="32" height="32" border="0" alt=" ' . $equipment[$i] . '" />';
}
/* EQUIPAMENT CHARACTER END */

/* CONVERT SEX */
if($getCharacter['sex'] == 0){
	$character_sex = 'Male';
}else{
	$character_sex = 'Female';
}
/* CONVERT SEX END */

/* CONVERT VOCATION */
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
}
/* CONVERT VOCATION END */

/* GET MY BID */
$getAuctionBid = $db->query('SELECT `account_id`, `auction_id`, `bid`, `date`' . 'FROM `myaac_charbazaar_bid`' . 'WHERE `auction_id` = ' . $Auction['id'] .'');
$getAuctionBid = $getAuctionBid->fetch();


if($account_logged == $getAuctionBid['account_id']){
	$My_Bid = '<b>'.number_format($getAuctionBid['bid'], 0, ',', ',').'</b> <img src="'.$template_path.'/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins">';
}else{
	$My_Bid = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if(empty($getAuctionBid['account_id'])){
	$My_Bid = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}

/* GET MY BID END */
	
/* RIBBON NEW AUCTION */
$Ribbon_date = date('d M Y');
$ribbon_auctiondate = date('d M Y', strtotime($Auction['date_start']));
$ribbon_status = '';
if($Ribbon_date == $ribbon_auctiondate){
	$ribbon_status = '<div class="AuctionNewIcon"><img src="'.$template_path.'/images/global/content/ribbon-new-top-left.png"></div>';
}
/* RIBBON NEW AUCTION END */

/* VERIFY DATE */
$Hoje = date('d-m-Y');
$End = date('d-m-Y', strtotime($Auction['date_end']));

if(strtotime($Hoje) > strtotime($End)){
?>
                <tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                        <tbody>
                          <tr>
                            <td><div class="Auction">
                                <div class="AuctionHeader">
                                  <div class="AuctionLinks"><a href="?subtopic=pastcharactertrades&details=<?php echo $Auction['id'] ?>"><img title="show auction details" src="<?php echo $template_path; ?>/images/global/content/button-details-idle.png"></a></div>
                                  <div class="AuctionCharacterName"><a href="?subtopic=pastcharactertrades&details=<?php echo $Auction['id'] ?>"><?php echo $getCharacter['name'] ?></a></div>
                                  Level: <?php echo $getCharacter['level'] ?> | Vocation: <?php echo $character_voc ?> | <?php echo $character_sex ?><br>
                                </div>
                                <div class="AuctionBody">
								
                                  <div class="AuctionBodyBlock AuctionDisplay AuctionOutfit"><?php echo $ribbon_status ?><img class="AuctionOutfitImage" src="<?php echo $outfit_url ?>"></div>
                                  <div class="AuctionBodyBlock AuctionDisplay AuctionItemsViewBox">
                                    <div class="CVIcon CVIconObject" ><?php echo $equipment[2]; ?></div>
                                    <div class="CVIcon CVIconObject" ><?php echo $equipment[1]; ?></div>
                                    <div class="CVIcon CVIconObject" ><?php echo $equipment[3]; ?></div>
                                    <div class="CVIcon CVIconObject" ><?php echo $equipment[6]; ?></div>
									<div class="CVIcon CVIconObject" ><?php echo $equipment[4]; ?></div>
									<div class="CVIcon CVIconObject" ><?php echo $equipment[5]; ?></div>
									<div class="CVIcon CVIconObject" ><?php echo $equipment[9]; ?></div>
									<div class="CVIcon CVIconObject" ><?php echo $equipment[7]; ?></div>
									<div class="CVIcon CVIconObject" ><?php echo $equipment[10]; ?></div>
                                  </div>
                                  <div class="AuctionBodyBlock ShortAuctionData">
                                    <div class="ShortAuctionDataLabel">Auction Start:</div>
                                    <div class="ShortAuctionDataValue"><?php echo date('d M Y', strtotime($Auction['date_start'])) ?></div>
                                    <div class="ShortAuctionDataLabel">Auction End:</div>
                                    <div class="ShortAuctionDataValue"><?php echo date('d M Y', strtotime($Auction['date_end'])) ?></div>
                                    <div class="ShortAuctionDataBidRow">
                                      <div class="ShortAuctionDataLabel">Winning Bid:</div>
                                      <div class="ShortAuctionDataValue"><b><?php echo number_format($Auction['bid_price'], 0, ',', ',')  ?></b> <img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div>
                                    </div>
<?php
if($logged){
	if($account_logged == $getAuctionBid['account_id']){
?>
									<div class="ShortAuctionDataBidRow" style="background-color: #d4c0a1; padding: 5px; border: 1px solid #f0e8da; box-shadow: 2px 2px 5px 0 rgb(0 0 0 / 50%);">
                                      <div class="ShortAuctionDataLabel">My Bid:</div>
                                      <div class="ShortAuctionDataValue"><?php echo $My_Bid ?></div>
                                    </div>
<?php } } ?>
                                  </div>
<?php
if(strtotime($Hoje) > strtotime($End)){
?>
                                  <div class="AuctionBodyBlock CurrentBid">
									  <div class="Container">
                                      <div class="MyMaxBidLabel" style="font-weight: bold; color: green;">finished</div>
                                    </div>
                                  </div>
<?php } ?>
                                </div>
                              </div></td>
                          </tr>

                        </tbody>
                      </table>
                    </div></td>
                </tr>
<?php
} /* VERIFY DATE */
	} /* LOOP END */
?>
              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>
<?php
	}
?>
























































<?php
if(isset($getPageDetails)){
$auction_iddetails = $_GET['details'];


/* GET INFO AUCTION */
$getAuction = $db->query('SELECT `id`, `account_new`, `player_id`, `price`, `date_end`, `date_start`, `bid_account`, `bid_price` FROM `myaac_charbazaar`' . 'WHERE `id` = ' . $auction_iddetails .'');
$getAuction = $getAuction->fetch();
/* GET INFO AUCTION END */


/* GET INFO CHARACTER */
$getCharacter = $db->query('SELECT `name`, `vocation`, `level`, `sex`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet`, `health`, `healthmax`, `mana`, `manamax`, `maglevel`, `manaspent`, `balance`, `skill_fist`, `skill_fist_tries`, `skill_club`, `skill_club_tries`, `skill_sword`, `skill_sword_tries`, `skill_axe`, `skill_axe_tries`, `skill_dist`, `skill_dist_tries`, `skill_shielding`, `skill_shielding_tries`, `skill_fishing`, `skill_fishing_tries`, `skill_shielding`, `skill_shielding_tries`, `cap`, `soul`, `created`, `experience`, `blessings1`, `blessings2`, `blessings3`, `blessings4`, `blessings5`, `blessings6`, `blessings7`, `blessings8`' . 'FROM `players`' . 'WHERE `id` = ' . $getAuction['player_id'] .'');
$getCharacter = $getCharacter->fetch();
/* GET INFO CHARACTER END */


/* GET ITEMS DEPOT */
$getDepotItems = $db->query('SELECT `sid`, `pid`, `itemtype`, `count`, `attributes` FROM `player_depotitems`' . 'WHERE `player_id` = ' . $getAuction['player_id'] .'');
$getDepotItems = $getDepotItems->fetch();
/* GET ITEMS DEPOT END */


/* GET BLESS */
$BlessCount = 0;
if($getCharacter['blessings1'] >= 1){
	$BlessCount = $BlessCount++;
}elseif($getCharacter['blessings2'] >= 1){
	$BlessCount = $BlessCount++;
}elseif($getCharacter['blessings3'] >= 1){
	$BlessCount = $BlessCount++;
}elseif($getCharacter['blessings4'] >= 1){
	$BlessCount = $BlessCount++;
}elseif($getCharacter['blessings5'] >= 1){
	$BlessCount = $BlessCount++;
}elseif($getCharacter['blessings6'] >= 1){
	$BlessCount = $BlessCount++;
}elseif($getCharacter['blessings7'] >= 1){
	$BlessCount = $BlessCount++;
}
if($getCharacter['blessings8'] >= 1){
	$BlessTwist = 'yes';
}else{
	$BlessTwist = 'no';
}
/* GET BLESS END */


/* GET CHARM CHARACTER */
$getCharm = $db->query('SELECT `player_guid`, `charm_points`, `charm_expansion`, `rune_wound`, `rune_enflame`, `rune_poison`, `rune_freeze`, `rune_zap`, `rune_curse`, `rune_cripple`, `rune_parry`, `rune_dodge`, `rune_adrenaline`, `rune_numb`, `rune_cleanse`, `rune_bless`, `rune_scavenge`, `rune_gut`, `rune_low_blow`, `rune_divine`, `rune_vamp`, `rune_void`, `UsedRunesBit` FROM `player_charms`' . 'WHERE `player_guid` = ' . $getAuction['player_id'] .'');
$getCharm = $getCharm->fetch();

$Charm_Points = $getCharm['charm_points'];
if(empty($getCharm['charm_points'])){
	$Charm_Points = '0';
}else{
	$Charm_Points = $getCharm['charm_points'];
}

$Charm_UsedPoints = $getCharm['UsedRunesBit'];
if(empty($getCharm['UsedRunesBit'])){
	$Charm_UsedPoints = '0';
}else{
	$Charm_UsedPoints = $getCharm['UsedRunesBit'];
}

$Charm_Expansion = $getCharm['charm_expansion'];
if($getCharm['charm_expansion'] == 1){
	$Charm_Expansion = '<img src="' . $template_path . '/images/premiumfeatures/icon_yes.png"> yes';
}else{
	$Charm_Expansion = '<img src="' . $template_path . '/images/premiumfeatures/icon_no.png"> no';
}
/* GET CHARM CHARACTER END */


/* OUTFIT CHARACTER */
$outfit_url = $config['outfit_images_url'] . '?id=' . $getCharacter['looktype']	. (!empty($getCharacter['lookaddons']) ? '&addons=' . $getCharacter['lookaddons'] : '') . '&head=' . $getCharacter['lookhead'] . '&body=' . $getCharacter['lookbody'] . '&legs=' . $getCharacter['looklegs'] . '&feet=' . $getCharacter['lookfeet'];
/* OUTFIT CHARACTER */


/* EQUIPAMENT CHARACTER */
global $db;
$eq_sql = $db->query('SELECT `pid`, `itemtype` FROM player_items WHERE player_id = '.$getAuction['player_id'].' AND (`pid` >= 1 and `pid` <= 10)');
$equipment = array();
foreach($eq_sql as $eq)
	$equipment[$eq['pid']] = $eq['itemtype'];

$empty_slots = array("", "no_helmet", "no_necklace", "no_backpack", "no_armor", "no_handleft", "no_handright", "no_legs", "no_boots", "no_ring", "no_ammo");
for($i = 0; $i <= 10; $i++)
{
	if(!isset($equipment[$i]) || $equipment[$i] == 0)
		$equipment[$i] = $empty_slots[$i];
}

for($i = 1; $i < 11; $i++)
{
	if(Validator::number($equipment[$i]))
		$equipment[$i] = getItemImage($equipment[$i]);
	else
		$equipment[$i] = '<img src="images/items/' . $equipment[$i] . '.gif" width="32" height="32" border="0" alt=" ' . $equipment[$i] . '" />';
}
/* EQUIPAMENT CHARACTER END */


/* CONVERT SEX */
if($getCharacter['sex'] == 0){
	$character_sex = 'Male';
}else{
	$character_sex = 'Female';
}
/* CONVERT SEX END */


/* CONVERT VOCATION */
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
}
/* CONVERT VOCATION END */


/* GET QUESTS */
$quests = $config['quests'];
$sql_query_in = '';
$i = 0;
foreach($quests as $quest_name => $quest_storage)
{
	if($i != 0)
		$sql_query_in .= ', ';

	$sql_query_in .= $quest_storage;
	$i++;
}

$storage_sql = $db->query('SELECT `key`, `value` FROM `player_storage` WHERE `player_id` = '.$getAuction['player_id'].' AND `key` IN (' . $sql_query_in . ')');
$player_storage = array();
foreach($storage_sql as $storage)
	$player_storage[$storage['key']] = $storage['value'];

foreach($quests as &$storage) {
	$storage = isset($player_storage[$storage]) && $player_storage[$storage] > 0;
}
/* GET QUESTS END */


/* GET MY BID */
$getAuctionBid = $db->query('SELECT `account_id`, `auction_id`, `bid`, `date`' . 'FROM `myaac_charbazaar_bid`' . 'WHERE `auction_id` = ' . $getAuction['id'] .'');
$getAuctionBid = $getAuctionBid->fetch();


if($account_logged == $getAuctionBid['account_id']){
	$My_Bid = '<b style="color: #7ece48; text-shadow: -1px -1px 0 #000, 0 -1px 0 #000, 1px -1px 0 #000, 1px 0 0 #000, 1px 1px 0 #000, 0 1px 0 #000, -1px 1px 0 #000, -1px 0 0 #000;">'.number_format($getAuctionBid['bid'], 0, ',', ',').'</b> <img src="'.$template_path.'/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins">';
}else{
	$My_Bid = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if(empty($getAuctionBid['account_id'])){
	$My_Bid = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
/* GET MY BID END */

/* VERIFY DATE */
$Hoje = date('d-m-Y');
$End = date('d-m-Y', strtotime($getAuction['date_end']));
/* VERIFY DATE END */

?>
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">Auction Details</div>
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
                            <td><div class="Auction">
                                <div class="AuctionHeader">
                                  <div class="AuctionLinks"></div>
                                  <div class="AuctionCharacterName"><?php echo $getCharacter['name'] ?></div>
                                  Level: <?php echo $getCharacter['level'] ?> | Vocation: <?php echo $character_voc ?> | <?php echo $character_sex ?><br>
                                </div>
                                <div class="AuctionBody">
                                  <div class="AuctionBodyBlock AuctionDisplay AuctionOutfit" style="font-size: 10px; text-align: center;">
									  Current outfit: 
									  <img class="AuctionOutfitImage" src="<?php echo $outfit_url ?>">
								  </div>
                                  <div class="AuctionBodyBlock AuctionDisplay AuctionItemsViewBox">
                                    <div class="CVIcon CVIconObject" title="amulet"><?php echo $equipment[2]; ?></div>
                                    <div class="CVIcon CVIconObject" title="helmet"><?php echo $equipment[1]; ?></div>
                                    <div class="CVIcon CVIconObject" title="backpack"><?php echo $equipment[3]; ?></div>
                                    <div class="CVIcon CVIconObject" title="hand"><?php echo $equipment[6]; ?></div>
									<div class="CVIcon CVIconObject" title="armor"><?php echo $equipment[4]; ?></div>
									<div class="CVIcon CVIconObject" title="hand"><?php echo $equipment[5]; ?></div>
									<div class="CVIcon CVIconObject" title="ring"><?php echo $equipment[9]; ?></div>
									<div class="CVIcon CVIconObject" title="legs"><?php echo $equipment[7]; ?></div>
									<div class="CVIcon CVIconObject" title="extra"><?php echo $equipment[10]; ?></div>
									<div class="CVIcon CVIconObject" style="font-size: 10px; text-align: center;" title="soul">Soul<br><?php echo $getCharacter['soul'] ?></div>
									<div class="CVIcon CVIconObject" title="boots"><?php echo $equipment[8]; ?></div>
									<div class="CVIcon CVIconObject" style="font-size: 10px; text-align: center;" title="cap">Cap<br><?php echo $getCharacter['cap'] ?></div>
                                  </div>
                                  <div class="AuctionBodyBlock ShortAuctionData">
                                    <div class="ShortAuctionDataLabel">Auction Start:</div>
                                    <div class="ShortAuctionDataValue"><?php echo date('d M Y', strtotime($getAuction['date_start'])) ?></div>
                                    <div class="ShortAuctionDataLabel">Auction End:</div>
                                    <div class="ShortAuctionDataValue"><?php echo date('d M Y', strtotime($getAuction['date_end'])) ?></div>
									<div class="ShortAuctionDataBidRow">
                                      <div class="ShortAuctionDataLabel">Winning Bid:</div>
                                      <div class="ShortAuctionDataValue"><b><?php echo number_format($getAuction['bid_price'], 0, ',', ',')  ?></b> <img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div>
                                    </div>
<?php if($account_logged == $getAuctionBid['account_id']){ ?>
									<div class="ShortAuctionDataBidRow" style="background-color: #d4c0a1; padding: 5px; border: 1px solid #f0e8da;">
                                      <div class="ShortAuctionDataLabel">My Bid:</div>
                                      <div class="ShortAuctionDataValue"><?php echo $My_Bid ?></div>
                                    </div>
<?php } ?>
                                  </div>
<?php
	if(strtotime($Hoje) > strtotime($End)){
?>
								  <div class="AuctionBodyBlock CurrentBid">
                                    <div class="Container">
                                      <div class="MyMaxBidLabel" style="font-weight: bold; color: green;">finished</div>
                                    </div>
                                  </div>
<?php } ?>
                                  <div class="AuctionBodyBlock SpecialCharacterFeatures">
                                    <div class="Entry">
										<img class="CharacterFeatureCategory" src="<?php echo $template_path; ?>/images/charactertrade/usp-category-3.png">Blessings active: <?php echo $BlessCount ?>/7, Twist of Fate active: <?php echo $BlessTwist ?>
                                    </div>
                                    <div class="Entry">
										<img class="CharacterFeatureCategory" src="<?php echo $template_path; ?>/images/charactertrade/usp-category-7.png">Total Charm Points <?php echo $Charm_Points ?>, Unused Charm Points: <?php echo $Charm_UsedPoints ?>
                                    </div>
                                    <div class="Entry">
										<img class="CharacterFeatureCategory" src="<?php echo $template_path; ?>/images/charactertrade/usp-category-0.png">10 Distance Fighting (Loyalty bonus not included)
                                    </div>
                                    <div class="Entry">
										<img class="CharacterFeatureCategory" src="<?php echo $template_path; ?>/images/charactertrade/usp-category-0.png">10 Shielding (Loyalty bonus not included)
                                    </div>
                                    
                                  </div>
                                </div>
                              </div></td>
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
<center>
	<a href="?subtopic=currentcharactertrades" target="_blank">
		<div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_over.gif); visibility: hidden;"></div><input name="auction_confirm" class="BigButtonText" type="button" value="Back"></div></div>
	</a>
</center>
<br>
<div class="TopButtonContainer">
	<div class="TopButton" style="">
		<a href="#top">
			<img style="border:0px;" src="<?php echo $template_path; ?>/images/content/back-to-top.gif">
		</a>
	</div>
</div>
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">General</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table5" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
      <td><div class="InnerTableContainer">
          <table style="width:100%;">
            <tbody>
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
                                    <div style="float:right; text-align: right;"><?php echo $BlessCount ?>/7</div></td>
                                </tr>
                                <tr class="Odd">
                                  <td><span class="LabelV">Mounts:</span>
                                    <div style="float:right; text-align: right;">0</div></td>
                                </tr>
                                <tr class="Even">
                                  <td><span class="LabelV">Outfits:</span>
                                    <div style="float:right; text-align: right;">0</div></td>
                                </tr>
                                <tr class="Odd">
                                  <td><span class="LabelV">Titles:</span>
                                    <div style="float:right; text-align: right;">0</div></td>
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
                                  <td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: 0%">
                                      <div class="PercentageBarSpacer"></div>
                                    </div>
                                    <div class="PercentageStringContainer"><span class="PercentageString">0 %</span></div></td>
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
                            <div style="float:right; text-align: right;"><?php echo date('d M Y, G:i:s', $getCharacter['created']) ?></div></td>
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
			  <tr>
			  <td><div class="TableContentContainer">
				  <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
					<tbody>
					  <tr class="Odd">
						<td><span class="LabelV">Charm Expansion:</span>
						  <div style="float:right; text-align: right;"><?php echo $Charm_Expansion ?></div></td>
					  </tr>
					  <tr class="Even">
						<td><span class="LabelV">Available Charm Points:</span>
						  <div style="float:right; text-align: right;"><?php echo $Charm_Points ?></div></td>
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
<div class="TopButtonContainer">
	<div class="TopButton" style="">
		<a href="#top">
			<img style="border:0px;" src="<?php echo $template_path; ?>/images/content/back-to-top.gif">
		</a>
	</div>
</div>
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">Item Summary</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
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
                          <tr class="Even tmp-container-ItemSummary">
                            <td><div id="ajax-target-type-0" class="paged-container page-object-container">
                                
                                <div class="BlockPage BlockPageObject">
<?php foreach($getDepotItems as $DepotItem){ ?>
<div class="CVIcon CVIconObject">
	<img src="<?php echo $template_path; ?>/images/charactertrade/objects/<?php echo $DepotItem['sid'] ?>.gif">
<?php if($DepotItem['count'] > 1){ ?>
	<div class="ObjectAmount"><?php echo $DepotItem['count'] ?></div>
<?php } ?>
</div>
<?php } ?>
</div>
<?php if($DepotItem == 0){ ?>
<div style="text-align: center;">No items.</div>
<?php } ?>
                              </div></td>
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
<div class="CharacterDetailsBlock " id="Charms"><a name="Charms"></a>
  <div class="TopButtonContainer"><a name="Charms"></a>
    <div class="TopButton"><a name="Charms"></a><a onclick="ScrollToAnchor('top');"><img style="border: 0px;" src="<?php echo $template_path; ?>/images/global/content/back-to-top.gif"></a></div>
  </div>
  <div class="TableContainer">
    <div class="CaptionContainer">
      <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
        <div class="Text">Charms</div>
        <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
    </div>
<?php
$Charm_CountRunes = 0;

if($getCharm['rune_wound'] > 1){
	$Charm_CountRunes++;
	$rune_wound = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_wound = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_enflame'] > 1){
	$Charm_CountRunes++;
	$rune_enflame = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_enflame = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_poison'] > 1){
	$Charm_CountRunes++;
	$rune_poison = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_poison = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_freeze'] > 1){
	$Charm_CountRunes++;
	$rune_freeze = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_freeze = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_zap'] > 1){
	$Charm_CountRunes++;
	$rune_zap = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_zap = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_curse'] > 1){
	$Charm_CountRunes++;
	$rune_curse = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_curse = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_cripple'] > 1){
	$Charm_CountRunes++;
	$rune_cripple = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_cripple = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_parry'] > 1){
	$Charm_CountRunes++;
	$rune_parry = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_parry = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_dodge'] > 1){
	$Charm_CountRunes++;
	$rune_dodge = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_dodge = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_adrenaline'] > 1){
	$Charm_CountRunes++;
	$rune_adrenaline = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_adrenaline = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_numb'] > 1){
	$Charm_CountRunes++;
	$rune_numb = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_numb = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_cleanse'] > 1){
	$Charm_CountRunes++;
	$rune_cleanse = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_cleanse = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_bless'] > 1){
	$Charm_CountRunes++;
	$rune_bless = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_bless = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_scavenge'] > 1){
	$Charm_CountRunes++;
	$rune_scavenge = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_scavenge = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_gut'] > 1){
	$Charm_CountRunes++;
	$rune_gut = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_gut = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_low_blow'] > 1){
	$Charm_CountRunes++;
	$rune_low_blow = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_low_blow = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_divine'] > 1){
	$Charm_CountRunes++;
	$rune_divine = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_divine = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_vamp'] > 1){
	$Charm_CountRunes++;
	$rune_vamp = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_vamp = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
if($getCharm['rune_void'] > 1){
	$Charm_CountRunes++;
	$rune_void = '<img src="'.$template_path.'/images/premiumfeatures/icon_yes.png">';
}else{
	$rune_void = '<img src="'.$template_path.'/images/premiumfeatures/icon_no.png">';
}
?>
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
<tr class="Even">
	<td><?php echo $rune_wound ?> Rune Wound</td>
</tr>
<tr class="Odd">
	<td><?php echo $rune_enflame ?> Rune Enflame</td>
</tr>
<tr class="Even">
	<td><?php echo $rune_poison ?> Rune Poison</td>
</tr>
<tr class="Odd">
	<td><?php echo $rune_freeze ?> Rune Freeze</td>
</tr>
<tr class="Even">
	<td><?php echo $rune_zap ?> Rune Zap</td>
</tr>
<tr class="Odd">
	<td><?php echo $rune_curse ?> Rune Curse</td>
</tr>
<tr class="Even">
	<td><?php echo $rune_cripple ?> Rune Cripple</td>
</tr>
<tr class="Odd">
	<td><?php echo $rune_parry ?> Rune Parry</td>
</tr>
<tr class="Even">
	<td><?php echo $rune_dodge ?> Rune Dodge</td>
</tr>
<tr class="Odd">
	<td><?php echo $rune_adrenaline ?> Rune Aadrenaline</td>
</tr>
<tr class="Even">
	<td><?php echo $rune_numb ?> Rune Numb</td>
</tr>
<tr class="Odd">
	<td><?php echo $rune_cleanse ?> Rune Cleanse</td>
</tr>
<tr class="Even">
	<td><?php echo $rune_bless ?> Rune Bless</td>
</tr>
<tr class="Odd">
	<td><?php echo $rune_scavenge ?> Rune Scavenge</td>
</tr>
<tr class="Even">
	<td><?php echo $rune_gut ?> Rune Gut</td>
</tr>
<tr class="Odd">
	<td><?php echo $rune_low_blow ?> Rune Low Blow</td>
</tr>
<tr class="Even">
	<td><?php echo $rune_divine ?> Rune Divine</td>
</tr>
<tr class="Odd">
	<td><?php echo $rune_vamp ?> Rune Vamp</td>
</tr>
<tr class="Even">
	<td><?php echo $rune_void ?> Rune Void</td>
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
</div>
<br>
<div class="CharacterDetailsBlock " id="CompletedQuestLines"><a name="Completed Quest Lines"></a>
  <div class="TopButtonContainer"><a name="Completed Quest Lines"></a>
    <div class="TopButton"><a name="Completed Quest Lines"></a><a onclick="ScrollToAnchor('top');"><img style="border: 0px;" src="<?php echo $template_path; ?>/images/global/content/back-to-top.gif"></a></div>
  </div>
  <div class="TableContainer">
    <div class="CaptionContainer">
      <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
        <div class="Text">Completed Quest Lines</div>
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
                            <tr class="LabelH">
                              <td>Quest Line Name</td>
                            </tr>
<?php
$i_bg = 0;
foreach($quests as $quest_name => $quest_storage){
$i_bg = $i_bg + 1;
?>
<tr bgcolor="<?php echo getStyle($i_bg) ?>">
	<td> <?php echo $quest_name; ?></td>
</tr>
<?php } ?>
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
</div>






<?php
} /* END PAGE DETAILS*/
?>
