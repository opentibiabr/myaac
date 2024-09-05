<?php
global $status;
define('MYAAC_ADMIN', true);

require '../../common.php';
require SYSTEM . 'init.php';
require SYSTEM . 'functions.php';
require SYSTEM . 'status.php';
require SYSTEM . 'login.php';

$worldId = $_GET['world'] ?? 1;
$_status = $status[$worldId];

if (!admin())
  die('Access denied.');

if (!$_status['online'])
  die('Offline');
?>
<b>Server</b>: <?= $_status['server'] . ' ' . $_status['serverVersion']; ?><br />
<b>Version</b>: <?= $_status['clientVersion']; ?><br /><br />
<b>Monsters</b>: <?= $_status['monsters']; ?><br />
<b>Map</b>: <?= $_status['mapName']; ?>, <b>author</b>: <?= $_status['mapAuthor']; ?>,
<b>size</b>: <?= $_status['mapWidth'] . ' x ' . $_status['mapHeight']; ?><br />
<b>MOTD</b>: <?= $_status['motd']; ?><br /><br />
<b>Last check</b>: <?= date("H:i:s", $_status['lastCheck']); ?>
