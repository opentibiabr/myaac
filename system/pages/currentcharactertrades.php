<?php
/**
 *
 * Char Bazaar
 *
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Current Auctions';

if($logged){
$getAccountCoins = $db->query('SELECT `id`, `premdays`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = '.$account_logged->getId().'');
$getAccountCoins = $getAccountCoins->fetch();
}
// GET PAGES
$getPageAuctions = $_GET['subtopic'];
$getPageDetails = $_GET['details'];
$getPageAction = $_GET['action'];
// GET PAGES

// CHAR BAZAAR CONFIGS
$bazaar_create = $config['bazaar_create'];
$bazaar_tax = $config['bazaar_tax'];
$bazaar_bid = $config['bazaar_bid'];
$bazaar_accountid = $config['bazaar_accountid'];
// CHAR BAZAAR CONFIGS

?>

<!-- ACCOUNT COINS TOP BOX -->
<?php if($logged){ ?>
<div class="CharacterTradeTibiaCoinBalance"><?php echo $getAccountCoins['coins'] ?><img src="<?php echo $template_path; ?>/images//account/icon-tibiacoin.png" class="VSCCoinImages" title="Tibia Coins"> <?php echo $getAccountCoins['coins'] ?><img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div>
<?php } ?>
<!-- ACCOUNT COINS TOP BOX -->

<!-- FIRST PAGE - SHOW AUCTIONS -->
<?php
if(empty($getPageDetails) && !isset($getPageDetails)){
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
              <p><b>Use Tibia's character auction feature to sell or purchase Tibia characters without risk!</b></p>
              <p><b>Log in</b> to submit a bid to <b>purchase a Tibia character</b> from another player for your Tibia account!</p>
              <p>To <b>sell a Tibia character</b> from your account to another player, log into the <b>Tibia Client</b> and set up an auction.</p>
              <p>Note that Tibia characters can only be <b>purchased with transferable Tibia Coins!</b></p></td>
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
      <div class="Text">Current Auctions</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table3" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>

<?php
$getAuctions = $db->query('SELECT `id`, `account_old`, `account_new`, `player_id`, `price`, `date_end`, `date_start`, `bid_account`, `bid_price`, `status` FROM `myaac_charbazaar` ORDER BY `date_start` DESC');

foreach($getAuctions as $Auction){ // LOOP AUCTIONS

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
foreach($eq_sql as $eq){
	$equipment[$eq['pid']] = $eq['itemtype'];
}
$empty_slots = array("", "no_helmet", "no_necklace", "no_backpack", "no_armor", "no_handleft", "no_handright", "no_legs", "no_boots", "no_ring", "no_ammo");
for($i = 0; $i <= 10; $i++){
	if(!isset($equipment[$i]) || $equipment[$i] == 0)
		$equipment[$i] = $empty_slots[$i];
}

for($i = 1; $i < 11; $i++){
	if(Validator::number($equipment[$i]))
		$equipment[$i] = getItemImage($equipment[$i]);
	else
		$equipment[$i] = '<img src="images/items/' . $equipment[$i] . '.gif" width="32" height="32" border="0" alt=" ' . $equipment[$i] . '" />';
}
/* EQUIPAMENT CHARACTER END */

/* CONVERT SEX */
$character_sex = $config['genders'][$getCharacter['sex']];
/* CONVERT SEX END */

/* CONVERT VOCATION */
$character_voc = $config['vocations'][$getCharacter['vocation']];
/* CONVERT VOCATION END */

/* GET BID */
$getAuctionBid = $db->query('SELECT `account_id`, `auction_id`, `bid`, `date`' . 'FROM `myaac_charbazaar_bid`' . 'WHERE `auction_id` = ' . $Auction['id'] .'');
$getAuctionBid = $getAuctionBid->fetch();
/* GET BID END */

