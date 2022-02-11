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
</style>

<?php
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Current Auctions';
?>
<div class="SmallBox">
<div class="MessageContainer">
<div class="BoxFrameHorizontal" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-horizontal.gif);"></div>
<div class="BoxFrameEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></div>
<div class="BoxFrameEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></div>
<div class="Message"> <div class="BoxFrameVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></div>
<div class="BoxFrameVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></div>
<table class="HintBox">
<tbody>
<tr><td>
<div style="float: right;">
<input type="hidden" name="redirect" value="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades">

<div class="BigButton" style="background-image:url(templates/tibiacom/images/global/buttons/sbutton.gif)">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;templates/tibiacom/images/global/buttons/sbutton_over.gif&quot;); visibility: hidden;"></div>
<input class="BigButtonText" type="submit" value="Login"></div>
</div>

</div>
<p><b>Use Tibia character auction feature to sell or purchase Tibia characters without risk!</b></p><p><b>Log in</b> to submit a bid to <b>purchase a Tibia character</b> from another player for your Tibia account!</p><p>To <b>sell a Tibia character</b> from your account to another player, log into the <b>Tibia Client</b> and set up an auction.</p><p>Note that Tibia characters can only be <b>purchased with transferable Tibia Coins!</b></p>
</td></tr>
</tbody>
</table>
</div>
<div class="BoxFrameHorizontal" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-horizontal.gif);"></div>
<div class="BoxFrameEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></div>
<div class="BoxFrameEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></div>
</div>
</div>

<br>

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<div class="Text">Filter Auctions</div>
<span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
</div>
</div>
<table class="Table3" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<div class="InnerTableContainer">
<table style="width:100%;" id="FilterCharacterTrades">
<tbody>
<tr>
<td>
<div class="TableContentContainer">
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr><td>
<form action="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades" method="post">
<div class="DisplayOptionsButton">
<input type="hidden" name="source" value="">
<input type="hidden" name="currentpage" value="1">
<input type="hidden" name="order_column" value="101">
<input type="hidden" name="order_direction" value="1">
<input type="hidden" name="searchstring" value="">

<div class="BigButton" style="background-image:url(templates/tibiacom/images/global/buttons/sbutton.gif)">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;templates/tibiacom/images/global/buttons/sbutton_over.gif&quot;); visibility: hidden;"></div>
<input class="BigButtonText" type="submit" value="Apply"></div>
</div>

<div class="DisplayOptionsContent">
<div class="LabelV120 DisplayOptionsLabel">By Character:</div>
<select name="filter_world" class="AuctionInput">
<option value="">(all Worlds)</option>
<option value="Adra">Adra</option>
<option value="Alumbra">Alumbra</option>
<option value="Antica">Antica</option>
<option value="Ardera">Ardera</option>
</select>
<select name="filter_worldpvptype" class="AuctionInput">
<option value="">(all PvP Types)</option>
<option value="0">Open PvP</option>
<option value="1">Optional PvP</option>
<option value="2">Hardcore PvP</option>
<option value="3">Retro Open PvP</option>
<option value="4">Retro Hardcore PvP</option>
</select>
<select name="filter_worldbattleyestate" class="AuctionInput">
<option value="">(BattlEye: all)</option>
<option value="1">initially protected</option>
<option value="2">protected</option>
<option value="3">not protected</option>
</select>
</div>
<div class="DisplayOptionsContent">
<div class="LabelV120 DisplayOptionsLabel"></div>
<select name="filter_profession" class="AuctionInput"><option value="">(all Vocations)</option><option value="1">None</option><option value="2">Druid</option><option value="3">Knight</option><option value="4">Paladin</option><option value="5">Sorcerer</option></select><input class="AuctionInput LevelRangeInput" placeholder="(min char level)" type="text" name="filter_levelrangefrom" value="" maxlength="4"><div class="LevelRange"></div><input class="AuctionInput LevelRangeInput" placeholder="(max char level)" type="text" name="filter_levelrangeto" value="" maxlength="4"></div><div class="DisplayOptionsContent"><div class="LabelV120 DisplayOptionsLabel"></div><select name="filter_skillid" class="AuctionInput"><option value="">(no skill filter)</option><option value="10">Axe Fighting</option><option value="9">Club Fighting</option><option value="7">Distance Fighting</option><option value="13">Fishing</option><option value="11">Fist Fighting</option><option value="1">Magic Level</option><option value="6">Shielding</option><option value="8">Sword Fighting</option></select><input class="AuctionInput LevelRangeInput" placeholder="(min skill level)" type="text" name="filter_skillrangefrom" value="" maxlength="4"><div class="LevelRange"></div><input class="AuctionInput LevelRangeInput" placeholder="(max skill level)" type="text" name="filter_skillrangeto" value="" maxlength="4"></div><div class="AuctionFilterHelper"></div><div class="DisplayOptionsContent"><div class="LabelV120 DisplayOptionsLabel">Sort by:</div><select name="order_column" class="AuctionInput"><option value="100">Bid</option><option value="101" selected="selected">End Date</option><option value="103">Start Date</option><option value="0">------------------------</option><option value="102">Character Level</option><option value="0">------------------------</option><option value="10">Axe Fighting</option><option value="9">Club Fighting</option><option value="7">Distance Fighting</option><option value="13">Fishing</option><option value="11">Fist Fighting</option><option value="1">Magic Level</option><option value="6">Shielding</option><option value="8">Sword Fighting</option></select><select name="order_direction" class="AuctionInputLong"><option value="0">highest / latest</option><option value="1" selected="selected">lowest / earliest</option></select></div></form>
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
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr>
<td>
<form action="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades" method="post">
<div class="DisplayOptionsButton">
<input type="hidden" name="source" value="">
<input type="hidden" name="currentpage" value="1">
<input type="hidden" name="order_column" value="101">
<input type="hidden" name="order_direction" value="1">
<input type="hidden" name="filter_profession" value="0">
<input type="hidden" name="filter_levelrangefrom" value="">
<input type="hidden" name="filter_levelrangeto" value="">
<input type="hidden" name="filter_worldbattleyestate" value="0">
<input type="hidden" name="filter_skillid" value="">
<input type="hidden" name="filter_skillrangefrom" value="">
<input type="hidden" name="filter_skillrangeto" value="">

<div class="BigButton" style="background-image:url(templates/tibiacom/images/global/buttons/sbutton.gif)">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;templates/tibiacom/images/global/buttons/sbutton_over.gif&quot;); visibility: hidden;"></div>
<input class="BigButtonText" type="submit" value="Search"></div>
</div>

<div id="CurrentTradesItemSearch" class="DisplayOptionsContent">
<div class="LabelV120 DisplayOptionsLabel">Search:</div>
<input class="AuctionInput" id="ItemInput" type="text" name="searchstring" value="" maxlength="45">
<div class="InInputResetButton" onclick="window.location = ""></div>
</div>
<div class="LabelV120 DisplayOptionsLabel" style="float:left;">&nbsp;</div>
<div class="DisplayOptionsRadioButtonRow">
<span class="OptionContainer">
<input id="searchtype_1" type="radio" name="searchtype" value="1" checked="checked">
<span class="HelperDivIndicator" onmouseover="">
<label for="searchtype_1">Item: Default</label>
</span>
</span>
<span class="OptionContainer">
<input id="searchtype_2" type="radio" name="searchtype" value="2">
<span class="HelperDivIndicator" onmouseover="">
<label for="searchtype_2">Item: Wildcard</label>
</span>
</span>
<span class="OptionContainer">
<input id="searchtype_3" type="radio" name="searchtype" value="3">
<label for="searchtype_3">Character Name</label>
</span>
</div>
</form>
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
</div>

