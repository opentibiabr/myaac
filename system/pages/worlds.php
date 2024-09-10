<?php global $db, $config, $twig, $status;
/**
 * Online
 *
 * @package   MyAAC
 * @author    OpenTibiaBR
 * @copyright 2024 MyAAC
 * @link      https://github.com/opentibiabr/myaac
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Worlds';

if ($w = $_POST['world'] ?? null) {
  header("Location: ?worlds/$w");
}

if ($world = $_GET['world'] ?? null) {
  $world = $db->query("SELECT * FROM `worlds` WHERE `name` = {$db->quote(urldecode($world))}")->fetch(PDO::FETCH_ASSOC) ?? null;
}

$twig->display('worlds.html.twig', [
  '_worlds' => $db->query("SELECT * FROM `worlds`")->fetchAll(PDO::FETCH_ASSOC),
  'world' => $world,
  'overall_maximum' => number_format(0) . ' players (on ' . date('M d Y, H:i:s', time()) . ')',
  'status' => $world ? ($status[$world['id']] ?? $status) : null, //todo remove $status in other PR
]);

if ($world) {
// search character
  $twig->display('character.search.form.html.twig');
}
