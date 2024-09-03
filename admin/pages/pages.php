<?php
/**
 * Pages
 *
 * @package   MyAAC
 * @author    Slawkens <slawkens@gmail.com>
 * @author    OpenTibiaBR
 * @copyright 2023 MyAAC
 * @link      https://github.com/opentibiabr/myaac
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Pages';

if (!hasFlag(FLAG_CONTENT_PAGES) && !superAdmin()) {
  echo 'Access denied.';
  return;
}

header('X-XSS-Protection:0');

$name = $p_title = '';
$groups = new OTS_Groups_List();

$php = false;
$enable_tinymce = true;
$access = 0;

if (!empty($action)) {
  if ($action == 'delete' || $action == 'edit' || $action == 'hide') {
    $id = $_REQUEST['id'];
  }

  if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
  }

  if (isset($_REQUEST['title'])) {
    $p_title = $_REQUEST['title'];
  }

  $php = isset($_REQUEST['php']) && $_REQUEST['php'] == 1;
  $enable_tinymce = isset($_REQUEST['enable_tinymce']) && $_REQUEST['enable_tinymce'] == 1;
  if ($php) {
    $body = $_REQUEST['body'];
  } elseif (isset($_REQUEST['body'])) {
    //$body = $_REQUEST['body'];
    $body = html_entity_decode(stripslashes($_REQUEST['body']));
  }

  if (isset($_REQUEST['access'])) {
    $access = $_REQUEST['access'];
  }

  $errors = [];
  $player_id = 1;

  if ($action == 'add') {
    if (Pages::add($name, $p_title, $body, $player_id, $php, $enable_tinymce, $access, $errors)) {
      $name = $p_title = $body = '';
      $player_id = $access = 0;
      $php = false;
      $enable_tinymce = true;
    }
  } elseif ($action == 'delete') {
    if (Pages::delete($id, $errors)) {
      success('Page with id ' . $id . ' has been deleted');
    }
  } elseif ($action == 'edit') {
    if (isset($id) && !isset($_REQUEST['name'])) {
      $_page = Pages::get($id);
      $name = $_page['name'];
      $p_title = $_page['title'];
      $body = $_page['body'];
      $php = $_page['php'] == '1';
      $enable_tinymce = $_page['enable_tinymce'] == '1';
      $access = $_page['access'];
    } else {
      Pages::update($id, $name, $p_title, $body, $player_id, $php, $enable_tinymce, $access);
      $action = $name = $p_title = $body = '';
      $player_id = 1;
      $access = 0;
      $php = false;
      $enable_tinymce = true;
    }
  } elseif ($action == 'hide') {
    Pages::toggleHidden($id, $errors);
  }

  if (!empty($errors)) {
    error(implode(', ', $errors));
  }
}

$query = $db->query('SELECT * FROM ' . $db->tableName(TABLE_PREFIX . 'pages'));

$pages = [];
foreach ($query as $_page) {
  $pages[] = [
    'link' => getFullLink($_page['name'], $_page['name'], true),
    'title' => substr($_page['title'], 0, 20),
    'php' => $_page['php'] == '1',
    'id' => $_page['id'],
    'hidden' => $_page['hidden'],
  ];
}

$twig->display('admin.pages.form.html.twig', [
  'action' => $action,
  'id' => $action == 'edit' ? $id : null,
  'name' => $name,
  'title' => $p_title,
  'php' => $php,
  'enable_tinymce' => $enable_tinymce,
  'body' => isset($body) ? escapeHtml($body) : '',
  'groups' => $groups->getGroups(),
  'access' => $access,
]);

$twig->display('admin.pages.html.twig', [
  'pages' => $pages,
]);

class Pages
{
  public static function get($id)
  {
    global $db;
    $query = $db->select(TABLE_PREFIX . 'pages', ['id' => $id]);
    if ($query !== false) {
      return $query;
    }

    return false;
  }

  public static function add($name, $title, $body, $player_id, $php, $enable_tinymce, $access, &$errors)
  {
    global $db;
    if (isset($name[0]) && isset($title[0]) && isset($body[0]) && $player_id != 0) {
      $query = $db->select(TABLE_PREFIX . 'pages', ['name' => $name]);
      if ($query === false) {
        $db->insert(TABLE_PREFIX . 'pages', [
          'name' => $name,
          'title' => $title,
          'body' => $body,
          'player_id' => $player_id,
          'php' => $php ? '1' : '0',
          'enable_tinymce' => $enable_tinymce ? '1' : '0',
          'access' => $access,
        ]);
      } else {
        $errors[] = 'Page with this link already exists.';
      }
    } else {
      $errors[] = 'Please fill all inputs.';
    }

    return !count($errors);
  }

  public static function update($id, $name, $title, $body, $player_id, $php, $enable_tinymce, $access)
  {
    global $db;
    $db->update(
      TABLE_PREFIX . 'pages',
      [
        'name' => $name,
        'title' => $title,
        'body' => $body,
        'player_id' => $player_id,
        'php' => $php ? '1' : '0',
        'enable_tinymce' => $enable_tinymce ? '1' : '0',
        'access' => $access,
      ],
      ['id' => $id]
    );
  }

  public static function delete($id, &$errors)
  {
    global $db;
    if (isset($id)) {
      if ($db->select(TABLE_PREFIX . 'pages', ['id' => $id]) !== false) {
        $db->delete(TABLE_PREFIX . 'pages', ['id' => $id]);
      } else {
        $errors[] = 'Page with id ' . $id . ' does not exists.';
      }
    } else {
      $errors[] = 'id not set';
    }

    return !count($errors);
  }

  public static function toggleHidden($id, &$errors)
  {
    global $db;
    if (isset($id)) {
      $query = $db->select(TABLE_PREFIX . 'pages', ['id' => $id]);
      if ($query !== false) {
        $db->update(TABLE_PREFIX . 'pages', ['hidden' => $query['hidden'] == 1 ? 0 : 1], ['id' => $id]);
      } else {
        $errors[] = 'Page with id ' . $id . ' does not exists.';
      }
    } else {
      $errors[] = 'id not set';
    }

    return !count($errors);
  }
}

?>
