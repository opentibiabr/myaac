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
.title_themebox_discord{
	font-family: 'Martel';
	font-size: 20px;
	display: flex;
	justify-content: center;
	padding-top: 9px;
}
.yellow_themebox_discord{
	color: #ffeab4;
	text-shadow: 1px 0 0 #000, -1px 0 0 #000, 0 1px 0 #000, 0 -1px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
}
.bg_themebox_discord {
    background-color: #5165f6;
    height: 22px;
    width: 170px;
    margin-left: 5px;
	margin-top: 7px;
    position: absolute;
    top: 0;
}
.image_themebox_discord{
	background: url(<?php echo $template_path ?>/images/themeboxes/discord/discord.png);
	margin-top: 4px;
    margin-left: 9px;
    width: 162px;
    height: 110px;
}
.btn_themebox_discord{
	position: absolute;
    margin-top: 135px;
    margin-left: 19px;
}
</style>

<div class="Themebox" style="height: 170px;">
	<div class="header_themebox"><span class="title_themebox_discord yellow_themebox_discord">Discord</span></div>
	<div class="bg_themebox_discord"></div>
	<div class="content_themebox" style="background-image:url(<?php echo $template_path ?>/images/themeboxes/exemple/border.png); height: 130px;">
		<div class="image_themebox_discord"></div>
	</div>
	<div class="btn_themebox_discord">
		<a href="<?php echo $config['discord_link']; ?>"><div class="BigButton" style="background-image:url(<?php echo $template_path ?>/images/global/buttons/button.png); width: 142px; height: 34px;"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path ?>/images/global/buttons/button_hover.png); visibility: hidden;"></div><input class="BigButtonText" style="width: 142px; height: 34px;" type="button" value="Join Discord"></div></div></a>
	</div>
	<div class="Bottom" style="background-image:url(templates/tibiacom/images/general/box-bottom.gif); top: 147px;"></div>
</div>
