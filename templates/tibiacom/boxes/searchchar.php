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
.title_themebox_searchchar{
	font-family: 'Martel';
	font-size: 20px;
	display: flex;
	justify-content: center;
	padding-top: 7px;
}
.yellow_themebox_searchchar{
	color: #ffeab4;
	text-shadow: 1px 0 0 #000, -1px 0 0 #000, 0 1px 0 #000, 0 -1px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
}
.bg_themebox_searchchar {
    background-color: #0d2e2b;
    height: 22px;
    width: 170px;
    margin-left: 5px;
	margin-top: 7px;
    position: absolute;
    top: 0;
}
.image_themebox_searchchar{
	background: #edbfab;
	margin-top: 4px;
    margin-left: 9px;
    width: 162px;
    height: 112px;
}
.btn_themebox_searchchar{
	position: absolute;
    margin-top: 135px;
    margin-left: 19px;
}
</style>
<form method="post" action="?characters">
<div class="Themebox" style="height: 170px;">
	<div class="header_themebox"><span class="title_themebox_searchchar yellow_themebox_searchchar">Search Char</span></div>
	<div class="bg_themebox_searchchar"></div>

	<div class="content_themebox" style="background-image:url(<?php echo $template_path ?>/images/themeboxes/exemple/border.png); height: 130px;">
		<div class="image_themebox_searchchar"><br>
		<label style="font-weight: bold; font-family: 'Roboto';">Character Name:</label>
		<input type="text" class="form-control" name="name" maxlength="29">
		</div>
	</div>
	<div class="btn_themebox_searchchar">
		<div class="BigButton" style="background-image:url(<?php echo $template_path ?>/images/global/buttons/button_green.png); width: 142px; height: 34px;"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path ?>/images/global/buttons/button_green_hover.png); visibility: hidden;"></div><input class="BigButtonText" style="width: 142px; height: 34px;" type="submit" value="Search"></div></div>
	</div>
</form>
	<div class="Bottom" style="background-image:url(templates/tibiacom/images/general/box-bottom.gif); top: 147px;"></div>
</div>
