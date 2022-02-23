<style>
.nav {
    display: flex;
    /*flex-wrap: wrap;*/
	justify-content: center;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #5f4d41;
	font-weight: bold;
    /*background-color: #FFF2db;*/
	background: linear-gradient(rgb(185 168 139) 0%, rgb(255 242 219) 100%);
}
.nav-tabs .nav-link {
	color: #fff2db;
    background: linear-gradient(rgb(95 77 65) 0%, rgb(38 30 24) 100%);
    border: 0px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}
.nav-link {
    display: block;
    /*padding: 15px 10px;*/
	width: 100%;
	padding: 15px 0px;
    color: #0d6efd;
    text-decoration: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
}
.tab-content>.tab-pane {
    display: none;
}
.fade:not(.show) {
    opacity: 0;
}
.tab-content>.active {
    display: block;
}


.tplevellayout{
	text-align: left;
}
.tab-pane hr{
	border: 0;
    height: 1px;
    background: #333;
    background-image: linear-gradient(to right, #fff2db, #5f4d41, #fff2db);
}
.tplevellayout:hover{
	/*background-color: #e1d6c3;*/
	background: linear-gradient(to right, #b7ab96, #fff2db, #b7ab96);
}
.tplevellayout a{
	text-decoration: none;
	color: #5a2800;
}
.outfitImgtoplevel {
	z-index: 1;
	width: 64px;
	height: 64px;
	position: absolute;
	left: -25px;
	/*top: 0px;*/
	margin-top: -30px;
}
.topleveltext{
	font-family: 'Roboto';
	font-weight: bold;
	text-align: center;
}
.rank_header{
	z-index: 50;
}
.rank_text{
	text-align: left;
	margin-left: 60px;
	line-height: 11px;
}
.rank_content {
	z-index: 10;
    height: 235px;
    background-color: #FFF2db;
	padding-top: 15px;
	box-shadow: 5px 5px 20px #000000;
}
.firstlevel {
    position: absolute;
    width: 19px;
	height: 38px;
    background-position-x: -23px;
    /*top: 25;*/
    left: 40px;
    z-index: 3;
}
.bgoutfit_1{
	background: linear-gradient(to right, #f3e800, #fff2db, #fff2db);
}
.bgoutfit_2{
	background: linear-gradient(to right, #414c4d, #fff2db, #fff2db);
}
.bgoutfit_3{
	background: linear-gradient(to right, #ea9e70, #fff2db, #fff2db);
}
.bgoutfit_4{
	background: linear-gradient(to right, #e3d6c0, #fff2db, #fff2db);
}
.bgoutfit_5{
	background: linear-gradient(to right, #e3d6c0, #fff2db, #fff2db);
}

.bot_left{
	background-image: url(templates/tibiacom/images/global/content/corner-bl.gif);
	width: 17px;
    height: 17px;
    position: absolute;
    bottom: 12px;
    left: -4px;
	z-index: 1;
}
.bot_right{
	background-image: url(templates/tibiacom/images/global/content/corner-br.gif);
	width: 17px;
    height: 17px;
    position: absolute;
    bottom: 12px;
    right: -4px;
	z-index: 1;
}
.top_left{
	background-image: url(templates/tibiacom/images/global/content/corner-tl.gif);
	width: 17px;
    height: 17px;
    position: absolute;
    top: -4px;
    left: -4px;
	z-index: 1;
}
.top_right{
	background-image: url(templates/tibiacom/images/global/content/corner-tr.gif);
	width: 17px;
    height: 17px;
    position: absolute;
    top: -4px;
    right: -4px;
	z-index: 1;
}
.border_bot{
	background: url(templates/tibiacom/images/global/content/border-1.gif);
	height: 6px;
	width: 100%;
	position: absolute;
    bottom: 15px;
	background-repeat: repeat-x !important;
}
.border_top{
	background: url(templates/tibiacom/images/global/content/border-1.gif);
	height: 6px;
	width: 100%;
	position: absolute;
    top: 0px;
	background-repeat: repeat-x !important;
}
</style>

<div class="Themebox" style="height: 310px; width: 170px; margin-left: 5px;">
  <div class="rank_header">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Level</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Frags</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Skills</button>
      </div>
    </nav>
  </div>
  <div class="rank_content">
    <div class="tab-content" id="nav-tabContent">
<div class="top_left"></div>
<div class="top_right"></div>
<div class="bot_left"></div>
<div class="bot_right"></div>
<div class="border_bot"></div>
<div class="border_top"></div>
<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <?php
        $topPlayers = getTopPlayers(5);
		$count = 0;
        foreach($topPlayers as $player){
          $outfit_url = '';
          if ( $config[ 'online_outfit' ] ) {
            $outfit_url = $config[ 'outfit_images_url' ] . '?id=' . $player[ 'looktype' ] . ( !empty( $player[ 'lookaddons' ] ) ? '&addons=' . $player[ 'lookaddons' ] : '' ) . '&head=' . $player[ 'lookhead' ] . '&body=' . $player[ 'lookbody' ] . '&legs=' . $player[ 'looklegs' ] . '&feet=' . $player[ 'lookfeet' ];

            $player[ 'outfit' ] = $outfit_url;
          }
			$player_voc = $config['vocations'][$player['vocation']];
			$count = $count + 1;
          ?>
<div class="tplevellayout bgoutfit_<?php echo $count ?>">
<a class="topleveltext top_online" style="text-decoration:none" href="<?php echo getPlayerLink($player['name'], false) ?>">
<div class="outfitImgtoplevel" style="background: url(<?php echo $player['outfit'] ?>) no-repeat 0 0;"></div>
<span class="firstlevel" style="background: transparent url(<?php echo $template_path ?>/images/themeboxes/highscores/rank<?php echo $count ?>.png) no-repeat center;"></span>
<div class="rank_text">
  <span><?php echo $count ?></span> - <?php echo $player['name'] ?> <br>
  <small>Level: (<?php echo $player['level'] ?>)<br><?php echo $player_voc ?></small>
</div>
</a>
</div><hr>
        <?php } ?>
</div>
<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<?php
					$fetch_from_db = true;
					if($cache->enabled())
					{
						$tmp = '';
						if($cache->fetch('top_5_fraggers', $tmp))
						{
							$players = unserialize($tmp);
							$fetch_from_db = false;
						}
					}

					if($fetch_from_db)
					{
						$players_db = $db->query('SELECT `name`, `level`, `vocation`, `skull`, `skulltime`, `looktype`, `lookhead`, `lookbody`, `looklegs`, `lookfeet`, `lookaddons` FROM `players` WHERE `group_id` < ' . $config['highscores_groups_hidden'] . ' AND `id` > 6 ORDER BY `skulltime` DESC LIMIT 5;');

						$players = array();
						foreach($players_db as $player)
							$players[] = array('skulltime' => $player['skulltime'], 'name' => $player['name'], 'level' => $player['level'], 'vocation' => $player['vocation'], 'looktype' => $player['looktype'], 'lookhead' => $player['lookhead'], 'lookbody' => $player['lookbody'], 'looklegs' => $player['looklegs'], 'lookfeet' => $player['lookfeet'], 'lookaddons' => $player['lookaddons']);
						
						if($cache->enabled())
							$cache->set('top_5_fraggers', serialize($players), 120);
					}

					if ($players) {
						$count = 1;
						foreach($players as $player) {
							if ( $config[ 'online_outfit' ] ) {
							$outfit_url = $config[ 'outfit_images_url' ] . '?id=' . $player[ 'looktype' ] . ( !empty( $player[ 'lookaddons' ] ) ? '&addons=' . $player[ 'lookaddons' ] : '' ) . '&head=' . $player[ 'lookhead' ] . '&body=' . $player[ 'lookbody' ] . '&legs=' . $player[ 'looklegs' ] . '&feet=' . $player[ 'lookfeet' ];

							$player[ 'outfit' ] = $outfit_url;
							}
						$player_voc = $config['vocations'][$player['vocation']];
?>
<div class="tplevellayout bgoutfit_<?php echo $count ?>">
<a class="topleveltext top_online" style="text-decoration:none" href="<?php echo getPlayerLink($player['name'], false) ?>">
<div class="outfitImgtoplevel" style="background: url(<?php echo $player['outfit'] ?>) no-repeat 0 0;"></div>
<span class="firstlevel" style="background: transparent url(<?php echo $template_path ?>/images/themeboxes/highscores/rank<?php echo $count ?>.png) no-repeat center;"></span>
<div class="rank_text">
  <span><?php echo $count ?></span> - <?php echo $player['name'] ?> <br>
  <small>Frags: (<?php echo $player['skulltime'] ?>)<br><?php echo $player_voc ?></small>
</div>
</a>
</div><hr>
<?php
	$count++;
	}
}
?>
</div>
<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
<?php
$player_ml = $db->query('SELECT `name`, `maglevel`, `vocation`, `looktype`, `lookhead`, `lookbody`, `looklegs`, `lookfeet`, `lookaddons` FROM `players` WHERE `group_id` < ' . $config['highscores_groups_hidden'] . ' ORDER BY `maglevel` DESC LIMIT 1;')->fetch();
$voc_ml = $config['vocations'][$player_ml['vocation']];

$player_sword = $db->query('SELECT `name`, `skill_sword`, `vocation`, `looktype`, `lookhead`, `lookbody`, `looklegs`, `lookfeet`, `lookaddons` FROM `players` WHERE `group_id` < ' . $config['highscores_groups_hidden'] . ' ORDER BY `skill_sword` DESC LIMIT 1;')->fetch();
$voc_sword = $config['vocations'][$player_sword['vocation']];
	
$player_axe = $db->query('SELECT `name`, `skill_axe`, `vocation`, `looktype`, `lookhead`, `lookbody`, `looklegs`, `lookfeet`, `lookaddons` FROM `players` WHERE `group_id` < ' . $config['highscores_groups_hidden'] . ' ORDER BY `skill_axe` DESC LIMIT 1;')->fetch();
$voc_axe = $config['vocations'][$player_axe['vocation']];
	
$player_club = $db->query('SELECT `name`, `skill_club`, `vocation`, `looktype`, `lookhead`, `lookbody`, `looklegs`, `lookfeet`, `lookaddons` FROM `players` WHERE `group_id` < ' . $config['highscores_groups_hidden'] . ' ORDER BY `skill_club` DESC LIMIT 1;')->fetch();
$voc_club = $config['vocations'][$player_club['vocation']];
	
$player_dist = $db->query('SELECT `name`, `skill_dist`, `vocation`, `looktype`, `lookhead`, `lookbody`, `looklegs`, `lookfeet`, `lookaddons` FROM `players` WHERE `group_id` < ' . $config['highscores_groups_hidden'] . ' ORDER BY `skill_dist` DESC LIMIT 1;')->fetch();
$voc_dist = $config['vocations'][$player_dist['vocation']];
?>
<div class="tplevellayout">
<a class="topleveltext top_online" style="text-decoration:none" href="<?php echo getPlayerLink($player_ml['name'], false) ?>">
<div class="outfitImgtoplevel" style="background: url(<?php echo $player['outfit'] ?>) no-repeat 0 0;"></div>
<div class="rank_text" style="margin-left: 45px;">
  <span>1</span> - <?php echo $player_ml['name'] ?> <br>
  <small>Magic Level: (<?php echo $player_ml['maglevel'] ?>)<br><?php echo $voc_ml ?></small>
</div>
</a>
</div><hr>
<div class="tplevellayout">
<a class="topleveltext top_online" style="text-decoration:none" href="<?php echo getPlayerLink($player_sword['name'], false) ?>">
<div class="outfitImgtoplevel" style="background: url(<?php echo $player['outfit'] ?>) no-repeat 0 0;"></div>
<div class="rank_text" style="margin-left: 45px;">
  <span>1</span> - <?php echo $player_sword['name'] ?> <br>
  <small>Sword: (<?php echo $player_sword['skill_sword'] ?>)<br><?php echo $voc_sword ?></small>
</div>
</a>
</div><hr>
<div class="tplevellayout">
<a class="topleveltext top_online" style="text-decoration:none" href="<?php echo getPlayerLink($player_axe['name'], false) ?>">
<div class="outfitImgtoplevel" style="background: url(<?php echo $player['outfit'] ?>) no-repeat 0 0;"></div>
<div class="rank_text" style="margin-left: 45px;">
  <span>1</span> - <?php echo $player_axe['name'] ?> <br>
  <small>Axe: (<?php echo $player_axe['skill_axe'] ?>)<br><?php echo $voc_axe ?></small>
</div>
</a>
</div><hr>
<div class="tplevellayout">
<a class="topleveltext top_online" style="text-decoration:none" href="<?php echo getPlayerLink($player_club['name'], false) ?>">
<div class="outfitImgtoplevel" style="background: url(<?php echo $player['outfit'] ?>) no-repeat 0 0;"></div>
<div class="rank_text" style="margin-left: 45px;">
  <span>1</span> - <?php echo $player_club['name'] ?> <br>
  <small>Club: (<?php echo $player_club['skill_club'] ?>)<br><?php echo $voc_club ?></small>
</div>
</a>
</div><hr>
<div class="tplevellayout">
<a class="topleveltext top_online" style="text-decoration:none" href="<?php echo getPlayerLink($player_dist['name'], false) ?>">
<div class="outfitImgtoplevel" style="background: url(<?php echo $player['outfit'] ?>) no-repeat 0 0;"></div>
<div class="rank_text" style="margin-left: 45px;">
  <span>1</span> - <?php echo $player_dist['name'] ?> <br>
  <small>Distance: (<?php echo $player_dist['skill_dist'] ?>)<br><?php echo $voc_dist ?></small>
</div>
</a>
</div><hr>
</div>
    </div>
  </div>
</div>