<br>

<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<div class="Text">Current Auctions</div>
<span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
</div>
</div>
<table class="Table3" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<div class="InnerTableContainer">
<table style="width:100%;" id="FilterCharacterTrades">
<tbody>

<tr><td class="PageNavigation"><small><div style="float: left;"><b>» <span class="PageLink FirstOrLastElement"><span class="CurrentPageLink">First Page</span></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=2">2</a></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=3">3</a></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=4">4</a></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=5">5</a></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=6">6</a></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=7">7</a></span> ... <span class="PageLink FirstOrLastElement"><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=114">Last Page</a></span></b></div><div style="float: right;"><b>» Results: 2,830</b></div></small></td></tr>




<tr><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr><td><div class="Auction"><div class="AuctionHeader"><div class="AuctionLinks"><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;page=details&amp;auctionid=770674&amp;source=overview&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=1"><img title="show auction details" src="https://static.tibia.com/images/global/content/button-details-idle.png"></a></div><div class="AuctionCharacterName"><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;page=details&amp;auctionid=770674&amp;source=overview&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=1">Holy Charlove</a></div>Level: 638 | Vocation: Royal Paladin | Male | World: <a target="_blank" href="https://www.tibia.com/community/?subtopic=worlds&amp;world=Descubra">Descubra</a><br></div><div class="AuctionBody"><div class="AuctionBodyBlock AuctionDisplay AuctionOutfit"><div class="AuctionNewIcon"><img src="https://static.tibia.com/images/global/content/ribbon-new-top-left.png"></div><img class="AuctionOutfitImage" src="https://static.tibia.com/images/charactertrade/outfits/1243_3.gif"></div><div class="AuctionBodyBlock AuctionDisplay AuctionItemsViewBox"><div class="CVIcon CVIconObject" title="316x energy ring"><img src="https://static.tibia.com/images/charactertrade/objects/3051.gif"><div class="ObjectAmount">316</div></div><div class="CVIcon CVIconObject" title="crossbow of destruction"><img src="https://static.tibia.com/images/charactertrade/objects/27456.gif"></div><div class="CVIcon CVIconObject" title="2x blue spectacles
These spectacles have strange blue lenses which appear completely opaque, yet provide perfectly clear vision"><img src="https://static.tibia.com/images/charactertrade/objects/27522.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="living vine bow"><img src="https://static.tibia.com/images/charactertrade/objects/29417.gif"></div></div><div class="AuctionBodyBlock ShortAuctionData"><div class="AuctionTimer" id="AuctionTimer_770674" data-timestamp="1644355800" date-timestring="22:30&nbsp;CET">Auction Ended!</div><div class="ShortAuctionDataLabel">Auction Start:</div><div class="ShortAuctionDataValue">Feb&nbsp;07&nbsp;2022, 10:07&nbsp;CET</div><div class="ShortAuctionDataLabel">Auction End:</div><div class="ShortAuctionDataValue">Feb&nbsp;08&nbsp;2022, 22:30&nbsp;CET</div><div class="ShortAuctionDataBidRow"><div class="ShortAuctionDataLabel">Minimum Bid:</div><div class="ShortAuctionDataValue"><b>20,000</b> <img src="https://static.tibia.com/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div></div></div><div class="AuctionBodyBlock CurrentBid"><div class="Container"><div class="MyMaxBidLabel">My Bid Limit</div><form action="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=1" method="POST"><input class="MyMaxBidInput" type="text" name="maxbid"><input type="hidden" name="page" value="confirmsubmitbid"><input type="hidden" name="auctionid" value="770674"><input type="hidden" name="currentpage" value="1"><div class="BigButton" style="background-image:url(https://static.tibia.com/images/global/buttons/button_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;https://static.tibia.com/images/global/buttons/button_green_over.gif&quot;); visibility: hidden;"></div><input class="BigButtonText" type="submit" value="Bid On Auction"></div></div></form></div></div><div class="AuctionBodyBlock SpecialCharacterFeatures"><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-4.png">1x a gold pouch (Store Item)</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-2.png">810 Achievement Points</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-0.png">123 Distance Fighting (Loyalty bonus not included)</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-5.png">Additional Slots: Prey</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-7.png">Total Charm Points 10880, Unused Charm Points: 80</div></div></div></div></td></tr> </tbody></table> </div></td></tr>


<tr><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr><td><div class="Auction"><div class="AuctionHeader"><div class="AuctionLinks"><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;page=details&amp;auctionid=770674&amp;source=overview&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=1"><img title="show auction details" src="https://static.tibia.com/images/global/content/button-details-idle.png"></a></div><div class="AuctionCharacterName"><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;page=details&amp;auctionid=770674&amp;source=overview&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=1">Holy Charlove</a></div>Level: 638 | Vocation: Royal Paladin | Male | World: <a target="_blank" href="https://www.tibia.com/community/?subtopic=worlds&amp;world=Descubra">Descubra</a><br></div><div class="AuctionBody"><div class="AuctionBodyBlock AuctionDisplay AuctionOutfit"><div class="AuctionNewIcon"><img src="https://static.tibia.com/images/global/content/ribbon-new-top-left.png"></div><img class="AuctionOutfitImage" src="https://static.tibia.com/images/charactertrade/outfits/1243_3.gif"></div><div class="AuctionBodyBlock AuctionDisplay AuctionItemsViewBox"><div class="CVIcon CVIconObject" title="316x energy ring"><img src="https://static.tibia.com/images/charactertrade/objects/3051.gif"><div class="ObjectAmount">316</div></div><div class="CVIcon CVIconObject" title="crossbow of destruction"><img src="https://static.tibia.com/images/charactertrade/objects/27456.gif"></div><div class="CVIcon CVIconObject" title="2x blue spectacles
These spectacles have strange blue lenses which appear completely opaque, yet provide perfectly clear vision"><img src="https://static.tibia.com/images/charactertrade/objects/27522.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="living vine bow"><img src="https://static.tibia.com/images/charactertrade/objects/29417.gif"></div></div><div class="AuctionBodyBlock ShortAuctionData"><div class="AuctionTimer" id="AuctionTimer_770674" data-timestamp="1644355800" date-timestring="22:30&nbsp;CET">Auction Ended!</div><div class="ShortAuctionDataLabel">Auction Start:</div><div class="ShortAuctionDataValue">Feb&nbsp;07&nbsp;2022, 10:07&nbsp;CET</div><div class="ShortAuctionDataLabel">Auction End:</div><div class="ShortAuctionDataValue">Feb&nbsp;08&nbsp;2022, 22:30&nbsp;CET</div><div class="ShortAuctionDataBidRow"><div class="ShortAuctionDataLabel">Minimum Bid:</div><div class="ShortAuctionDataValue"><b>20,000</b> <img src="https://static.tibia.com/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div></div></div><div class="AuctionBodyBlock CurrentBid"><div class="Container"><div class="MyMaxBidLabel">My Bid Limit</div><form action="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=1" method="POST"><input class="MyMaxBidInput" type="text" name="maxbid"><input type="hidden" name="page" value="confirmsubmitbid"><input type="hidden" name="auctionid" value="770674"><input type="hidden" name="currentpage" value="1"><div class="BigButton" style="background-image:url(https://static.tibia.com/images/global/buttons/button_green.gif)"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;https://static.tibia.com/images/global/buttons/button_green_over.gif&quot;); visibility: hidden;"></div><input class="BigButtonText" type="submit" value="Bid On Auction"></div></div></form></div></div><div class="AuctionBodyBlock SpecialCharacterFeatures"><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-4.png">1x a gold pouch (Store Item)</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-2.png">810 Achievement Points</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-0.png">123 Distance Fighting (Loyalty bonus not included)</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-5.png">Additional Slots: Prey</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-7.png">Total Charm Points 10880, Unused Charm Points: 80</div></div></div></div></td></tr> </tbody></table> </div></td></tr>



