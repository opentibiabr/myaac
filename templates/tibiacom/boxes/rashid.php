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
.title_themebox_rashid{
	font-family: 'Martel';
	font-size: 20px;
	display: flex;
	justify-content: center;
	padding-top: 7px;
}
.yellow_themebox_rashid{
	color: #ffeab4;
	text-shadow: 1px 0 0 #000, -1px 0 0 #000, 0 1px 0 #000, 0 -1px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
}
.bg_themebox_rashid {
    background-color: #00a134;
    height: 22px;
    width: 170px;
    margin-left: 5px;
	margin-top: 7px;
    position: absolute;
    top: 0;
}
.image_themebox_rashid{
	background: #edbfab;
	margin-top: 4px;
    margin-left: 9px;
    width: 162px;
    height: 112px;
}
.btn_themebox_rashid{
	position: absolute;
    margin-top: 135px;
    margin-left: 19px;
}
.city_rashid{
	font-family: 'Roboto';
    font-weight: bold;
    display: flex;
    justify-content: center;
    margin-top: 14px;
    padding: 8px;
    background-color: #00a134;
    color: #fff;
}
</style>
<?php
$diasemana = array('domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado');
$data = date('Y-m-d');
$diasemana_numero = date('w', strtotime($data));
		
if($diasemana[$diasemana_numero] == 'domingo'){
	$rashid_city = 'Carlin';
}
if($diasemana[$diasemana_numero] == 'segunda'){
	$rashid_city = 'Svargrond';
}
if($diasemana[$diasemana_numero] == 'terça'){
	$rashid_city = 'Liberty Bay';
}
if($diasemana[$diasemana_numero] == 'quarta'){
	$rashid_city = 'Port Hope';
}
if($diasemana[$diasemana_numero] == 'quinta'){
	$rashid_city = 'Ankrahmun';
}
if($diasemana[$diasemana_numero] == 'sexta'){
	$rashid_city = 'Darashia';
}
if($diasemana[$diasemana_numero] == 'sabado'){
	$rashid_city = 'Edron';
}
?>
<div class="Themebox" style="height: 170px;">
	<div class="header_themebox"><span class="title_themebox_rashid yellow_themebox_rashid">Rashid</span></div>
	<div class="bg_themebox_rashid"></div>

	<div class="content_themebox" style="background-image:url(<?php echo $template_path ?>/images/themeboxes/exemple/border.png); height: 130px;">
		<div class="image_themebox_rashid">
		<img src="<?php echo $template_path ?>/images/themeboxes/rashid/Rashid.gif">
		<span class="city_rashid"><?php echo $rashid_city ?></span>
		</div>
	</div>
	<div class="Bottom" style="background-image:url(templates/tibiacom/images/general/box-bottom.gif); top: 147px;"></div>
</div>