/* GET MY BID */
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
$ribbon_date = date('d-m-Y');
$ribbon_auctiondate = date('d-m-Y', strtotime($Auction['date_start']));
$ribbon_status = '';
if(strtotime($ribbon_date) == strtotime($ribbon_auctiondate)){
	$ribbon_status = '<div class="AuctionNewIcon"><img src="'.$template_path.'/images/global/content/ribbon-new-top-left.png"></div>';
}
/* RIBBON NEW AUCTION END */

/* VERIFY DATE */
$Hoje = date('d-m-Y');
$End = date('d-m-Y', strtotime($Auction['date_end']));
/* VERIFY DATE */

if(strtotime($End) > strtotime($Hoje)){
?>
                <tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" style="border:1px solid #faf0d7;" width="100%">
                        <tbody>
                          <tr>
                            <td><div class="Auction">
                                <div class="AuctionHeader">
                                  <div class="AuctionLinks"><a href="?subtopic=currentcharactertrades&details=<?php echo $Auction['id'] ?>"><img title="show auction details" src="<?php echo $template_path; ?>/images/global/content/button-details-idle.png"></a></div>
                                  <div class="AuctionCharacterName"><a href="?subtopic=currentcharactertrades&details=<?php echo $Auction['id'] ?>"><?php echo $getCharacter['name'] ?></a></div>
                                  Level: <?php echo $getCharacter['level'] ?> | Vocation: <?php echo $character_voc ?> | <?php echo $character_sex ?> | World: <?php echo $config['lua']['serverName'] ?><br>
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
                                    <div class="ShortAuctionDataValue"><?php echo date('M d Y, H:s:i', strtotime($Auction['date_start'])) ?></div>
                                    <div class="ShortAuctionDataLabel">Auction End:</div>
									  <?php
									  $dateTimer = date('Y-m-d', strtotime($Auction['date_end']));
									  if (date('Y-m-d', strtotime($dateTimer . ' - 1 days')) == date('Y-m-d')){ ?>
										  <script>
											  var countDownDate<?= $Auction['id'] ?> = new Date("<?php echo date('M d, Y, H:s:i', strtotime($Auction['date_end'])) ?>").getTime();
											  var x = setInterval(function() {
												  var now = new Date().getTime();
												  var distance = countDownDate<?= $Auction['id'] ?> - now;

												  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
												  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
												  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
												  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

												  document.getElementById("timeAuction_<?= $Auction['id'] ?>").innerHTML = "in " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
												  document.getElementById("timeAuction_<?= $Auction['id'] ?>").style.color = 'red';

												  if (distance < 0) {
													  clearInterval(x);
													  document.getElementById("timeAuction_<?= $Auction['id'] ?>").innerHTML = "Finished";
												  }
											  }, 1000);
										  </script>
									  <?php } ?>
                                    <div id="timeAuction_<?= $Auction['id'] ?>" class="ShortAuctionDataValue"><?php echo date('M d Y, H:s:i', strtotime($Auction['date_end'])) ?>
									</div>
									<!--<div class="ShortAuctionDataBidRow">
                                      <div class="ShortAuctionDataLabel">Minimum Bid:</div>
                                      <div class="ShortAuctionDataValue"><b><?php echo number_format($Auction['price'], 0, ',', ',')  ?></b> <img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div>
                                    </div>-->
                                    <div class="ShortAuctionDataBidRow">
                                      <div class="ShortAuctionDataLabel">Current Bid:</div>
                                      <div class="ShortAuctionDataValue"><b><?php echo number_format($Auction['price'], 0, ',', ',')  ?></b> <img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div>
                                    </div>
<?php
	if($logged && $account_logged == $getAuctionBid['account_id']){
?>
									<div class="ShortAuctionDataBidRow" style="background-color: #d4c0a1; padding: 5px; border: 1px solid #f0e8da; box-shadow: 2px 2px 5px 0 rgb(0 0 0 / 50%);">
                                      <div class="ShortAuctionDataLabel">My Bid:</div>
                                      <div class="ShortAuctionDataValue"><?php echo $My_Bid ?></div>
                                    </div>
<?php } ?>
                                  </div>
<?php if($logged){ ?> <!-- LOGGED -->
<?php if($Auction['account_old'] != $account_logged){ ?>
                                  <div class="AuctionBodyBlock CurrentBid">
                                    <div class="Container">
                                      <div class="MyMaxBidLabel">My Bid Limit</div>
                                      <form action="?subtopic=currentcharactertrades&action=bid" method="post">
										<input type="hidden" name="auction_iden" value="<?php echo $Auction['id'] ?>">
                                        <input class="MyMaxBidInput" type="number" name="maxbid" min="<?php echo $Auction['price'] ?>">
										<div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_confirm" class="BigButtonText" type="submit" value="Bid On Auction"></div></div>
                                      </form>
                                    </div>
									</div>
<?php }else{ ?>
									<div class="AuctionBodyBlock CurrentBid">
									  <div class="Container">
                                      <div class="MyMaxBidLabel" style="font-weight: normal;">My auction.</div>
                                    </div>
                                  </div>
<?php } ?>
<?php }else{ ?> <!-- LOGGED END -->
									<div class="AuctionBodyBlock CurrentBid">
									  <div class="Container">
                                      <div class="MyMaxBidLabel" style="font-weight: normal;">Please login first.</div>
                                    </div>
                                  </div>
<?php } ?> <!-- LOGGED END -->
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
<?php } ?>
<!-- FIRST PAGE - SHOW AUCTIONS END -->