<tr><td class="PageNavigation"><small><div style="float: left;"><b>» <span class="PageLink FirstOrLastElement"><span class="CurrentPageLink">First Page</span></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=2">2</a></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=3">3</a></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=4">4</a></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=5">5</a></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=6">6</a></span> <span class="PageLink "><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=7">7</a></span> ... <span class="PageLink FirstOrLastElement"><a href="https://www.tibia.com/charactertrade/?subtopic=currentcharactertrades&amp;filter_profession=0&amp;filter_levelrangefrom=0&amp;filter_levelrangeto=0&amp;filter_world=&amp;filter_worldpvptype=9&amp;filter_worldbattleyestate=0&amp;filter_skillid=&amp;filter_skillrangefrom=0&amp;filter_skillrangeto=0&amp;order_column=101&amp;order_direction=1&amp;searchtype=1&amp;currentpage=114">Last Page</a></span></b></div><div style="float: right;"><b>» Results: 2,830</b></div></small></td></tr>

</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>







<?php
$page = $_REQUEST['details'];

if(isset($_REQUEST['details']))
	{

?>

<div class="TableContainer"> <div class="CaptionContainer"> <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span> <div class="Text">Auction Details</div> <span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> </div> </div><table class="Table5" cellpadding="0" cellspacing="0">  <tbody><tr> <td> <div class="InnerTableContainer"> <table style="width:100%;"><tbody><tr><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr><td><div class="Auction"><div class="AuctionHeader"><div class="AuctionLinks"></div><div class="AuctionCharacterName">Zed Top</div>Level: 257 | Vocation: Knight | Male | World: <a target="_blank" href="https://www.tibia.com/community/?subtopic=worlds&amp;world=Descubra">Descubra</a><br></div><div class="AuctionBody"><div class="AuctionBodyBlock AuctionDisplay AuctionOutfit"><img class="AuctionOutfitImage" src="https://static.tibia.com/images/charactertrade/outfits/128_0.gif"></div><div class="AuctionBodyBlock AuctionDisplay AuctionItemsViewBox"><div class="CVIcon CVIconObject" title="pair of soft boots"><img src="https://static.tibia.com/images/charactertrade/objects/6529.gif"></div><div class="CVIcon CVIconObject" title="emerald sword"><img src="https://static.tibia.com/images/charactertrade/objects/8102.gif"></div><div class="CVIcon CVIconObject" title="moon backpack"><img src="https://static.tibia.com/images/charactertrade/objects/9604.gif"></div><div class="CVIcon CVIconObject" title="prismatic armor"><img src="https://static.tibia.com/images/charactertrade/objects/16110.gif"></div></div><div class="AuctionBodyBlock ShortAuctionData"><div class="ShortAuctionDataLabel">Auction Start:</div><div class="ShortAuctionDataValue">Jan&nbsp;06&nbsp;2022, 10:07&nbsp;CET</div><div class="ShortAuctionDataLabel">Auction End:</div><div class="ShortAuctionDataValue">Jan&nbsp;10&nbsp;2022, 01:00&nbsp;CET</div><div class="ShortAuctionDataBidRow"><div class="ShortAuctionDataLabel">Winning Bid:</div><div class="ShortAuctionDataValue"><b>1,456</b> <img src="https://static.tibia.com/images//account/icon-tibiacointrusted.png" class="VSCCoinImages" title="Transferable Tibia Coins"></div></div></div><div class="AuctionBodyBlock CurrentBid"><div class="Container"><div class="AuctionInfo"><span class="ColorGreen">finished</span></div></div></div><div class="AuctionBodyBlock SpecialCharacterFeatures"><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-4.png">1x a mana cask (Store Item)</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-4.png">136x a supreme health potion (Store Item)</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-2.png">Achievement "Gnomish Art of War" accomplished</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-0.png">97 Sword Fighting (Loyalty bonus not included)</div><div class="Entry"><img class="CharacterFeatureCategory" src="https://static.tibia.com/images/charactertrade/usp-category-11.png">Character World Transfer available</div></div></div></div></td></tr> </tbody></table> </div></td></tr> </tbody></table> </div> </td> </tr> </tbody></table></div>

<br>

<center>
<form action="" method="post" style="padding:0px;margin:0px;">
<div class="BigButton" style="background-image:url(templates/tibiacom/images/global/buttons/sbutton.gif)">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;templates/tibiacom/images/global/buttons/sbutton_over.gif&quot;); visibility: hidden;"></div>
<input class="BigButtonText" type="submit" value="Back"></div>
</div>
</form>
</center>

<br><br>

<div class="CharacterViewerNavigationBar">
<div class="SmallBox">
<div class="MessageContainer">
<div class="BoxFrameHorizontal" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-horizontal.gif);"></div>
<div class="BoxFrameEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></div>
<div class="BoxFrameEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></div>
<div class="Message">
<div class="BoxFrameVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></div>
<div class="BoxFrameVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></div>
<table style="width:100%;">
<tbody>
<tr>
<td style="width:100%;text-align:center;">
<nobr>[<a href="">Auction Details</a>]</nobr>
<nobr>[<a href="">General</a>]</nobr>
<nobr>[<a href="">Item Summary</a>]</nobr>
<nobr>[<a href="">Store Item Summary</a>]</nobr>
<nobr>[<a href="">Mounts</a>]</nobr>
<nobr>[<a href="">Store Mounts</a>]</nobr>
<nobr>[<a href="">Outfits</a>]</nobr>
<nobr>[<a href="">Store Outfits</a>]</nobr>
<nobr>[<a href="">Familiars</a>]</nobr>
<nobr>[<a href="">Blessings</a>]</nobr>
<nobr>[<a href="">Imbuements</a>]</nobr>
<nobr>[<a href="">Charms</a>]</nobr>
<nobr>[<a href="">Completed Cyclopedia Map Areas</a>]</nobr>
<nobr>[<a href="">Completed Quest Lines</a>]</nobr>
<nobr>[<a href="">Titles</a>]</nobr>
<nobr>[<a href="">Achievements</a>]</nobr>
<nobr>[<a href="">Bestiary Progress</a>]</nobr>
</td>
</tr>
</tbody>
</table>
</div>
<div class="BoxFrameHorizontal" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-horizontal.gif);"></div>
<div class="BoxFrameEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></div>
<div class="BoxFrameEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></div>
</div>
</div>
</div>

