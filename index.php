<?php
global $db, $twig, $template_path, $account_logged, $logged, $template_name, $status;
/**
 * Project: MyAAC
 *     Automatic Account Creator for Open Tibia Servers
 * File: index.php
 *
 * This is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @package   MyAAC
 * @author    Slawkens <slawkens@gmail.com>
 * @author    OpenTibiaBR
 * @copyright 2023 MyAAC
 * @link      https://github.com/opentibiabr/myaac
 */

require_once 'common.php';
require_once SYSTEM . 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

$tmp = BASE_DIR;
if (!empty($tmp)) {
  $uri = str_replace(BASE_DIR . '/', '', $uri);
} else {
  $uri = str_replace_first('/', '', $uri);
}

$uri = str_replace(['index.php/', '?'], '', $uri);
define('URI', $uri);

if (preg_match("/^[A-Za-z0-9-_%'+]+\.png$/i", $uri)) {
  $tmp = explode('.', $uri);
  $_REQUEST['name'] = urldecode($tmp[0]);

  chdir(TOOLS . 'signature');
  include TOOLS . 'signature/index.php';
  exit();
}

if (preg_match("/^(.*)\.(gif|jpg|png|jpeg|tiff|bmp|css|js|less|map|html|php|zip|rar|gz|ttf|woff|ico)$/i", $_SERVER['REQUEST_URI'])) {
  http_response_code(404);
  exit();
}

if (file_exists(BASE . 'config.local.php')) {
  require_once BASE . 'config.local.php';
}

ini_set('log_errors', 1);
if (config('env') === 'dev') {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
} else {
  ini_set('display_errors', 0);
  ini_set('display_startup_errors', 0);
  error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
}

if ((!isset($config['installed']) || !$config['installed']) && file_exists(BASE . 'install')) {
  header('Location: ' . BASE_URL . 'install/');
  throw new RuntimeException(
    'Setup detected that <b>install/</b> directory exists. Please visit <a href="' .
      BASE_URL .
      'install">this</a> url to start MyAAC Installation.<br/>Delete <b>install/</b> directory if you already installed MyAAC.<br/>Remember to REFRESH this page when you\'re done!'
  );
}

