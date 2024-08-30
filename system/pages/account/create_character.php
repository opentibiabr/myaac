<?php global $db, $account_logged, $twig;
/**
 * Create character
 *
 * @package   MyAAC
 * @author    Gesior <jerzyskalski@wp.pl>
 * @author    Slawkens <slawkens@gmail.com>
 * @author    OpenTibiaBR
 * @copyright 2023 MyAAC
 * @link      https://github.com/opentibiabr/myaac
 */
defined('MYAAC') or die('Direct access not allowed!');

$character_name = isset($_POST['name']) ? stripslashes(ucwords(strtolower($_POST['name']))) : null;
$character_sex = isset($_POST['sex']) ? (int)$_POST['sex'] : null;
$character_world = isset($_POST['world']) ? stripslashes(ucwords(strtolower($_POST['world']))) : null;
$character_vocation = isset($_POST['vocation']) ? (int)$_POST['vocation'] : null;
$character_town = isset($_POST['town']) ? (int)$_POST['town'] : null;

$character_created = false;
$save = isset($_POST['save']) && $_POST['save'] == 1;
$errors = array();
if ($save) {
  require_once LIBS . 'CreateCharacter.php';
  $createCharacter = new CreateCharacter();

  $character_created = $createCharacter->doCreate($character_world, $character_name, $character_sex, $character_vocation, $character_town, $account_logged, $errors);
}

if (count($errors) > 0) {
  $twig->display('error_box.html.twig', array('errors' => $errors));
}

if (!$character_created) {
  $twig->display('account.create_character.html.twig', array(
    'name' => $character_name,
    'sex' => $character_sex,
    'world' => $character_world,
    'vocation' => $character_vocation,
    'town' => $character_town,
    'save' => $save,
    'errors' => $errors,
    'locations' => [
      ['name' => 'Europe', 'value' => 'EUR'],
      ['name' => 'North America', 'value' => 'NA'],
      ['name' => 'South America', 'value' => 'SA'],
      ['name' => 'Oceania', 'value' => 'OCE'],
    ],
    'world_types' => [
      ['name' => 'Optional PvP', 'value' => 'optional', 'desc' => 'Only if both sides agree, characters can be fought'],
      ['name' => 'Open PvP', 'value' => 'open', 'desc' => 'Killing other characters is possible, but restricted'],
      ['name' => 'Retro Open PvP', 'value' => 'retro', 'desc' => 'Killing other characters is possible, but restricted (old PvP rules)'],
      ['name' => 'Retro Hardcore PvP', 'value' => 'retrohardcore', 'desc' => 'Killing other characters is not restricted at all (old PvP rules)'],
    ],
    'worlds' => $db->query("SELECT `id`, `name` FROM `worlds` ORDER BY `id` ASC")->fetchAll()
  ));
}