<br>













<div class="CharacterDetailsBlock" id="General"><a name="General"></a><div class="TopButtonContainer"><a name="General"></a><div class="TopButton"><a name="General"></a><a href=""><img style="border: 0px;" src="https://static.tibia.com/images/global/content/back-to-top.gif"></a></div></div><div class="TableContainer"> <div class="CaptionContainer"> <div class="CaptionInnerContainer"> <span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span> <span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span> <div class="Text">General</div> <span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span> <span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span> <span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> <span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span> </div> </div><table class="Table5" cellpadding="0" cellspacing="0">  <tbody><tr> <td> <div class="InnerTableContainer"> <table style="width:100%;"><tbody><tr> <td> <table style="width: 100%;" cellpadding="0" cellspacing="0"> <tbody><tr> <td style="vertical-align:top;width:210px;;"> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr class="Even"><td><span class="LabelV">Hit Points:</span><div style="float:right; text-align: right;">3,475</div></td></tr><tr class="Odd"><td><span class="LabelV">Mana:</span><div style="float:right; text-align: right;">5,025</div></td></tr><tr class="Even"><td><span class="LabelV">Capacity:</span><div style="float:right; text-align: right;">7,050</div></td></tr><tr class="Odd"><td><span class="LabelV">Speed:</span><div style="float:right; text-align: right;">446</div></td></tr><tr class="Even"><td><span class="LabelV">Blessings:</span><div style="float:right; text-align: right;">7/7</div></td></tr><tr class="Odd"><td><span class="LabelV">Mounts:</span><div style="float:right; text-align: right;">3</div></td></tr><tr class="Even"><td><span class="LabelV">Outfits:</span><div style="float:right; text-align: right;">18</div></td></tr><tr class="Odd"><td><span class="LabelV">Titles:</span><div style="float:right; text-align: right;">6</div></td></tr> </tbody></table> </div></td><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr class="Even"><td class="LabelColumn"><b>Axe Fighting</b></td><td class="LevelColumn">14</td><td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: 20.19%"><div class="PercentageBarSpacer"></div></div><div class="PercentageStringContainer"><span class="PercentageString">20.19 %</span></div></td></tr><tr class="Odd"><td class="LabelColumn"><b>Club Fighting</b></td><td class="LevelColumn">29</td><td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: 1.50%"><div class="PercentageBarSpacer"></div></div><div class="PercentageStringContainer"><span class="PercentageString">1.50 %</span></div></td></tr><tr class="Even"><td class="LabelColumn"><b>Distance Fighting</b></td><td class="LevelColumn">119</td><td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: 18.06%"><div class="PercentageBarSpacer"></div></div><div class="PercentageStringContainer"><span class="PercentageString">18.06 %</span></div></td></tr><tr class="Odd"><td class="LabelColumn"><b>Fishing</b></td><td class="LevelColumn">10</td><td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: 50.00%"><div class="PercentageBarSpacer"></div></div><div class="PercentageStringContainer"><span class="PercentageString">50.00 %</span></div></td></tr><tr class="Even"><td class="LabelColumn"><b>Fist Fighting</b></td><td class="LevelColumn">25</td><td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: 54.34%"><div class="PercentageBarSpacer"></div></div><div class="PercentageStringContainer"><span class="PercentageString">54.34 %</span></div></td></tr><tr class="Odd"><td class="LabelColumn"><b>Magic Level</b></td><td class="LevelColumn">30</td><td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: 7.01%"><div class="PercentageBarSpacer"></div></div><div class="PercentageStringContainer"><span class="PercentageString">7.01 %</span></div></td></tr><tr class="Even"><td class="LabelColumn"><b>Shielding</b></td><td class="LevelColumn">106</td><td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: 2.26%"><div class="PercentageBarSpacer"></div></div><div class="PercentageStringContainer"><span class="PercentageString">2.26 %</span></div></td></tr><tr class="Odd"><td class="LabelColumn"><b>Sword Fighting</b></td><td class="LevelColumn">16</td><td class="PercentageColumn"><div id="SkillBar" class="PercentageBar" style="width: 10.06%"><div class="PercentageBarSpacer"></div></div><div class="PercentageStringContainer"><span class="PercentageString">10.06 %</span></div></td></tr> </tbody></table> </div></td></tr></tbody></table></td></tr><tr><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr class="Even"><td><span class="LabelV">Creation Date:</span><div style="float:right; text-align: right;">Jun&nbsp;13&nbsp;2012,&nbsp;19:58:24&nbsp;CEST</div></td></tr><tr class="Odd"><td><span class="LabelV">Experience:</span><div style="float:right; text-align: right;">629,681,522</div></td></tr><tr class="Even"><td><span class="LabelV">Gold:</span><div style="float:right; text-align: right;">170,787</div></td></tr><tr class="Odd"><td><span class="LabelV">Achievement Points:</span><div style="float:right; text-align: right;">164</div></td></tr> </tbody></table> </div></td></tr><tr><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr class="Even"><td><span class="LabelV">Regular World Transfer:</span><div style="float:right; text-align: right;">can be purchased and used immediately<span style="position: relative; top: 3px; margin-left: 5px;"><span class="HelperDivIndicator"><img style="border:0px;" src="https://static.tibia.com/images/global/content/info.gif"></span></span></div></td></tr> </tbody></table> </div></td></tr><tr><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr class="Odd"><td><span class="LabelV">Charm Expansion:</span><div style="float:right; text-align: right;"><img src="https://static.tibia.com/images/premiumfeatures/icon_no.png"> no</div></td></tr><tr class="Even"><td><span class="LabelV">Available Charm Points:</span><div style="float:right; text-align: right;">0</div></td></tr><tr class="Odd"><td><span class="LabelV">Spent Charm Points:</span><div style="float:right; text-align: right;">0</div></td></tr> </tbody></table> </div></td></tr><tr><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr class="Even"><td><span class="LabelV">Daily Reward Streak:</span><div style="float:right; text-align: right;">1</div></td></tr> </tbody></table> </div></td></tr><tr><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr class="Odd"><td><span class="LabelV">Hunting Task Points:</span><div style="float:right; text-align: right;">0</div></td></tr><tr class="Even"><td><span class="LabelV">Permanent Hunting Task Slots:</span><div style="float:right; text-align: right;">0</div></td></tr><tr class="Odd"><td><span class="LabelV">Permanent Prey Slots:</span><div style="float:right; text-align: right;">0</div></td></tr><tr class="Even"><td><span class="LabelV">Prey Wildcards:</span><div style="float:right; text-align: right;">9</div></td></tr> </tbody></table> </div></td></tr><tr><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr class="Odd"><td><span class="LabelV">Hirelings:</span><div style="float:right; text-align: right;">0</div></td></tr><tr class="Even"><td><span class="LabelV">Hireling Jobs:</span><div style="float:right; text-align: right;">0</div></td></tr><tr class="Odd"><td><span class="LabelV">Hireling Outfits:</span><div style="float:right; text-align: right;">0</div></td></tr> </tbody></table> </div></td></tr><tr><td> <div class="TableContentContainer"> <table class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody><tr class="Even"><td><span class="LabelV">Exalted Dust:</span><div style="float:right; text-align: right;">0/100</div></td></tr> </tbody></table> </div></td></tr> </tbody></table> </div> </td> </tr> </tbody></table></div></div>
	
