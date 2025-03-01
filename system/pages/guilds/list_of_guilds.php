<?php global $db, $config, $twig, $world;
/**
 * List of guilds
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

$guilds = [];
if ($world) {
  $guildList = new OTS_Guilds_List();
  $filter = new OTS_SQLFilter();
  $filter->compareField('world_id', (int)$world['id']);
  $guildList->setFilter($filter);
  $guildList->orderBy("name");

  foreach ($guildList as $guild) {
    $guild_logo = $guild->getCustomField('logo_name');
    if (empty($guild_logo) || !file_exists('images/guilds/' . $guild_logo))
      $guild_logo = "default.gif";

    $description = $guild->getCustomField('description');
    $description_with_lines = str_replace(array("\r\n", "\n", "\r"), '<br />', $description, $count);
    if ($count < $config['guild_description_lines_limit'])
      $description = nl2br($description);

    $guildName = $guild->getName();
    $guilds[] = ['name' => $guildName, 'logo' => $guild_logo, 'link' => getGuildLink($guildName, false), 'description' => $description];
  }
}

$twig->display('guilds.list.html.twig', array(
  'guilds' => $guilds,
  'logged' => $logged ?? false,
  'isAdmin' => admin(),
  'world' => $world ?? null,
));
