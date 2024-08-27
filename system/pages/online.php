<?php global $db, $config, $twig;
/**
 * Online
 *
 * @package   MyAAC
 * @author    Gesior <jerzyskalski@wp.pl>
 * @author    Slawkens <slawkens@gmail.com>
 * @author    OpenTibiaBR
 * @copyright 2023 MyAAC
 * @link      https://github.com/opentibiabr/myaac
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Who is online?';

if ($w = $_POST['world'] ?? null) {
  header("Location: ?p=online&world=$w");
}
$worlds = $db->query("SELECT `id`, `name` FROM `worlds` ORDER BY `id` ASC")->fetchAll();
if ($world = $_GET['world'] ?? null) {
  $world = $db->query("SELECT `id`, `name` FROM `worlds` WHERE `name` = {$db->quote(escapeHtml($world))}")->fetch() ?? null;
} else {
  $world = count($worlds) == 1 ? $worlds[0]['id'] : $world;
}
$w_sql = $world ? " AND `players`.`world_id` = {$world['id']} " : "";

if ($config['account_country'])
  require SYSTEM . 'countries.conf.php';

$promotion = $db->hasColumn('players', 'promotion') ? '`promotion`, ' : '';

$order = $_GET['order'] ?? 'name';
if (!in_array($order, array('country', 'name', 'level', 'vocation')))
  $order = $db->fieldName('name');
else if ($order == 'country')
  $order = $db->tableName('accounts') . '.' . $db->fieldName('country');
else if ($order == 'vocation')
  $order = $promotion . 'vocation ASC';

$skull_type = $db->hasColumn('players', 'skull_type') ? 'skull_type' : 'skull';
$skull_time = $db->hasColumn('players', 'skull_time') ? 'skull_time' : 'skulltime';

$outfit_addons = false;
$outfit = '';
if ($config['online_outfit']) {
  $outfit = ', lookbody, lookfeet, lookhead, looklegs, looktype';
  if ($db->hasColumn('players', 'lookaddons')) {
    $outfit .= ', lookaddons';
    $outfit_addons = true;
  }
}

$vocations = [];
if ($config['online_vocations']) {
  foreach ($config['vocations'] as $id => $name) {
    $vocations[$id] = 0;
  }
}

if ($db->hasTable('players_online')) // tfs 1.0
  $playersOnline = $db->query("SELECT `accounts`.`country`, `players`.`name`, `players`.`level`, `players`.`vocation`, `players`.`world_id` $outfit, `$skull_time` as `skulltime`, `$skull_type` as `skull` FROM `accounts`, `players`, `players_online` WHERE `players`.`id` = `players_online`.`player_id` AND `accounts`.`id` = `players`.`account_id` $w_sql ORDER BY $order");
else
  $playersOnline = $db->query("SELECT `accounts`.`country`, `players`.`name`, `players`.`level`, `players`.`vocation`, `players`.`world_id` $outfit, $promotion `$skull_time` as `skulltime`, `$skull_type` as `skull` FROM `accounts`, `players` WHERE `players`.`online` > 0 AND `accounts`.`id` = `players`.`account_id` $w_sql ORDER BY $order");

$players_data = [];
foreach ($playersOnline as $player) {
  $skull = '';
  if ($config['online_skulls']) {
    if ($player['skulltime'] > 0) {
      if ($player['skull'] == 3)
        $skull = ' <img style="border: 0;" src="images/white_skull.gif"/>';
      elseif ($player['skull'] == 4)
        $skull = ' <img style="border: 0;" src="images/red_skull.gif"/>';
      elseif ($player['skull'] == 5)
        $skull = ' <img style="border: 0;" src="images/black_skull.gif"/>';
    }
  }

  if ($pPromotion = $player['promotion'] ?? null) {
    if ((int)$pPromotion > 0) $player['vocation'] += ($pPromotion * $config['vocations_amount']);
  }

  $players_data[] = array(
    'name' => getPlayerLink($player['name']),
    'player' => $player,
    'level' => $player['level'],
    'vocation' => $config['vocations'][$player['vocation']],
    'country_image' => $config['account_country'] ? getFlagImage($player['country']) : null,
    'outfit' => $config['online_outfit'] ? $config['outfit_images_url'] . '?id=' . $player['looktype'] . ($outfit_addons ? '&addons=' . $player['lookaddons'] : '') . '&head=' . $player['lookhead'] . '&body=' . $player['lookbody'] . '&legs=' . $player['looklegs'] . '&feet=' . $player['lookfeet'] : null
  );

  if ($config['online_vocations']) {
    $vocations[($player['vocation'] > $config['vocations_amount'] ? $player['vocation'] - $config['vocations_amount'] : $player['vocation'])]++;
  }
}

$record = '';
if ($config['online_record']) {
  $timestamp = false;
  $query = null;
  if ($db->hasTable('server_config')) {
    $query = $db->query("SELECT `timestamp`, `value` as `record` FROM `server_config` WHERE `config` = {$db->quote('players_record')}");
  }

  if ($query && $query->rowCount() > 0) {
    $result = $query->fetch();
    $record = "{$result['record']} players<br><small>" . date('d/m/Y, H:i:s', strtotime($result['timestamp'])) . '</small>';
  }
}

$twig->display('online.html.twig', array(
  'players' => $players_data,
  'record' => $record,
  'current_date' => date('d/m/Y'),
  'vocations' => $vocations,
  'worlds' => $worlds,
  'world' => $world,
));

//search bar
$twig->display('online.form.html.twig');