<br>



























<div class="CharacterDetailsBlock" id="ItemSummary">
<a name="Item Summary"></a>
<div class="TopButtonContainer">
<a name="Item Summary"></a>
<div class="TopButton"><a name="Item Summary"></a>
<a href=""><img style="border: 0px;" src="https://static.tibia.com/images/global/content/back-to-top.gif"></a>
</div>
</div>
<div class="TableContainer">
<div class="CaptionContainer"> <div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<div class="Text">Item Summary</div>
<span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
</div>
</div>
<table class="Table3" cellpadding="0" cellspacing="0">
<tbody><tr>
<td>
<div class="InnerTableContainer">
<table style="width:100%;"><tbody><tr><td>
<div class="TableContentContainer">
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr>
<td>
<div class="DisplayOptionsButton">

<div class="BigButton" style="background-image:url(templates/tibiacom/images/global/buttons/sbutton.gif)">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;templates/tibiacom/images/global/buttons/sbutton_over.gif&quot;); visibility: hidden;"></div>
<input class="BigButtonText" type="submit" value="Search"></div>
</div>

</div>
</div>
<div class="DisplayOptionsContent">
<div class="LabelV100 DisplayOptionsLabel">Item:</div>
<input class="AuctionInput" id="ItemInput" type="text" name="searchstring" value="" maxlength="45">
<div class="InInputResetButton CipAjaxLink" style="cursor: pointer;"></div></div></td></tr>
</tbody></table>
</div></td></tr><tr><td>
<div class="TableContentContainer">
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr><td>
<div class="DisplayOptionsButton">

<div class="BigButton" style="background-image:url(templates/tibiacom/images/global/buttons/sbutton.gif)">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;templates/tibiacom/images/global/buttons/sbutton_over.gif&quot;); visibility: hidden;"></div>
<input class="BigButtonText" type="submit" value="Apply"></div>
</div>

