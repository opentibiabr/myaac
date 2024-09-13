<?php global $db, $TABLE_PREFIX;
/**
 * Server status
 *
 * @package   MyAAC
 * @author    Slawkens <slawkens@gmail.com>
 * @author    OpenTibiaBR
 * @copyright 2023 MyAAC
 * @link      https://github.com/opentibiabr/myaac
 */
defined('MYAAC') or die('Direct access not allowed!');

if (config('status_enabled') === false) {
  return;
}

$status = [];

$worlds = $db->query("SELECT `id`, `name`, `port_status` FROM `worlds` ORDER BY `id` ASC")->fetchAll(PDO::FETCH_ASSOC);
foreach ($worlds as $w) {
  $status[$w['id']] = [
    'online' => false,
    'players' => 0,
    'playersMax' => 0,
    'lastCheck' => 0,
    'uptime' => '0h 0m',
    'monsters' => 0,
    'port' => $w['port_status'],
  ];
}

/** @var array $config */
$statusIp = configLua('ip');
$statusProtocolPort = configLua('statusProtocolPort');

// ip check
$statusIp = !empty($config['status_ip'] ?? '') ? $config['status_ip'] : $statusIp;

// port check
$statusProtocolPort = !empty($config['status_port'] ?? '')
  ? $config['status_port']
  : $statusProtocolPort;

$fetch_from_db = true;
/** @var Cache $cache */
if ($cache->enabled()) {
  $tmp = '';
  if ($cache->fetch('status', $tmp)) {
    $status = unserialize($tmp);
    $fetch_from_db = false;
  }
}

// get status timeout from server config
$statusTimeout = configLua('statusTimeout');
$statusTimeout = eval("return {$statusTimeout};") / 1000 + 1;
$statusInterval = @$config['status_interval'];
if ($statusInterval && $statusTimeout < $statusInterval) {
  $statusTimeout = $statusInterval;
}

foreach ($status as $worldId => $statusItem) {
  if ($fetch_from_db) {
    // get info from db
    /** @var OTS_DB_MySQL $db */
    $status_query = $db->query(
      "SELECT `name`, `value` FROM `{$TABLE_PREFIX}config` WHERE {$db->fieldName('name')} LIKE '%status%' AND `world_id` = {$worldId}"
    )->fetchAll(PDO::FETCH_ASSOC);
    if (count($status_query) > 0) {
      foreach ($status_query as $item) {
        $statusItem[str_replace('status_', '', $item['name'])] = $item['value'];
      }
    } else {
      // empty, just insert it
      foreach ($statusItem as $key => $value) {
        registerDatabaseConfig("status_$key", $value, $worldId);
      }
    }
  }

  if ($statusItem['lastCheck'] + $statusTimeout < time()) {
    updateStatus($statusItem, $statusIp, $worldId);
  }

  $status[$worldId] = $statusItem;

  if ($cache->enabled()) {
    $cache->set('status', serialize($status), 120);
  }
}

function updateStatus(&$_status, $statusIp, $worldId): void
{
  global $db, $config;

  // get server status and save it to database
  $serverInfo = new OTS_ServerInfo($statusIp, $_status['port']);
  $serverStatus = $serverInfo->status();
  if (!$serverStatus) {
    $_status['online'] = false;
    $_status['players'] = 0;
    $_status['playersMax'] = 0;
  } else {
    $_status['lastCheck'] = time(); // this should be set only if server respond
    $_status['online'] = true;
    $_status['players'] = $serverStatus->getOnlinePlayers(); // counts all players logged in-game, or only connected clients (if enabled on server side)
    $_status['playersMax'] = $serverStatus->getMaxPlayers();

    // for status afk thing
    if ($config['online_afk']) {
      // get amount of players that are currently logged in-game, including disconnected clients (exited)
      if ($db->hasTable('players_online')) {
        // tfs 1.x
        $query = $db->query("SELECT COUNT(`player_id`) AS `playersTotal` FROM `players_online` WHERE `world_id` = {$worldId};");
      } else {
        $query = $db->query(
          "SELECT COUNT(`id`) AS `playersTotal` FROM `players` WHERE `online` > 0 AND `world_id` = {$worldId};"
        );
      }

      $_status['playersTotal'] = 0;
      if ($query->rowCount() > 0) {
        $query = $query->fetch();
        $_status['playersTotal'] = $query['playersTotal'];
      }
    }

    $uptime = $_status['uptime'] = $serverStatus->getUptime();
    $m = date('m', $uptime);
    $m = $m > 1 ? "$m months, " : ($m == 1 ? 'month, ' : '');
    $d = date('d', $uptime);
    $d = $d > 1 ? "$d days, " : ($d == 1 ? 'day, ' : '');
    $h = date('H', $uptime);
    $min = date('i', $uptime);
    $_status['uptimeReadable'] = "{$m}{$d}{$h}h {$min}m";

    $_status['monsters'] = $serverStatus->getMonstersCount();
    $_status['motd'] = $serverStatus->getMOTD();

    $_status['mapAuthor'] = $serverStatus->getMapAuthor();
    $_status['mapName'] = $serverStatus->getMapName();
    $_status['mapWidth'] = $serverStatus->getMapWidth();
    $_status['mapHeight'] = $serverStatus->getMapHeight();

    $_status['server'] = $serverStatus->getServer();
    $_status['serverVersion'] = $serverStatus->getServerVersion();
    $_status['clientVersion'] = $serverStatus->getClientVersion();
  }

  $tmpVal = null;
  foreach ($_status as $key => $value) {
    if (fetchDatabaseConfig("status_$key", $tmpVal, $worldId)) {
      updateDatabaseConfig("status_$key", $value, $worldId);
    } else {
      registerDatabaseConfig("status_$key", $value, $worldId);
    }
  }
}
