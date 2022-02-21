<style>
.header_themebox{
	height: 31px;
	background: url(<?php echo $template_path ?>/images/themeboxes/exemple/header-bg.png);
	z-index: 2;
	width: 100%;
	position: absolute;
}
.content_themebox{
    width: 100%;
    height: 154px;
    position: absolute;
    margin-top: 31px;
}
.title_themebox_donate{
	font-family: 'Martel';
	font-size: 20px;
	display: flex;
	justify-content: center;
	padding-top: 9px;
}
.yellow_themebox_donate{
	color: #ffeab4;
	text-shadow: 1px 0 0 #000, -1px 0 0 #000, 0 1px 0 #000, 0 -1px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
}
.bg_themebox_donate {
    background-color: #e3a320;
    height: 22px;
    width: 170px;
    margin-left: 5px;
	margin-top: 7px;
    position: absolute;
    top: 0;
}
.image_themebox_donate{
	background: url(<?php echo $template_path ?>/images/themeboxes/donate/coins.gif);
	width: 160px;
	height: 129px;
	margin-left: 10px;
	margin-top: 4px;
}
.btn_themebox_donate{
	position: absolute;
    margin-top: 160px;
    margin-left: 19px;
}
</style>

<div class="Themebox" style="height: 195px;">
	<div class="header_themebox"><span class="title_themebox_donate yellow_themebox_donate">Donate Here</span></div>
	<div class="bg_themebox_donate"></div>
	<div class="content_themebox" style="background-image:url(<?php echo $template_path ?>/images/themeboxes/exemple/content-bg.png);">
		<div class="image_themebox_donate"></div>
	</div>
	<div class="btn_themebox_donate">
		<a href="?points"><div class="BigButton" style="background-image:url(<?php echo $template_path ?>/images/global/buttons/button.png); width: 142px; height: 34px;"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path ?>/images/global/buttons/button_hover.png); visibility: hidden;"></div><input class="BigButtonText" style="width: 142px; height: 34px;" type="button" value="Coins"></div></div></a>
	</div>
</div>