<!-- AUCTION DETAILS -->
<?php
if(isset($getPageDetails)){
$auction_iddetails = $_GET['details'];

/* GET INFO AUCTION */
$getAuction = $db->query('SELECT `id`, `account_old`, `account_new`, `player_id`, `price`, `date_end`, `date_start`, `bid_account`, `bid_price`, `status` FROM `myaac_charbazaar`' . 'WHERE `id` = ' . $auction_iddetails .'');
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
$character_sex = $config['genders'][$getCharacter['sex']];
/* CONVERT SEX END */

/* CONVERT VOCATION */
$character_voc = $config['vocations'][$getCharacter['vocation']];
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
	$My_Bid = '<b>'.number_format($getAuctionBid['bid'], 0, ',', ',').'</b> <img src="'.$template_path.'/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins">';
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
                                    <div class="ShortAuctionDataValue"><?php echo date('M d Y, H:s:i', strtotime($getAuction['date_start'])) ?></div>
                                    <div class="ShortAuctionDataLabel">Auction End:</div>
									  <?php
									  $dateTimer = date('Y-m-d', strtotime($getAuction['date_end']));
									  if (date('Y-m-d', strtotime($dateTimer . ' - 1 days')) == date('Y-m-d')){ ?>
										  <script>
											  var countDownDate = new Date("<?php echo date('M d, Y, H:s:i', strtotime($getAuction['date_end'])) ?>").getTime();
											  var x = setInterval(function() {
												  var now = new Date().getTime();
												  var distance = countDownDate - now;

												  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
												  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
												  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
												  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

												  document.getElementById("timeAuction").innerHTML = "in " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
												  document.getElementById("timeAuction").style.color = 'red';

												  if (distance < 0) {
													  clearInterval(x);
													  document.getElementById("timeAuction").innerHTML = "Finished";
												  }
											  }, 1000);
										  </script>
									  <?php } ?>
                                    <div id="timeAuction" class="ShortAuctionDataValue"><?php echo date('M d Y, H:s:i', strtotime($getAuction['date_end'])) ?></div>
									<div class="ShortAuctionDataBidRow">
                                      <div class="ShortAuctionDataLabel">Current Bid:</div>
                                      <div class="ShortAuctionDataValue"><b><?php echo number_format($getAuction['price'], 0, ',', ',')  ?></b> <img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div>
                                    </div>
<?php if($logged && $account_logged == $getAuctionBid['account_id']){ ?>
									<div class="ShortAuctionDataBidRow" style="background-color: #d4c0a1; padding: 5px; border: 1px solid #f0e8da; box-shadow: 2px 2px 5px 0 rgb(0 0 0 / 50%);">
                                      <div class="ShortAuctionDataLabel">My Bid:</div>
                                      <div class="ShortAuctionDataValue"><?php echo $My_Bid ?></div>
                                    </div>
<?php } ?>
                                  </div>
<?php if($logged && $getAuction['status'] == 0){ ?>
<?php if(strtotime($End) > strtotime($Hoje) && $account_logged != $getAuction['account_old']){ ?>
  <div class="AuctionBodyBlock CurrentBid">
	<div class="Container">
	  <div class="MyMaxBidLabel">My Bid Limit</div>
	  <form action="?subtopic=currentcharactertrades&action=bid" method="POST">
		<input type="hidden" name="auction_iden" value="<?php echo $getAuction['id'] ?>">
		<input class="MyMaxBidInput" type="text" name="maxbid">
		<div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_confirm" class="BigButtonText" type="submit" value="Bid On Auction"></div></div>
	  </form>
	</div>
  </div>
<?php } ?>
<?php if(strtotime($End) > strtotime($Hoje) && $account_logged == $getAuction['account_old']){ ?>
<div class="AuctionBodyBlock CurrentBid">
	<div class="Container">
		<div class="MyMaxBidLabel" style="font-weight: normal;">My auction.</div>
	</div>
</div>
<?php } ?>
<?php if(strtotime($End) < strtotime($Hoje) && $account_logged == $getAuction['account_old'] && $account_logged != $getAuction['bid_account']){ ?>
  <div class="AuctionBodyBlock CurrentBid">
	<div class="Container">
	  <div class="MyMaxBidLabel" style="font-weight: bold; color: green;">
		  <form method="post" action="?subtopic=currentcharactertrades&action=finish">
		  <input type="hidden" name="auction_iden" value="<?php echo $getAuction['id'] ?>">
		  <div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_finish" class="BigButtonText" type="button" value="Finish Auction"></div></div>
		  </form>
	  </div>
	</div>
  </div>
<?php } ?>
<?php if(strtotime($End) < strtotime($Hoje) && $account_logged == $getAuction['bid_account'] && $account_logged != $getAuction['account_old']){ ?>
  <div class="AuctionBodyBlock CurrentBid">
	<div class="Container">
	  <div class="MyMaxBidLabel" style="font-weight: bold; color: green;">
		  <form method="post" action="?subtopic=currentcharactertrades&action=finish">
		  <input type="hidden" name="auction_iden" value="<?php echo $getAuction['id'] ?>">
		  <div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_finish" class="BigButtonText" type="button" value="Finish Auction"></div></div>
		  </form>
	  </div>
	</div>
  </div>
<?php } ?>
<?php if(strtotime($End) < strtotime($Hoje) && $account_logged != $getAuction['account_old'] && $account_logged != $getAuction['bid_account']){ ?>
<div class="AuctionBodyBlock CurrentBid">
	<div class="Container">
		<div class="MyMaxBidLabel" style="font-weight: bold; color: green;">finished</div>
	</div>
</div>
<?php } ?>
<?php } ?>
<?php if(!$logged){ ?>
<?php if($getAuction['status'] == 0){ ?>
<div class="AuctionBodyBlock CurrentBid">
	<div class="Container">
		<div class="MyMaxBidLabel" style="font-weight: normal;">Please first login.</div>
	</div>
</div>
<?php } ?>
<?php if($getAuction['status'] == 1){ ?>
<div class="AuctionBodyBlock CurrentBid">
	<div class="Container">
		<div class="MyMaxBidLabel" style="font-weight: normal;">finished</div>
	</div>
</div>
<?php } ?>
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
	<a href="?subtopic=currentcharactertrades">
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
<?php } ?>
<!-- AUCTION DETAILS END -->

<?php
if($getPageAction == 'bid'){

$Auction_iden = $_POST['auction_iden'];
$Auction_maxbid = $_POST['maxbid'];

/* GET INFO CHARACTER */
$getAuction = $db->query('SELECT `id`, `account_old`, `account_new`, `player_id`, `price`, `date_end`, `date_start`, `bid_account`, `bid_price` FROM `myaac_charbazaar`' . 'WHERE `id` = ' . $Auction_iden .'');
$getAuction = $getAuction->fetch();
/* GET INFO CHARACTER END */


if($logged && $getAuction['account_old'] != $account_logged){


/* GET INFO CHARACTER */
$getCharacter = $db->query('SELECT `name`, `vocation`, `level`, `sex`' . 'FROM `players`' . 'WHERE `id` = ' . $getAuction['player_id'] .'');
$getCharacter = $getCharacter->fetch();
/* GET INFO CHARACTER END */

if($logged){
$getAccount = $db->query('SELECT `id`, `premdays`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = '.$account_logged->getId().'');
$getAccount = $getAccount->fetch();
}

/* CONVERT SEX */
$character_sex = $config['genders'][$getCharacter['sex']];
/* CONVERT SEX END */

/* CONVERT VOCATION */
$character_voc = $config['vocations'][$getCharacter['vocation']];
/* CONVERT VOCATION END */

$charbazaar_create = $config['bazaar_create'];
$charbazaar_tax = $config['bazaar_tax'];
$charbazaar_bid = $config['bazaar_bid'];
$charbazaar_newacc = $config['bazaar_accountid'];

if($Auction_maxbid >= $getAccount['coins']){
	$Verif_CoinsAcc = 'false';
}else{
	$Verif_CoinsAcc = 'true';
}

if($Auction_maxbid > $getAuction['price'] && $Auction_maxbid > $getAuction['bid_price']){
	$Verif_Price = 'true';
}else{
	$Verif_Price = 'false';
}
?>
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
                            <td style="font-weight:normal;"><?php echo $charbazaar_bid ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacointrusted.png"> to give an bid.</td>
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
<div class="CharacterDetailsBlock">
  <div class="TableContainer">
    <div class="CaptionContainer">
      <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
        <div class="Text">Confirm Bid For Auction</div>
        <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
    </div>
    <table class="Table1" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td><div class="InnerTableContainer">
              <table style="width:100%;">
                <tbody>
                  <tr>
                    <td><br>Do you really want to bid the following amount for the character listed below:</td>
                  </tr>

				  <tr>
					<td>
					<br>
					<table style="width:50%;">
                <tbody>
<?php
if($Verif_Price == 'true' and $Verif_CoinsAcc == 'true'){
?>
				  <tr>
                    <td style="font-weight: bold;">Maximum Bid:</td>
					<td><?php echo $Auction_maxbid ?> <img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></td>
                  </tr>
<?php }else{ ?>
				  <tr>
                    <td style="font-weight: bold; color: red;">Maximum Bid:</td>
					<td style="font-weight: bold; color: red;"><?php echo $Auction_maxbid ?> <img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></td>
                  </tr>
<?php } ?>
				  <tr>
                    <td style="font-weight: bold;">Character:</td>
					<td><?php echo $getCharacter['name'] ?></td>
                  </tr>
				  <tr>
                    <td style="font-weight: bold;">Level:</td>
					<td><?php echo $getCharacter['level'] ?></td>
                  </tr>
				  <tr>
                    <td style="font-weight: bold;">Profession:</td>
					<td><?php echo $character_voc ?></td>
                  </tr>
                </tbody>
              </table>

					</td>
                  </tr>

				  <tr>
                    <td><br>If you confirm this bid, a <b>deposit</b> of <b>50</b> <img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"> transferable Tibia Coins will be subtracted from your account's Tibia Coins balance.<br>If someone is submiting a <b>higher bid</b>, the <b>deposit will be returned</b> to your account.</td>
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
<?php
if($Verif_Price == 'false'){
?>
<div class="TableContainer">
	<div class="CaptionContainer">
			<div class="CaptionInnerContainer">
				<span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/content/table-headline-border.gif);"></span>
				<span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-vertical.gif);"></span>
				<div class="Text">Erro</div>
				<span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-vertical.gif);"></span>
				<span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/content/table-headline-border.gif);"></span>
				<span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-edge.gif);"></span>
			</div>
		</div><table class="Table1" cellspacing="0" cellpadding="0">

		<tbody><tr>
			<td>
				<div class="InnerTableContainer">
					<table style="width:100%;">
						<tbody><tr>
							<td>Your bid is lower than the last one.</td>
						</tr>
					</tbody></table>
				</div>
			</td>
		</tr>
	</tbody></table>