</div>
</div>
<div class="DisplayOptionsContent">
<div class="LabelV100 DisplayOptionsLabel">Category:</div>
<select name="itemcategory" class="AuctionFilterCategory">
<option value="">all items (4,654 unique items)</option>
<option value="Amulets">Amulets (77 unique items)</option>
<option value="Armors">Armors (2 unique items)</option>
<option value="Boots">Boots (3 unique items)</option>
<option value="Containers">Containers (52 unique items)</option>
<option value="Creature Products">Creature Products (330 unique items)</option>
<option value="Decoration">Decoration (18 unique items)</option>
<option value="Food">Food (436 unique items)</option>
<option value="Helmets and Hats ">Helmets and Hats (9 unique items)</option>
<option value="Legs">Legs (2 unique items)</option>
<option value="Others">Others (19 unique items)</option>
<option value="Potions">Potions (1,488 unique items)</option>
<option value="Quivers">Quivers (no item)</option>
<option value="Rings">Rings (61 unique items)</option>
<option value="Runes">Runes (716 unique items)</option>
<option value="Shields">Shields (2 unique items)</option>
<option value="Tools">Tools (3 unique items)</option>
<option value="Unsorted">Unsorted (30 unique items)</option>
<option value="Valuables">Valuables (194 unique items)</option>
<option value="Weapons: Ammo">Weapons: Ammo (1,178 unique items)</option>
<option value="Weapons: Axes">Weapons: Axes (3 unique items)</option>
<option value="Weapons: Clubs">Weapons: Clubs (1 unique item)</option>
<option value="Weapons: Distance">Weapons: Distance (27 unique items)</option>
<option value="Weapons: Swords">Weapons: Swords (1 unique item)</option>
<option value="Weapons: Wands">Weapons: Wands (2 unique items)</option>
</select>
</div>
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
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr class="Even tmp-container-ItemSummary">
<td>
<div id="ajax-target-type-0" class="paged-container page-object-container"><div class="BlockPageNavigationRow"><small><div style="float: left;"><b>» Pages: <span class="PageLink "><span class="CurrentPageLink">1</span></span> <span class="PageLink "><a class="CipAjaxLink" ajaxcip="true" ajaxcip_datatype="Container" href="https://www.tibia.com/websiteservices/handle_charactertrades.php?auctionid=761870&amp;type=0&amp;currentpage=2">2</a></span> <span class="PageLink "><a class="CipAjaxLink" ajaxcip="true" ajaxcip_datatype="Container" href="https://www.tibia.com/websiteservices/handle_charactertrades.php?auctionid=761870&amp;type=0&amp;currentpage=3">3</a></span></b></div><div style="float: right;"><b>» Results: 194</b></div></small></div><div class="BlockPage BlockPageObject"><div class="CVIcon CVIconObject" title="health potion"><img src="https://static.tibia.com/images/charactertrade/objects/266.gif"></div><div class="CVIcon CVIconObject" title="book"><img src="https://static.tibia.com/images/charactertrade/objects/2816.gif"></div><div class="CVIcon CVIconObject" title="book"><img src="https://static.tibia.com/images/charactertrade/objects/2821.gif"></div><div class="CVIcon CVIconObject" title="3x bag"><img src="https://static.tibia.com/images/charactertrade/objects/2853.gif"><div class="ObjectAmount">3</div></div><div class="CVIcon CVIconObject" title="14x backpack"><img src="https://static.tibia.com/images/charactertrade/objects/2854.gif"><div class="ObjectAmount">14</div></div><div class="CVIcon CVIconObject" title="green bag"><img src="https://static.tibia.com/images/charactertrade/objects/2857.gif"></div><div class="CVIcon CVIconObject" title="green backpack"><img src="https://static.tibia.com/images/charactertrade/objects/2865.gif"></div><div class="CVIcon CVIconObject" title="2x blue backpack"><img src="https://static.tibia.com/images/charactertrade/objects/2869.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="golden backpack"><img src="https://static.tibia.com/images/charactertrade/objects/2871.gif"></div><div class="CVIcon CVIconObject" title="camouflage backpack"><img src="https://static.tibia.com/images/charactertrade/objects/2872.gif"></div><div class="CVIcon CVIconObject" title="3x golden mug"><img src="https://static.tibia.com/images/charactertrade/objects/2903.gif"><div class="ObjectAmount">3</div></div><div class="CVIcon CVIconObject" title="golden key"><img src="https://static.tibia.com/images/charactertrade/objects/2972.gif"></div><div class="CVIcon CVIconObject" title="9x black pearl"><img src="https://static.tibia.com/images/charactertrade/objects/3027.gif"><div class="ObjectAmount">9</div></div><div class="CVIcon CVIconObject" title="2x blue gem"><img src="https://static.tibia.com/images/charactertrade/objects/3041.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="41x garlic necklace"><img src="https://static.tibia.com/images/charactertrade/objects/3083.gif"><div class="ObjectAmount">41</div></div><div class="CVIcon CVIconObject" title="3x dwarven ring"><img src="https://static.tibia.com/images/charactertrade/objects/3097.gif"><div class="ObjectAmount">3</div></div><div class="CVIcon CVIconObject" title="76x destroy field rune"><img src="https://static.tibia.com/images/charactertrade/objects/3148.gif"><div class="ObjectAmount">76</div></div><div class="CVIcon CVIconObject" title="30x fire wall rune"><img src="https://static.tibia.com/images/charactertrade/objects/3190.gif"><div class="ObjectAmount">30</div></div><div class="CVIcon CVIconObject" title="24x fire bomb rune"><img src="https://static.tibia.com/images/charactertrade/objects/3192.gif"><div class="ObjectAmount">24</div></div><div class="CVIcon CVIconObject" title="3x knight axe"><img src="https://static.tibia.com/images/charactertrade/objects/3318.gif"><div class="ObjectAmount">3</div></div><div class="CVIcon CVIconObject" title="crusader helmet"><img src="https://static.tibia.com/images/charactertrade/objects/3391.gif"></div><div class="CVIcon CVIconObject" title="5x fish"><img src="https://static.tibia.com/images/charactertrade/objects/3578.gif"><div class="ObjectAmount">5</div></div><div class="CVIcon CVIconObject" title="358x brown mushroom"><img src="https://static.tibia.com/images/charactertrade/objects/3725.gif"><div class="ObjectAmount">358</div></div><div class="CVIcon CVIconObject" title="21x fire mushroom"><img src="https://static.tibia.com/images/charactertrade/objects/3731.gif"><div class="ObjectAmount">21</div></div><div class="CVIcon CVIconObject" title="botanists container
It is empty"><img src="https://static.tibia.com/images/charactertrade/objects/4867.gif"></div><div class="CVIcon CVIconObject" title="2x jewelled backpack"><img src="https://static.tibia.com/images/charactertrade/objects/5801.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="3x flask of warriors sweat
It contains the sweat spilled in many battles and is said to be used for certain perfumes too"><img src="https://static.tibia.com/images/charactertrade/objects/5885.gif"><div class="ObjectAmount">3</div></div><div class="CVIcon CVIconObject" title="6x fish fin
It once belonged to a mighty creature of the deep"><img src="https://static.tibia.com/images/charactertrade/objects/5895.gif"><div class="ObjectAmount">6</div></div><div class="CVIcon CVIconObject" title="12x brown piece of cloth"><img src="https://static.tibia.com/images/charactertrade/objects/5913.gif"><div class="ObjectAmount">12</div></div><div class="CVIcon CVIconObject" title="3x green dragon scale"><img src="https://static.tibia.com/images/charactertrade/objects/5920.gif"><div class="ObjectAmount">3</div></div><div class="CVIcon CVIconObject" title="5x hardened bone"><img src="https://static.tibia.com/images/charactertrade/objects/5925.gif"><div class="ObjectAmount">5</div></div><div class="CVIcon CVIconObject" title="4x behemoth claw"><img src="https://static.tibia.com/images/charactertrade/objects/5930.gif"><div class="ObjectAmount">4</div></div><div class="CVIcon CVIconObject" title="2x beach backpack"><img src="https://static.tibia.com/images/charactertrade/objects/5949.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="beach bag"><img src="https://static.tibia.com/images/charactertrade/objects/5950.gif"></div><div class="CVIcon CVIconObject" title="5x fish tail"><img src="https://static.tibia.com/images/charactertrade/objects/5951.gif"><div class="ObjectAmount">5</div></div><div class="CVIcon CVIconObject" title="4x demon horn"><img src="https://static.tibia.com/images/charactertrade/objects/5954.gif"><div class="ObjectAmount">4</div></div><div class="CVIcon CVIconObject" title="jewel case"><img src="https://static.tibia.com/images/charactertrade/objects/6104.gif"></div><div class="CVIcon CVIconObject" title="3x death ring"><img src="https://static.tibia.com/images/charactertrade/objects/6299.gif"><div class="ObjectAmount">3</div></div><div class="CVIcon CVIconObject" title="cream cake"><img src="https://static.tibia.com/images/charactertrade/objects/6393.gif"></div><div class="CVIcon CVIconObject" title="10x candy"><img src="https://static.tibia.com/images/charactertrade/objects/6569.gif"><div class="ObjectAmount">10</div></div><div class="CVIcon CVIconObject" title="bar of chocolate"><img src="https://static.tibia.com/images/charactertrade/objects/6574.gif"></div><div class="CVIcon CVIconObject" title="fur backpack"><img src="https://static.tibia.com/images/charactertrade/objects/7342.gif"></div><div class="CVIcon CVIconObject" title="deer trophy"><img src="https://static.tibia.com/images/charactertrade/objects/7397.gif"></div><div class="CVIcon CVIconObject" title="15x berserk potion
Drinking this potion temporarily increases your fighting skill while decreasing your defense"><img src="https://static.tibia.com/images/charactertrade/objects/7439.gif"><div class="ObjectAmount">15</div></div><div class="CVIcon CVIconObject" title="divine plate"><img src="https://static.tibia.com/images/charactertrade/objects/8057.gif"></div><div class="CVIcon CVIconObject" title="3x brocade backpack"><img src="https://static.tibia.com/images/charactertrade/objects/8860.gif"><div class="ObjectAmount">3</div></div><div class="CVIcon CVIconObject" title="brocade bag"><img src="https://static.tibia.com/images/charactertrade/objects/8861.gif"></div><div class="CVIcon CVIconObject" title="2x flask of rust remover
It can be used to clean and polish old and rusty armors"><img src="https://static.tibia.com/images/charactertrade/objects/9016.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="demon backpack"><img src="https://static.tibia.com/images/charactertrade/objects/9601.gif"></div><div class="CVIcon CVIconObject" title="3x frosty heart"><img src="https://static.tibia.com/images/charactertrade/objects/9661.gif"><div class="ObjectAmount">3</div></div><div class="CVIcon CVIconObject" title="5x hydra head"><img src="https://static.tibia.com/images/charactertrade/objects/10282.gif"><div class="ObjectAmount">5</div></div><div class="CVIcon CVIconObject" title="2x dragon backpack"><img src="https://static.tibia.com/images/charactertrade/objects/10326.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="Zaoan helmet"><img src="https://static.tibia.com/images/charactertrade/objects/10385.gif"></div><div class="CVIcon CVIconObject" title="jade hat"><img src="https://static.tibia.com/images/charactertrade/objects/10451.gif"></div><div class="CVIcon CVIconObject" title="beetle necklace"><img src="https://static.tibia.com/images/charactertrade/objects/10457.gif"></div><div class="CVIcon CVIconObject" title="17x dragons tail"><img src="https://static.tibia.com/images/charactertrade/objects/11457.gif"><div class="ObjectAmount">17</div></div><div class="CVIcon CVIconObject" title="7x broken draken mail"><img src="https://static.tibia.com/images/charactertrade/objects/11660.gif"><div class="ObjectAmount">7</div></div><div class="CVIcon CVIconObject" title="2x broken slicer"><img src="https://static.tibia.com/images/charactertrade/objects/11661.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="black jade cobra"><img src="https://static.tibia.com/images/charactertrade/objects/11695.gif"></div><div class="CVIcon CVIconObject" title="buggy backpack"><img src="https://static.tibia.com/images/charactertrade/objects/14249.gif"></div><div class="CVIcon CVIconObject" title="700x crystalline arrow"><img src="https://static.tibia.com/images/charactertrade/objects/15793.gif"><div class="ObjectAmount">700</div></div><div class="CVIcon CVIconObject" title="gnomish spore gatherer
It contains red, green, blue and yellow spores. Deliver it to the gnomes"><img src="https://static.tibia.com/images/charactertrade/objects/15821.gif"></div><div class="CVIcon CVIconObject" title="brown crystal splinter"><img src="https://static.tibia.com/images/charactertrade/objects/16123.gif"></div><div class="CVIcon CVIconObject" title="cliff strider claw"><img src="https://static.tibia.com/images/charactertrade/objects/16134.gif"></div><div class="CVIcon CVIconObject" title="jade Zaoan queen
A Zaoan chess figure made of jade. It depicts the queen"><img src="https://static.tibia.com/images/charactertrade/objects/18327.gif"></div><div class="CVIcon CVIconObject" title="2x jade Zaoan knight
A Zaoan chess figure made of jade. It depicts the knight"><img src="https://static.tibia.com/images/charactertrade/objects/18330.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="jade Zaoan rook
A Zaoan chess figure made of jade. It depicts the rook"><img src="https://static.tibia.com/images/charactertrade/objects/18331.gif"></div><div class="CVIcon CVIconObject" title="2x Zaoan chess box
This chess box is made of jade and obsidian. It will hold a full set of 32 Zaoan chess figures"><img src="https://static.tibia.com/images/charactertrade/objects/18339.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="2x bucket filled with gravel
This gravel is quite finely granulated, combining it with chalk could be a base for mortar"><img src="https://static.tibia.com/images/charactertrade/objects/20053.gif"><div class="ObjectAmount">2</div></div><div class="CVIcon CVIconObject" title="7x frazzle tongue"><img src="https://static.tibia.com/images/charactertrade/objects/20198.gif"><div class="ObjectAmount">7</div></div><div class="CVIcon CVIconObject" title="3x frazzle skin"><img src="https://static.tibia.com/images/charactertrade/objects/20199.gif"><div class="ObjectAmount">3</div></div><div class="CVIcon CVIconObject" title="cake backpack"><img src="https://static.tibia.com/images/charactertrade/objects/20347.gif"></div><div class="CVIcon CVIconObject" title="crest of the deep seas"><img src="https://static.tibia.com/images/charactertrade/objects/21892.gif"></div><div class="CVIcon CVIconObject" title="4x bone toothpick"><img src="https://static.tibia.com/images/charactertrade/objects/24380.gif"><div class="ObjectAmount">4</div></div><div class="CVIcon CVIconObject" title="butterfly ring"><img src="https://static.tibia.com/images/charactertrade/objects/25698.gif"></div><div class="CVIcon CVIconObject" title="blueberry cupcake"><img src="https://static.tibia.com/images/charactertrade/objects/28484.gif"></div></div></div></td></tr> </tbody></table> </div></td></tr> </tbody></table> </div> </td> </tr> </tbody></table></div></div>