$found = false;
if (empty($uri) || isset($_REQUEST['template'])) {
  $_REQUEST['p'] = 'news';
  $found = true;
} else {
  $tmp = strtolower($uri);
  if (!preg_match('/[^A-z0-9\-]/', $uri) && file_exists(SYSTEM . 'pages/' . $tmp . '.php')) {
    $_REQUEST['p'] = $uri;
    $found = true;
  } else {
    $rules = [
      '/^account\/manage\/?$/' => ['subtopic' => 'accountmanagement'],
      '/^account\/create\/?$/' => ['subtopic' => 'createaccount'],
      '/^account\/lost\/?$/' => ['subtopic' => 'lostaccount'],
      '/^account\/logout\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'logout'],
      '/^account\/password\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'change_password'],
      '/^account\/register\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'register'],
      '/^account\/register\/new\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'register_new'],
      '/^account\/resend\/verify\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'resend_verify'],
      '/^account\/email\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'change_email'],
      '/^account\/info\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'change_info'],
      '/^account\/character\/create\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'create_character'],
      '/^account\/character\/name\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'change_name'],
      '/^account\/character\/sex\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'change_sex'],
      '/^account\/character\/main\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'change_main'],
      '/^account\/character\/delete\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'delete_character'],
      '/^account\/character\/comment\/[A-Za-z0-9-_%+\']+\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'change_comment', 'name' => '$3'],
      '/^account\/character\/comment\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'change_comment'],
      '/^account\/confirm_email\/[A-Za-z0-9-_]+\/?$/' => ['subtopic' => 'accountmanagement', 'action' => 'confirm_email', 'v' => '$2'],
      '/^characters\/[A-Za-z0-9-_%+\']+$/' => ['subtopic' => 'characters', 'name' => '$1'],
      '/^changelog\/[0-9]+\/?$/' => ['subtopic' => 'changelog', 'page' => '$1'],
      '/^commands\/add\/?$/' => ['subtopic' => 'commands', 'action' => 'add'],
      '/^commands\/edit\/?$/' => ['subtopic' => 'commands', 'action' => 'edit'],
      '/^faq\/add\/?$/' => ['subtopic' => 'faq', 'action' => 'add'],
      '/^faq\/edit\/?$/' => ['subtopic' => 'faq', 'action' => 'edit'],
      '/^forum\/add_board\/?$/' => ['subtopic' => 'forum', 'action' => 'add_board'], #
      '/^forum\/edit_board\/?$/' => ['subtopic' => 'forum', 'action' => 'edit_board'],
      '/^forum\/board\/[0-9]+\/?$/' => ['subtopic' => 'forum', 'action' => 'show_board', 'id' => '$2'],
      '/^forum\/board\/[0-9]+\/[0-9]+\/?$/' => ['subtopic' => 'forum', 'action' => 'show_board', 'id' => '$2', 'page' => '$3'],
      '/^forum\/thread\/[0-9]+\/?$/' => ['subtopic' => 'forum', 'action' => 'show_thread', 'id' => '$2'],
      '/^forum\/thread\/[0-9]+\/[0-9]+\/?$/' => ['subtopic' => 'forum', 'action' => 'show_thread', 'id' => '$2', 'page' => '$3'],
      '/^gallery\/add\/?$/' => ['subtopic' => 'gallery', 'action' => 'add'],
      '/^gallery\/edit\/?$/' => ['subtopic' => 'gallery', 'action' => 'edit'],
      '/^gallery\/[0-9]+\/?$/' => ['subtopic' => 'gallery', 'image' => '$1'],
      '/^gifts\/history\/?$/' => ['subtopic' => 'gifts', 'action' => 'show_history'],
      '/^guilds\/[A-Za-z0-9-_%+\']+$/' => ['subtopic' => 'guilds', 'action' => 'show', 'guild' => '$1'],
      '/^highscores\/[A-Za-z0-9-_]+\/[A-Za-z0-9-_]+\/[0-9]+\/?$/' => ['subtopic' => 'highscores', 'list' => '$1', 'vocation' => '$2', 'page' => '$3'],
      '/^highscores\/[A-Za-z0-9-_]+\/[0-9]+\/?$/' => ['subtopic' => 'highscores', 'list' => '$1', 'page' => '$2'],
      '/^highscores\/[A-Za-z0-9-_]+\/[A-Za-z0-9-_]+\/?$/' => ['subtopic' => 'highscores', 'list' => '$1', 'vocation' => '$2'],
      '/^highscores\/[A-Za-z0-9-_\']+\/?$/' => ['subtopic' => 'highscores', 'list' => '$1'],
      '/^news\/add\/?$/' => ['subtopic' => 'news', 'action' => 'add'],
      '/^news\/edit\/?$/' => ['subtopic' => 'news', 'action' => 'edit'],
      '/^news\/archive\/?$/' => ['subtopic' => 'newsarchive'],
      '/^news\/archive\/[0-9]+\/?$/' => ['subtopic' => 'newsarchive', 'id' => '$2'],
      '/^polls\/[0-9]+\/?$/' => ['subtopic' => 'polls', 'id' => '$1'],
      '/^spells\/[A-Za-z0-9-_%]+\/[A-Za-z0-9-_]+\/?$/' => ['subtopic' => 'spells', 'vocation' => '$1', 'order' => '$2'],
      '/^houses\/view\/?$/' => ['subtopic' => 'houses', 'page' => 'view'],
    ];

    foreach ($rules as $rule => $redirect) {
      if (preg_match($rule, $uri)) {
        $tmp = explode('/', $uri);
        /* @var $redirect array */
        foreach ($redirect as $key => $value) {
          if (strpos($value, '$') !== false) {
            $value = str_replace('$' . $value[1], $tmp[$value[1]], $value);
          }

          $_REQUEST[$key] = $value;
          $_GET[$key] = $value;
        }

        $found = true;
        break;
      }
    }
  }
}

// define page visited, so it can be used within events system
$page = $_REQUEST['subtopic'] ?? ($_REQUEST['p'] ?? '');
if (empty($page) || !preg_match('/^[A-z0-9\-]+$/', $page)) {
  $tmp = URI;
  if (!empty($tmp)) {
    $page = $tmp;
  } else {
    if (!$found) {
      $page = '404';
    } else {
      $page = 'news';
    }
  }
}

$page = strtolower($page);
define('PAGE', $page);

$template_place_holders = [];

require_once SYSTEM . 'init.php';

// verify myaac tables exists in database
if (!$db->hasTable('myaac_account_actions')) {
  throw new RuntimeException(
    'Seems that the table <strong>myaac_account_actions</strong> of MyAAC doesn\'t exist in the database. This is a fatal error. You can try to reinstall MyAAC by visiting <a href="' .
      BASE_URL .
      'install">this</a> url.'
  );
}

// event system
require_once SYSTEM . 'hooks.php';
$hooks = new Hooks();
$hooks->load();
require_once SYSTEM . 'template.php';
require_once SYSTEM . 'login.php';
require_once SYSTEM . 'status.php';

$twig->addGlobal('config', $config);
$twig->addGlobal('status', $status);

require SYSTEM . 'migrate.php';

$hooks->trigger(HOOK_STARTUP);

if ($config['views_counter']) {
  require_once SYSTEM . 'counter.php';
}

if ($config['visitors_counter']) {
  require_once SYSTEM . 'libs/visitors.php';
  $visitors = new Visitors($config['visitors_counter_ttl']);
}

// page content loading
if (!isset($content[0])) {
  $content = '';
}
$load_it = true;

