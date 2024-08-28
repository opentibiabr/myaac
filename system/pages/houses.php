<?php global $db, $config, $twig;
/**
 * Houses
 *
 * @package   MyAAC
 * @author    Gesior <jerzyskalski@wp.pl>
 * @author    Slawkens <slawkens@gmail.com>
 * @author    whiteblXK
 * @author    OpenTibiaBR
 * @copyright 2023 MyAAC
 * @link      https://github.com/opentibiabr/myaac
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Houses';

$worlds = $db->query("SELECT `id`, `name` FROM `worlds` ORDER BY `name` ASC")->fetchAll();

$errors = array();
if (!$db->hasColumn('houses', 'name')) {
  $errors[] = 'Houses list is not available on this server.';

  $twig->display('houses.html.twig', array(
    'errors' => $errors
  ));
  return;
}

$rentType = trim(strtolower(configLua('houseRentPeriod')));
if (!in_array($rentType, ['yearly', 'monthly', 'weekly', 'daily'])) {
  $rentType = 'never';
}

$state = '';
$order = '';
$type = '';

if (isset($_GET['page']) && $_GET['page'] == 'view' && isset($_REQUEST['house'])) {
  $beds = array("", "one", "two", "three", "fourth", "fifth");
  $houseName = $_REQUEST['house'];
  $houseId = (Validator::number($_REQUEST['house']) ? $_REQUEST['house'] : -1);
  $selectHouse = $db->query("SELECT * FROM {$db->tableName('houses')} WHERE {$db->fieldName('name')} LIKE {$db->quote($houseName)} OR `id` = {$houseId}");

  $house = [];
  if ($selectHouse->rowCount() > 0) {
    $house = $selectHouse->fetch();
    $houseId = $house['id'];

    $title = $house['name'] . ' - ' . $title;

    $imgPath = 'images/houses/' . $houseId . '.gif';
    if (!file_exists($imgPath)) {
      $imgPath = 'images/houses/default.jpg';
    }

    $bedsMessage = null;
    $houseBeds = $house['beds'];
    if ($houseBeds > 0)
      $bedsMessage = 'House have ' . ($beds[$houseBeds] ?? $houseBeds) . ' bed' . ($houseBeds > 1 ? 's' : '') . ".";
    else
      $bedsMessage = 'This house dont have any beds.';

    $houseOwner = $house['owner'];
    if ($houseOwner > 0) {
      $guild = NULL;
      $owner = null;
      if (isset($house['guild']) && $house['guild'] == 1) {
        $guild = new OTS_Guild();
        $guild->load($houseOwner);
        $owner = getGuildLink($guild->getName());
      } else
        $owner = getCreatureName($houseOwner);

      if ($rentType != 'never' && $house['paid'] > 0) {
        $who = '';
        if ($guild)
          $who = $guild->getName();
        else {
          $player = new OTS_Player();
          $player->load($houseOwner);
          if ($player->isLoaded()) {
            $sexs = array('She', 'He');
            $who = $sexs[$player->getSex()];
          }
        }
        $owner .= ' ' . $who . ' has paid the rent until ' . date("M d Y, H:i:s", $house['paid']) . ' CEST.';
      }
    }
  } else
    $errors[] = 'House with name ' . $houseName . ' does not exists.';

  $twig->display('houses.view.html.twig', array(
    'errors' => $errors,
    'imgPath' => $imgPath ?? null,
    'houseName' => $house['name'] ?? null,
    'bedsMessage' => $bedsMessage ?? null,
    'houseSize' => $house['size'] ?? null,
    'houseRent' => isset($house['rent']) ? $house['rent'] / 1000 : 0,
    'owner' => $owner ?? null,
    'rentType' => $rentType ?? null,
    'worlds' => $worlds,
    'worldName' => getWorldName($house['world_id']),
  ));

  return;
}

if ($cleanOldHouse = configLua('houseLoseAfterInactivity')) {
  $days = 0;
  if (in_array($rentType, ['yearly', 'monthly', 'weekly', 'daily'])) {
    $days = ['yearly' => 360, 'monthly' => 30, 'weekly' => 7, 'daily' => 1];
    $cleanOldHouse = (int)$cleanOldHouse * $days[$rentType];
  }
}

$housesSearch = false;
$houses = [];
if (!empty($_POST['world']) && isset($_POST['town']) && isset($_POST['state']) && isset($_POST['order']) && (isset($_POST['type']) || !$db->hasColumn('houses', 'guild'))) {
  $townName = $db->query("SELECT `id`, `name` FROM `towns` WHERE `id` = {$_POST['town']};")->fetch()['name'];

  $order = $_POST['order'];
  $orderBy = '`name`';
  if (!empty($order)) {
    if ($order == 'size')
      $orderBy = '`size`';
    else if ($order == 'rent')
      $orderBy = '`rent`';
  }

  $town = 'town';
  if ($db->hasColumn('houses', 'town_id'))
    $town = 'town_id';
  else if ($db->hasColumn('houses', 'townid'))
    $town = 'townid';

  $whereby = "`world_id` = {$_POST['world']} AND `$town` = {$_POST['town']}";
  $state = $_POST['state'];
  if (!empty($state))
    $whereby .= ' AND `owner` ' . ($state == 'free' ? '' : '!') . '= 0';

  $type = $_POST['type'] ?? NULL;
  if ($type == 'guildhalls' && !$db->hasColumn('houses', 'guild'))
    $type = 'all';

  if (!empty($type) && $type != 'all') {
    $guildColumn = '';
    if ($db->hasColumn('houses', 'guild')) {
      $guildColumn = 'guild';
    } else if ($db->hasColumn('houses', 'guildid')) {
      $guildColumn = 'guildid';
    }

    if ($guildColumn !== '') {
      $whereby .= ' AND `' . $guildColumn . '` ' . ($type == 'guildhalls' ? '!' : '') . '= 0';
    }
  }

  $houses_info = $db->query('SELECT * FROM `houses` WHERE ' . $whereby . ' ORDER BY ' . $orderBy);

  $players_info = $db->query("SELECT `houses`.`id` AS `houseid` , `players`.`name` AS `ownername` FROM `houses` , `players` , `accounts` WHERE `players`.`id` = `houses`.`owner` AND `accounts`.`id` = `players`.`account_id`");
  $players = array();
  foreach ($players_info->fetchAll() as $player)
    $players[$player['houseid']] = array('name' => $player['ownername']);

  foreach ($houses_info->fetchAll() as $house) {
    $owner = $players[$house['id']] ?? array();

    $houseRent = null;
    if ($db->hasColumn('houses', 'guild') && $house['guild'] == 1 && $house['owner'] != 0) {
      $guild = new OTS_Guild();
      $guild->load($house['owner']);
      $houseRent = 'Rented by ' . getGuildLink($guild->getName());
    } else {
      if (!empty($owner['name']))
        $houseRent = 'Rented by ' . getPlayerLink($owner['name']);
      else
        $houseRent = 'Free';
    }

    $houses[] = array('owner' => $owner, 'name' => $house['name'], 'size' => $house['size'], 'rent' => $house['rent'], 'rentedBy' => $houseRent);
  }

  $housesSearch = true;
}

$guild = $db->hasColumn('houses', 'guild') ? ' or guildhall' : '';
$twig->display('houses.html.twig', array(
  'state' => $state,
  'order' => $order,
  'type' => $type,
  'houseType' => $type == 'guildhalls' ? 'Guildhalls' : 'Houses and Flats',
  'townName' => $townName ?? null,
  'townId' => $_POST['town'] ?? null,
  'guild' => $guild,
  'rentType' => $rentType ?? null,
  'cleanOldHouse' => $cleanOldHouse,
  'houses' => $houses ?? [],
  'housesSearch' => $housesSearch,
  'worlds' => $worlds,
  'worldName' => getWorldName($_POST['world'] ?? 0),
));