<br>




























<div class="CharacterDetailsBlock" id="StoreItemSummary">
<a name="Store Item Summary"></a>
<div class="TopButtonContainer">
<a name="Store Item Summary"></a>
<div class="TopButton">
<a name="Store Item Summary"></a>
<a href""><img style="border: 0px;" src="https://static.tibia.com/images/global/content/back-to-top.gif"></a>
</div>
</div>
<div class="TableContainer"> <div class="CaptionContainer"> <div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<div class="Text">Store Item Summary</div>
<span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
</div>
</div>
<table class="Table3" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<div class="InnerTableContainer">
<table style="width:100%;">
<tbody>
<tr>
<td>
<div class="TableContentContainer">
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr class="Even tmp-container-StoreItemSummary">
<td>
<div id="ajax-target-type-1" class="paged-container page-object-container">
<div class="BlockPageNavigationRow">
<small><div style="float: left;"><b>» Pages: <span class="PageLink ">
<span class="CurrentPageLink">1</span>
</span></b>
</div>
<div style="float: right;"><b>» Results: 3</b></div></small>
</div>
<div class="BlockPage BlockPageObject">
<div class="CVIcon CVIconObject" title="10x magic wall rune">
<img src="https://static.tibia.com/images/charactertrade/objects/3180.gif">
<div class="ObjectAmount">10</div>
</div>
<div class="CVIcon CVIconObject" title="9x great spirit potion
This potion can only be consumed by paladins of level 80 or higher"><img src="https://static.tibia.com/images/charactertrade/objects/7642.gif"><div class="ObjectAmount">9</div>
</div>
<div class="CVIcon CVIconObject" title="218x ultimate spirit potion
This potion can only be consumed by paladins of level 130 or higher"><img src="https://static.tibia.com/images/charactertrade/objects/23374.gif"><div class="ObjectAmount">218</div>
</div>
</div>
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
</td>
</tr>
</tbody>
</table>
</div>
</div>

<br>



























<div class="CharacterDetailsBlock" id="Mounts">
<a name="Mounts"></a>
<div class="TopButtonContainer">
<a name="Mounts"></a>
<div class="TopButton">
<a name="Mounts"></a>
<a href=""><img style="border: 0px;" src="https://static.tibia.com/images/global/content/back-to-top.gif"></a>
</div>
</div>
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<div class="Text">Mounts</div>
<span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
</div>
</div>
<table class="Table3" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<div class="InnerTableContainer">
<table style="width:100%;">
<tbody>
<tr><td>
<div class="TableContentContainer">
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr class="Even tmp-container-Mounts">
<td>
<div id="ajax-target-type-2" class="paged-container page-object-container">
<div class="BlockPageNavigationRow">
<small>
<div style="float: left;">
<b>» Pages: <span class="PageLink "><span class="CurrentPageLink">1</span></span></b></div><div style="float: right;"><b>» Results: 3</b></div>
</small>
</div>
<div class="BlockPage">
<div class="CVIcon" title="Racing Bird"><img src="https://static.tibia.com/images/charactertrade/mounts/369.gif"></div>
<div class="CVIcon" title="Donkey"><img src="https://static.tibia.com/images/charactertrade/mounts/387.gif"></div>
<div class="CVIcon" title="Magma Crawler"><img src="https://static.tibia.com/images/charactertrade/mounts/503.gif"></div>
</div>
</div>
</td>
</tr>
</tbody></table>
</div></td></tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table></div></div>

<br>
















<div class="CharacterDetailsBlock" id="StoreMounts">
<a name="Store Mounts"></a>
<div class="TopButtonContainer">
<a name="Store Mounts"></a>
<div class="TopButton">
<a name="Store Mounts"></a>
<a href=""><img style="border: 0px;" src="https://static.tibia.com/images/global/content/back-to-top.gif"></a>
</div>
</div>
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<div class="Text">Store Mounts</div>
<span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
</div>
</div><table class="Table3" cellpadding="0" cellspacing="0">
<tbody><tr>
<td>
<div class="InnerTableContainer">
<table style="width:100%;">
<tbody>
<tr>
<td>
<div class="TableContentContainer">
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr class="Even">
<td>No mounts.</td>
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
</div>

<br>
