// check if site has been closed
$site_closed = false;
if (fetchDatabaseConfig('site_closed', $site_closed)) {
  $site_closed = $site_closed == 1;
  if ($site_closed) {
    if (!admin()) {
      $title = getDatabaseConfig('site_closed_title');
      $content .= '<p class="note">' . getDatabaseConfig('site_closed_message') . '</p><br/>';
      $load_it = false;
    }

    if (!$logged) {
      ob_start();
      require SYSTEM . 'pages/accountmanagement.php';
      $content .= ob_get_contents();
      ob_end_clean();
      $load_it = false;
    }
  }
}
define('SITE_CLOSED', $site_closed);

// backward support for gesior
if ($config['backward_support']) {
  define('INITIALIZED', true);
  $SQL = $db;
  $layout_header = template_header();
  $layout_name = $template_path;
  $news_content = '';
  $tickers_content = '';
  $subtopic = PAGE;
  $main_content = '';

  $config['access_admin_panel'] = 2;
  $group_id_of_acc_logged = 0;
  if ($logged && $account_logged) {
    $group_id_of_acc_logged = $account_logged->getGroupId();
  }

  $config['site'] = &$config;
  $config['server'] = &$config['lua'];
  $config['site']['shop_system'] = $config['gifts_system'];
  $config['site']['gallery_page'] = true;

  if (!isset($config['vdarkborder'])) {
    $config['vdarkborder'] = '#505050';
  }
  if (!isset($config['darkborder'])) {
    $config['darkborder'] = '#D4C0A1';
  }
  if (!isset($config['lightborder'])) {
    $config['lightborder'] = '#F1E0C6';
  }

  $config['site']['download_page'] = true;
  $config['site']['serverinfo_page'] = true;
  $config['site']['screenshot_page'] = true;

  if ($config['forum'] != '') {
    $config['forum_link'] = strtolower($config['forum']) === 'site' ? getLink('forum') : $config['forum'];
  }

  foreach ($status as $key => $value) {
    $config['status']['serverStatus_' . $key] = $value;
  }
}

if ($load_it) {
  if (SITE_CLOSED && admin()) {
    $content .= '<p class="note">Site is under maintenance (closed mode). Only privileged users can see it.</p>';
  }

  if ($config['backward_support']) {
    require SYSTEM . 'compat/pages.php';
    require SYSTEM . 'compat/classes.php';
  }

  $ignore = false;

  $logged_access = 1;
  if ($logged && $account_logged && $account_logged->isLoaded()) {
    $logged_access = $account_logged->getAccess();
  }

  $success = false;
  $tmp_content = getCustomPage($page, $success);
  if ($success) {
    $content .= $tmp_content;
    if (hasFlag(FLAG_CONTENT_PAGES) || superAdmin()) {
      $pageInfo = getCustomPageInfo($page);
      $content =
        $twig->render('admin.pages.links.html.twig', [
          'page' => ['id' => $pageInfo !== null ? $pageInfo['id'] : 0, 'hidden' => $pageInfo !== null ? $pageInfo['hidden'] : '0'],
        ]) . $content;
    }
  } else {
    $file = TEMPLATES . "$template_name/pages/$page.php";
    if (!@file_exists($file) || preg_match('/[^A-z0-9_\-]/', $page)) {
      $file = SYSTEM . "pages/$page.php";
      if (!@file_exists($file) || preg_match('/[^A-z0-9_\-]/', $page)) {
        $page = '404';
        $file = SYSTEM . 'pages/404.php';
      }
    }
  }

  ob_start();
  if ($hooks->trigger(HOOK_BEFORE_PAGE)) {
    if (!$ignore) {
      require $file;
    }
  }

  if ($config['backward_support'] && isset($main_content[0])) {
    $content .= $main_content;
  }

  $content .= ob_get_contents();
  ob_end_clean();
  $hooks->trigger(HOOK_AFTER_PAGE);
}

if ($config['backward_support']) {
  $main_content = $content;
  if (!isset($title)) {
    $title = ucfirst($page);
  }

  $topic = $title;
}

$title_full = (isset($title) ? $title . $config['title_separator'] : '') . $config['lua']['serverName'];
require $template_path . '/' . $template_index;

echo base64_decode('PCEtLSBQb3dlcmVkIGJ5IE9wZW5UaWJpYUJSIE15QUFDIDo6IGh0dHBzOi8vZ2l0aHViLmNvbS9vcGVudGliaWFici9teWFhYyAtLT4=') . PHP_EOL;
if (superAdmin()) {
  echo '<!-- Generated in: ' . round(microtime(true) - START_TIME, 4) . 'ms -->';
  echo PHP_EOL . '<!-- Queries done: ' . $db->queries() . ' -->';
  if (function_exists('memory_get_peak_usage')) {
    echo PHP_EOL . '<!-- Peak memory usage: ' . convert_bytes(memory_get_peak_usage(true)) . ' -->';
  }
}

$hooks->trigger(HOOK_FINISH);