</div>
<br>
<?php }  ?>
<?php
if($Verif_CoinsAcc == 'false'){
?>
<div class="TableContainer">
	<div class="CaptionContainer">
			<div class="CaptionInnerContainer">
				<span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/content/table-headline-border.gif);"></span>
				<span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-vertical.gif);"></span>
				<div class="Text">Erro</div>
				<span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-vertical.gif);"></span>
				<span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/content/table-headline-border.gif);"></span>
				<span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/content/box-frame-edge.gif);"></span>
			</div>
		</div><table class="Table1" cellspacing="0" cellpadding="0">

		<tbody><tr>
			<td>
				<div class="InnerTableContainer">
					<table style="width:100%;">
						<tbody><tr>
							<td>You don't have enough coins to bid.</td>
						</tr>
					</tbody></table>
				</div>
			</td>
		</tr>
	</tbody></table>
</div>
<br>
<?php } ?>



<div style="width: 100%; text-align: center; display: flex; justify-content: center;">
<?php
if($Verif_Price == 'true' && $Verif_CoinsAcc == 'true'){
?>
<script>
var myModalFinishBid = document.getElementById('ModalOpenFinishBid')
var myInputFinishBid = document.getElementById('ModalInputFinishBid')
myModalFinishBid.addEventListener('shown.bs.modal', function () {
  myInputFinishBid.focus()
})
</script>
<div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_confirm" class="BigButtonText" type="submit" value="Submit Bid" data-bs-toggle="modal" data-bs-target="#ModalOpenFinishBid"></div></div>
<div class="modal fade" id="ModalOpenFinishBid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalOpenFinishBidLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!--<div class="modal-header">
        <h5 class="modal-title" id="ModalOpenFinishBidLabel">You bid created!</h5>
		<img src="<?php echo $template_path; ?>/images/content/circle-symbol-minus.gif" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
      </div>-->
      <div class="modal-body">
		  <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
		  	<img src="<?php echo $template_path; ?>/images/charactertrade/confirm.gif"> <span style="font-weight: bold; font-size: 16px; padding-left: 10px; text-align: left;">You submitted a bid successfully.<br><small style="font-weight: 100;">You will be redirected in a few moments.</small></span>
		  </div>
      </div>
      <div class="modal-footer">
		<!--<div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red_over.gif); visibility: hidden;"></div><input name="auction_confirm" class="BigButtonText" type="button" value="Close" data-bs-dismiss="modal"></div></div>-->
