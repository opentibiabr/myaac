<?php
global $TABLE_PREFIX;
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

$status = [];
$status['online'] = false;
$status['players'] = 0;
$status['playersMax'] = 0;
$status['lastCheck'] = 0;
$status['uptime'] = '0h 0m';
$status['monsters'] = 0;

if (config('status_enabled') === false) {
  return;
}

/** @var array $config */
$statusIp = configLua('ip');
if ($statusProtocolPort = configLua('statusProtocolPort')) {
  $config['lua']['loginPort'] = $statusProtocolPort;
  $config['lua']['statusPort'] = $statusProtocolPort;
}

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

if ($fetch_from_db) {
  // get info from db
  /** @var OTS_DB_MySQL $db */
  $status_query = $db->query(
    "SELECT `name`, `value` FROM `{$TABLE_PREFIX}config` WHERE {$db->fieldName(
      'name'
    )} LIKE '%status%'"
  );
  if ($status_query->rowCount() <= 0) {
    // empty, just insert it
    foreach ($status as $key => $value) {
      registerDatabaseConfig('status_' . $key, $value);
    }
  } else {
    foreach ($status_query as $tmp) {
      $status[str_replace('status_', '', $tmp['name'])] = $tmp['value'];
    }
  }
}

if (isset($config['lua']['statustimeout'])) {
  $config['lua']['statusTimeout'] = configLua('statustimeout');
}

// get status timeout from server config
$status_timeout = eval('return ' . configLua('statusTimeout') . ';') / 1000 + 1;
$status_interval = @$config['status_interval'];
if ($status_interval && $status_timeout < $config['status_interval']) {
  $status_timeout = $config['status_interval'];
}

if ($status['lastCheck'] + $status_timeout < time()) {
  updateStatus($statusIp, $statusProtocolPort);
}

function updateStatus($statusIp, $statusPort): void
{
  global $db, $cache, $config, $status;

  // get server status and save it to database
  $serverInfo = new OTS_ServerInfo($statusIp, $statusPort);
  $serverStatus = $serverInfo->status();
  if (!$serverStatus) {
    $status['online'] = false;
    $status['players'] = 0;
    $status['playersMax'] = 0;
  } else {
    $status['lastCheck'] = time(); // this should be set only if server respond

    $status['online'] = true;
    $status['players'] = $serverStatus->getOnlinePlayers(); // counts all players logged in-game, or only connected clients (if enabled on server side)
    $status['playersMax'] = $serverStatus->getMaxPlayers();

    // for status afk thing
    if ($config['online_afk']) {
      // get amount of players that are currently logged in-game, including disconnected clients (exited)
      if ($db->hasTable('players_online')) {
        // tfs 1.x
        $query = $db->query('SELECT COUNT(`player_id`) AS `playersTotal` FROM `players_online`;');
      } else {
        $query = $db->query(
          'SELECT COUNT(`id`) AS `playersTotal` FROM `players` WHERE `online` > 0'
        );
      }

      $status['playersTotal'] = 0;
      if ($query->rowCount() > 0) {
        $query = $query->fetch();
        $status['playersTotal'] = $query['playersTotal'];
      }
    }

    $uptime = $status['uptime'] = $serverStatus->getUptime();
    $m = date('m', $uptime);
    $m = $m > 1 ? "$m months, " : ($m == 1 ? 'month, ' : '');
    $d = date('d', $uptime);
    $d = $d > 1 ? "$d days, " : ($d == 1 ? 'day, ' : '');
    $h = date('H', $uptime);
    $min = date('i', $uptime);
    $status['uptimeReadable'] = "{$m}{$d}{$h}h {$min}m";

    $status['monsters'] = $serverStatus->getMonstersCount();
    $status['motd'] = $serverStatus->getMOTD();

    $status['mapAuthor'] = $serverStatus->getMapAuthor();
    $status['mapName'] = $serverStatus->getMapName();
    $status['mapWidth'] = $serverStatus->getMapWidth();
    $status['mapHeight'] = $serverStatus->getMapHeight();

    $status['server'] = $serverStatus->getServer();
    $status['serverVersion'] = $serverStatus->getServerVersion();
    $status['clientVersion'] = $serverStatus->getClientVersion();
  }

  if ($cache->enabled()) {
    $cache->set('status', serialize($status), 120);
  }

  $tmpVal = null;
  foreach ($status as $key => $value) {
    if (fetchDatabaseConfig('status_' . $key, $tmpVal)) {
      updateDatabaseConfig('status_' . $key, $value);
    } else {
      registerDatabaseConfig('status_' . $key, $value);
    }
  }
}