<div class="CharacterDetailsBlock" id="Outfits">
<a name="Outfits"></a>
<div class="TopButtonContainer"><a name="Outfits"></a><div class="TopButton"><a name="Outfits"></a>
<a href=""><img style="border: 0px;" src="https://static.tibia.com/images/global/content/back-to-top.gif"></a>
</div>
</div>
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<div class="Text">Outfits</div>
<span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
</div>
</div>
<table class="Table3" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<div class="InnerTableContainer">
<table style="width:100%;"><tbody>
<tr>
<td>
<div class="TableContentContainer">
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr class="Even tmp-container-Outfits">
<td>
<div id="ajax-target-type-4" class="paged-container page-object-container">
<div class="BlockPageNavigationRow">
<small>
<div style="float: left;"><b>» Pages: <span class="PageLink "><span class="CurrentPageLink">1</span></span></b></div>
<div style="float: right;"><b>» Results: 18</b></div>
</small>
</div>
<div class="BlockPage">
<div class="CVIcon" title="Citizen (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/128_0.gif"></div>
<div class="CVIcon" title="Hunter (base &amp; addon 2)"><img src="https://static.tibia.com/images/charactertrade/outfits/129_2.gif"></div>
<div class="CVIcon" title="Mage (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/130_0.gif"></div>
<div class="CVIcon" title="Knight (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/131_0.gif"></div>
<div class="CVIcon" title="Nobleman (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/132_0.gif"></div>
<div class="CVIcon" title="Summoner (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/133_0.gif"></div>
<div class="CVIcon" title="Warrior (base &amp; addon 2)"><img src="https://static.tibia.com/images/charactertrade/outfits/134_2.gif"></div>
<div class="CVIcon" title="Barbarian (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/143_0.gif"></div>
<div class="CVIcon" title="Druid (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/144_0.gif"></div>
<div class="CVIcon" title="Wizard (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/145_0.gif"></div>
<div class="CVIcon" title="Oriental (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/146_0.gif"></div>
<div class="CVIcon" title="Shaman (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/154_0.gif"></div>
<div class="CVIcon" title="Demon Hunter (base &amp; addon 1 &amp; addon 2)"><img src="https://static.tibia.com/images/charactertrade/outfits/289_3.gif"></div>
<div class="CVIcon" title="Yalaharian (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/325_0.gif"></div>
<div class="CVIcon" title="Warmaster (base &amp; addon 1)"><img src="https://static.tibia.com/images/charactertrade/outfits/335_1.gif"></div>
<div class="CVIcon" title="Wayfarer (base)"><img src="https://static.tibia.com/images/charactertrade/outfits/367_0.gif"></div>
<div class="CVIcon" title="Afflicted (base &amp; addon 1 &amp; addon 2)"><img src="https://static.tibia.com/images/charactertrade/outfits/430_3.gif"></div>
<div class="CVIcon" title="Demon Outfit (base &amp; addon 1)"><img src="https://static.tibia.com/images/charactertrade/outfits/541_1.gif">
</div></div></div></td></tr>
</tbody></table>
</div></td></tr>
</tbody></table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>

<br>
































<div class="CharacterDetailsBlock" id="StoreOutfits">
<a name="Store Outfits"></a>
<div class="TopButtonContainer">
<a name="Store Outfits"></a>
<div class="TopButton">
<a name="Store Outfits"></a>
<a href=""><img style="border: 0px;" src="https://static.tibia.com/images/global/content/back-to-top.gif"></a>
</div>
</div>
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<div class="Text">Store Outfits</div>
<span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
</div>
</div>
<table class="Table3" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<div class="InnerTableContainer">
<table style="width:100%;">
<tbody>
<tr>
<td>
<div class="TableContentContainer">
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr class="Even">
<td>No outfits.</td>
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
</div>

<br>




























<div class="CharacterDetailsBlock CollapsedBlock" id="BestiaryProgress">
<a name="Bestiary Progress"></a>
<div class="TopButtonContainer">
<a name="Bestiary Progress"></a>
<div class="TopButton">
<a name="Bestiary Progress"></a>
<a href=""><img style="border: 0px;" src="https://static.tibia.com/images/global/content/back-to-top.gif"></a>
</div>
</div>
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer">
<span class="CaptionEdgeLeftTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightTop" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionVerticalLeft" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<div class="Text">Bestiary Progress</div>
<span class="CaptionVerticalRight" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image:url(https://static.tibia.com/images/global/content/table-headline-border.gif);"></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(https://static.tibia.com/images/global/content/box-frame-edge.gif);"></span>
</div>
</div>
<table class="Table3" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<div class="InnerTableContainer">
<table style="width:100%;">
<tbody>
<tr>
<td>
<div class="TableContentContainer">
<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
<tbody>
<tr class="LabelH"><td>Step</td>
<td>Kills</td>
<td style="width: 98%;">Name</td>
</tr>
<tr class="Odd">
<td style="text-align: right;">1</td>
<td style="text-align: right; white-space: nowrap;">1 x</td>
<td>Bat</td>
</tr>
<tr class="Even">
<td style="text-align: right;">1</td>
<td style="text-align: right; white-space: nowrap;">1 x</td>
<td>Bug</td>
</tr>
<tr class="Odd">
<td style="text-align: right;">1</td>
<td style="text-align: right; white-space: nowrap;">2 x</td>
<td>Carrion Worm</td>
</tr>
<tr class="Even">
<td style="text-align: right;">1</td>
<td style="text-align: right; white-space: nowrap;">9 x</td>
<td>Cave Rat</td>
</tr>
<tr class="Odd">
<td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">1 x</td><td>Centipede</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">6 x</td><td>Cyclops</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">14 x</td><td>Demon</td></tr><tr class="Even"><td style="text-align: right;">2</td><td style="text-align: right; white-space: nowrap;">7 x</td><td>Dog</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">3 x</td><td>Draken Spellweaver</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">5 x</td><td>Feverish Citizen</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">51 x</td><td>Frazzlemaw</td></tr><tr class="Even"><td style="text-align: right;">2</td><td style="text-align: right; white-space: nowrap;">123 x</td><td>Ghastly Dragon</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">2 x</td><td>Ghoul</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">6 x</td><td>Grimeleech</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">12 x</td><td>Guzzlemaw</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">1 x</td><td>Lion</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">1 x</td><td>Marsh Stalker</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">5 x</td><td>Minotaur</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">1 x</td><td>Orc Spearman</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">4 x</td><td>Orc Warrior</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">2 x</td><td>Rat</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">14 x</td><td>Rotworm</td></tr><tr class="Odd"><td style="text-align: right;">2</td><td style="text-align: right; white-space: nowrap;">43 x</td><td>Sandcrawler</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">26 x</td><td>Silencer</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">3 x</td><td>Skeleton</td></tr><tr class="Even"><td style="text-align: right;">2</td><td style="text-align: right; white-space: nowrap;">140 x</td><td>Skeleton Elite Warrior</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">4 x</td><td>Snake</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">3 x</td><td>Spider</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">1 x</td><td>Spit Nettle</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">1 x</td><td>Swampling</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">6 x</td><td>Troll</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">91 x</td><td>Undead Elite Gladiator</td></tr><tr class="Odd"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">16 x</td><td>Vexclaw</td></tr><tr class="Even"><td style="text-align: right;">1</td><td style="text-align: right; white-space: nowrap;">7 x</td><td>Wolf</td></tr><tr class="Odd IndicateMoreEntries"><td colspan="3"><div class="IndicateMoreEntriesText">(24 more entries)</div></td></tr> </tbody></table> </div></td></tr><tr><td><div class="ShowMoreOrLess">[<a href="">show all</a>]</div></td></tr> </tbody></table> </div> </td> </tr> </tbody></table></div></div>

<?php } ?>