<form method="post" action="?subtopic=currentcharactertrades&action=bidfinish">
<input type="hidden" name="bid_iden" value="<?php echo $getAuction['id'] ?>">
<input type="hidden" name="bid_max" value="<?php echo $Auction_maxbid ?>">
		<div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="bid_confirm" class="BigButtonText" type="submit" value="Exit"></div></div>
</form>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<a href="?subtopic=currentcharactertrades"><div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red_over.gif); visibility: hidden;"></div><input class="BigButtonText" type="button" value="Cancel"></div></div></a>
</div>

<?php
} }
?>



<!-- REGISTRO NA DB -->
<?php
if($getPageAction == 'bidfinish'){

if(isset($_POST['bid_confirm']) && $_POST['bid_max'] && $logged){
$bid_iden = $_POST['bid_iden'];
$bid_max = $_POST['bid_max'];

$getAuction = $db->query('SELECT `id`, `account_old`, `account_new`, `player_id`, `price`, `date_end`, `date_start`, `bid_account`, `bid_price` FROM `myaac_charbazaar`' . 'WHERE `id` = '.$bid_iden.'');
$getAuction = $getAuction->fetch();

$getAuctionBid = $db->query('SELECT `id`, `account_id`, `auction_id`, `bid`, `date` FROM `myaac_charbazaar_bid`' . 'WHERE `auction_id` = '.$bid_iden.' ORDER BY `bid` DESC LIMIT 1');
$countAuctionBidTwo = count($getAuctionBid);
$countAuctionBid = $getAuctionBid->rowCount();
$getAuctionBid = $getAuctionBid->fetch();

if($countAuctionBid > 0){
// OLD BID ACCOUNT RETURN COINS
$getAccountOldBid = $db->query('SELECT `id`, `coins` FROM `accounts`' . 'WHERE `id` = '.$getAuctionBid['account_id'].'');
$getAccountOldBid = $getAccountOldBid->fetch();
$SomaCoinsOldBid = $getAccountOldBid['coins'] + $getAuctionBid['bid'];
$UpdateAccountOldBid = $db->exec('UPDATE `accounts` SET `coins` = '.$SomaCoinsOldBid.' WHERE `id` = '.$getAuctionBid['account_id'].'');
// OLD BID ACCOUNT RETURN COINS

// NEW BID ACCOUNT REMOVE COINS
$getAccountNewBid = $db->query('SELECT `id`, `coins` FROM `accounts`' . 'WHERE `id` = '.$account_logged.'');
$getAccountNewBid = $getAccountNewBid->fetch();
$SubCoinsNewBid = $getAccountNewBid['coins'] - $bid_max;
$TaxCoinsNewBid = $SubCoinsNewBid - $config['bazaar_bid']; // TAX TO CREATE BID
$UpdateAccountNewBid = $db->exec('UPDATE `accounts` SET `coins` = '.$TaxCoinsNewBid.' WHERE `id` = '.$account_logged.'');
// NEW BID ACCOUNT REMOVE COINS

// UPDATE AUCTION NEW BID
$Update_Auction = $db->exec('UPDATE `myaac_charbazaar` SET `price` = '.$bid_max.', `bid_account` = '.$account_logged.', `bid_price` = '.$bid_max.' WHERE `id` = '.$getAuction['id'].'');

// INSERT NEW BID
$Insert_NewBid = $db->exec('UPDATE `myaac_charbazaar_bid` SET `account_id` = '.$account_logged.', `auction_id` = '.$getAuction['id'].', `bid` = '.$bid_max.'');

}else{

// NEW BID ACCOUNT REMOVE COINS
$getAccountNewBid = $db->query('SELECT `id`, `coins` FROM `accounts`' . 'WHERE `id` = '.$account_logged.'');
$getAccountNewBid = $getAccountNewBid->fetch();
$SubCoinsNewBid = $getAccountNewBid['coins'] - $bid_max;
$TaxCoinsNewBid = $SubCoinsNewBid - $config['bazaar_bid']; // TAX TO CREATE BID
$UpdateAccountNewBid = $db->exec('UPDATE `accounts` SET `coins` = '.$TaxCoinsNewBid.' WHERE `id` = '.$account_logged.'');
// NEW BID ACCOUNT REMOVE COINS

// UPDATE AUCTION NEW BID
$Update_Auction = $db->exec('UPDATE `myaac_charbazaar` SET `price` = '.$bid_max.', `bid_account` = '.$account_logged.', `bid_price` = '.$bid_max.' WHERE `id` = '.$getAuction['id'].'');

// INSERT NEW BID
$Insert_NewBid = $db->exec('INSERT INTO `myaac_charbazaar_bid` (`account_id`, `auction_id`, `bid`) VALUES (' .$account_logged. ', ' .$getAuction['id']. ', ' .$bid_max. ')');

}

header('Location: ' . BASE_URL . '?subtopic=currentcharactertrades');
}
}
?>

