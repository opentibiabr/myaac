<?php
global $db, $cache, $config, $twig;
/**
 * Last kills
 *
 * @package   MyAAC
 * @author    Gesior <jerzyskalski@wp.pl>
 * @author    Slawkens <slawkens@gmail.com>
 * @author    OpenTibiaBR
 * @copyright 2023 MyAAC
 * @link      https://github.com/opentibiabr/myaac
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Last Kills';

if ($w = $_POST['world'] ?? null) {
  header("Location: ?lastkills/$w");
}

if ($world = $_GET['world'] ?? null) {
  $world = $db->query("SELECT `id`, `name` FROM `worlds` WHERE `name` = {$db->quote(urldecode($world))}")->fetch(PDO::FETCH_ASSOC) ?? null;
} else {
  $world = count(WORLDS) == 1 ? WORLDS[0] : $world;
}

$w_sql = $world ? " AND `p`.`world_id` = {$world['id']} " : "";

$last_kills = [];
$players_deaths_count = 0;

$tmp = null;
if ($cache->enabled() && $cache->fetch('last_kills', $tmp)) {
  $last_kills = unserialize($tmp);
} else {
  $players_deaths = $db->query("SELECT `p`.`name` AS `victim`, `d`.`killed_by` as `killed_by`, `d`.`time` as `time`, `d`.`level`, `d`.`is_player`, `w`.`name` as `world_name` FROM `player_deaths` as `d` INNER JOIN `players` as `p` ON d.player_id = p.id INNER JOIN `worlds` as `w` ON w.id = p.world_id $w_sql ORDER BY `time` DESC LIMIT {$config['last_kills_limit']};");
  if (!empty($players_deaths)) {
    foreach ($players_deaths as $k => $death) {
      $killers_string = getPlayerLink($death['victim']) . ' died at level <strong>' . $death['level'] . '</strong> by ';
      $killers_string .= ($death['is_player'] == '1' ? getPlayerLink($death['killed_by']) : $death['killed_by']) . '.';
      $last_kills[] = array(
        'id' => $k + 1,
        'time' => $death['time'],
        'killers_string' => $killers_string,
        'world' => $death['world_name'],
      );
    }
  }

  if ($cache->enabled()) {
    $cache->set('last_kills', serialize($last_kills), 120);
  }
}

$twig->display('lastkills.html.twig', array(
  'lastkills' => $last_kills,
  'world' => $world,
));

//search bar
$twig->display('online.form.html.twig');
