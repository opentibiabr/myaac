<style>
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
$title = 'My Bids';

if($logged){
$getAccountCoins = $db->query('SELECT `id`, `premdays`, `coins`' . 'FROM `accounts`' . 'WHERE `id` = ' . $account_logged->getId() .'');
$getAccountCoins = $getAccountCoins->fetch();
?>
<div class="CharacterTradeTibiaCoinBalance"><?php echo $getAccountCoins['coins'] ?><img src="<?php echo $template_path; ?>/images//account/icon-tibiacoin.png" class="VSCCoinImages" title="Tibia Coins"> <?php echo $getAccountCoins['coins'] ?><img src="<?php echo $template_path; ?>/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div>
<?php } ?>
<div class="SmallBox">
  <div class="MessageContainer">
    <div class="BoxFrameHorizontal" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-horizontal.gif);"></div>
    <div class="BoxFrameEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></div>
    <div class="BoxFrameEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></div>
    <div class="Message">
      <div class="BoxFrameVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></div>
      <div class="BoxFrameVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></div>
      <table class="HintBox">
        <tbody>
          <tr>
            <td><div style="float: right;"></div>
              <p>Below you find all <b>your bids</b> for character auctions.</p></td>
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
<div class="TableContainer">
  <div class="CaptionContainer">
    <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span>
      <div class="Text">My Bids</div>
      <span class="CaptionVerticalRight" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(<?php echo $template_path; ?>/images/global/content/box-frame-edge.gif);"></span> </div>
  </div>
  <table class="Table3" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td><div class="InnerTableContainer">
            <table style="width:100%;">
              <tbody>
                <tr>
                  <td><div class="TableContentContainer">
                      <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                        <tbody>
                          <tr class="Odd">
                            <td class="LabelV">Name</td>
                            <td class="LabelV">End</td>
                            <td class="LabelV">Status</td>
                            <td class="LabelV">My Bid</td>
                            <td></td>
                          </tr>
<?php
if ($logged) {
  $getBidsbyAccount = $db->query('SELECT `id`, `account_id`, `auction_id`, `bid`, `date`' . 'FROM `myaac_charbazaar_bid`' . 'WHERE `account_id` = ' . $account_logged->getId() .'');
}

$i_bg = 0;
if (isset($getBidsbyAccount)) {
  foreach($getBidsbyAccount as $BidbyAccount) {
    $i_bg = $i_bg + 1;

    $getAuctionbyBid = $db->query('SELECT `id`, `account_old`, `account_new`, `player_id`, `price`, `date_end`, `date_start`, `bid_account`, `bid_price`' . 'FROM `myaac_charbazaar`' . 'WHERE `id` = ' . $BidbyAccount['auction_id'] .'');
    $getAuctionbyBid = $getAuctionbyBid->fetch();

    $getCharacterbyAccount = $db->query('SELECT `id`, `name`, `level`' . 'FROM `players`' . 'WHERE `id` = ' . $getAuctionbyBid['player_id'] .'');
    $getCharacterbyAccount = $getCharacterbyAccount->fetch();

    $Hoje = date('d-m-Y');
    $End = date('d-m-Y', strtotime($getAuctionbyBid['date_end']));

    if(strtotime($End) > strtotime($Hoje)){
      $bg_DateEnd = '';
    } else {
      $bg_DateEnd = 'red';
    }
    ?>
    <tr bgcolor="<?php echo getStyle($i_bg); ?>">
      <td style="color: <?php echo $bg_DateEnd; ?>"><?php echo $getCharacterbyAccount['name']; ?></td>
      <td style="color: <?php echo $bg_DateEnd; ?>"><?php echo date('d M Y', strtotime($getAuctionbyBid['date_end'])); ?></td>
      <td style="color: <?php echo $bg_DateEnd; ?>"><img src="<?php echo $template_path; ?>/images/premiumfeatures/icon_no.png"></td>
      <td style="color: <?php echo $bg_DateEnd; ?>"><?php echo number_format($getAuctionbyBid['bid_price'], 0, ',', ','); ?> <img src="<?php echo $template_path; ?>/images/account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></td>
      <?php if(strtotime($End) > strtotime($Hoje)){ ?>
        <td><a href="?subtopic=currentcharactertrades&details=<?php echo $getAuctionbyBid['id']; ?>"><div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_green_over.gif); visibility: hidden;"></div><input name="auction_confirm" class="BigButtonText" type="button" value="Access"></div></div></a></td>
      <?php } else { ?>
        <td><a href="?subtopic=pastcharactertrades&details=<?php echo $getAuctionbyBid['id']; ?>"><div class="BigButton" style="background-image:url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path; ?>/images/global/buttons/sbutton_red_over.gif); visibility: hidden;"></div><input name="auction_confirm" class="BigButtonText" type="button" value="Finished"></div></div></a></td>
      <?php } ?>
    </tr>
    <?php 
  }
}
?>
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