<?php

if($getPageAction == 'finish'){
$auction_iden = $_POST['auction_iden'];

/* GET INFO AUCTION */
$getAuction = $db->query('SELECT `id`, `account_old`, `account_new`, `player_id`, `price`, `date_end`, `date_start`, `bid_account`, `status` FROM `myaac_charbazaar`' . 'WHERE `id` = ' . $auction_iden .'');
$getAuction = $getAuction->fetch();
/* GET INFO AUCTION END */

/* GET INFO BID */
$getBid = $db->query('SELECT `id`, `account_id`, `auction_id`, `bid`, `date` FROM `myaac_charbazaar_bid`' . 'WHERE `auction_id` = ' . $getAuction['id'] .', `account_id` = ' . $account_logged .'');
$getBid = $getBid->fetch();
/* GET INFO BID END */

/* GET COINS VENDEDOR */
$getCoinsVendedor = $db->query('SELECT `id`, `coins` FROM `accounts`' . 'WHERE `id` = ' . $getAuction['account_old'] .'');
$getCoinsVendedor = $getCoinsVendedor->fetch();
/* GET COINS VENDEDOR END */

/* GET COINS COMPRADOR */
$getCoinsComprador = $db->query('SELECT `id`, `coins` FROM `accounts`' . 'WHERE `id` = ' . $getBid['account_id'] .'');
$getCoinsComprador = $getCoinsComprador->fetch();
/* GET COINS COMPRADOR END */

$finalCoinsComprador = $getCoinsComprador - $getBid['bid'];

$auction_taxacoins = $getBid['bid'] / 100;
$auction_taxacoins = $auction_taxacoins * $config['bazaar_tax'];
$auction_finalcoins = $getBid['bid'] - $auction_taxacoins;
$account_coins = $getCoinsVendedor['coins'] + $auction_finalcoins;
$account_new = $getBid['account_id'];

if($account_logged == $getAuction['account_old'] && isset($getBid['bid']) && !empty($getBid['bid'])){ // vendendor

$auction_coins = $db->exec('UPDATE `accounts` SET `coins` = '.$account_coins.' WHERE `id` = '.$account_logged.''); // adicionar os coins
//$bid_coins = $db->exec('UPDATE `accounts` SET `coins` = '.$finalCoinsComprador.' WHERE `id` = '.$getAuction['bid_account'].''); // remove os coins

$update_character = $db->exec('UPDATE `players` SET `account_id` = '.$account_new.' WHERE `id` = '.$getAuction['player_id'].''); // muda o player de conta
$update_auction = $db->exec('UPDATE `myaac_charbazaar` SET `status` = `1`, `account_new` = '.$account_new.' WHERE `id` = '.$getAuction['id'].''); // muda status auction
}else{
	header('Location: ' . BASE_URL . '?news');
}

if($account_logged == $getBid['account_id'] && isset($getBid['bid']) && !empty($getBid['bid'])){ // comprador
$auction_coins = $db->exec('UPDATE `accounts` SET `coins` = '.$account_coins.' WHERE `id` = '.$account_logged.''); // adicionar os coins
//$bid_coins = $db->exec('UPDATE `accounts` SET `coins` = '.$finalCoinsComprador.' WHERE `id` = '.$getAuction['bid_account'].''); // remove os coins

$update_character = $db->exec('UPDATE `players` SET `account_id` = '.$account_new.' WHERE `id` = '.$getAuction['player_id'].''); // muda o player de conta
$update_auction = $db->exec('UPDATE `myaac_charbazaar` SET `status` = `1`, `account_new` = '.$account_new.' WHERE `id` = '.$getAuction['id'].''); // muda status auction
}else{
	header('Location: ' . BASE_URL . '?news');
}

}
?>
