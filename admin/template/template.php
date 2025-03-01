<?php
global $config, $db, $account_logged, $logged, $template_path, $page, $status, $content;

defined('MYAAC') or die('Direct access not allowed!');

$menus = [
  'dashboard' => ['Dashboard', 'dashboard'],
  'news' => ['News', 'newspaper'],
  'mailer' => ['Mailer', 'envelope'],
  'pages' => ['Pages', 'book'],
  'modifiers' => ['Modifiers', 'user'],
  'menus' => ['Menus', 'list'],
  'plugins' => ['Plugins', 'plug'],
  'visitors' => ['Visitors', 'users'],
  'worlds' => ['Worlds', 'globe'],
  'editor' => ['Editor', 'edit',
    'children' => [
      'accounts' => 'Accounts',
      'players' => 'Players',
    ]
  ],
  'items' => ['Items', 'gavel'],
  'tools' => ['Tools', 'wrench',
    'children' => [
      'pag_transactions' => 'Donates',
      'premiumvipupdater' => 'Premium/VIP Updater',
      'notepad' => 'Notepad',
      'phpinfo' => 'phpinfo',
      //'Premium/VIP Fixer' => 'fixvippremiumnewsystem', //Unused function (used to fix new vip/premium) system
    ]
  ],
  'logs' => ['Logs', 'edit',
    'children' => [
      'logs' => 'Logs',
      'reports' => 'Reports',
    ]
  ],
];

function getWorldsStatus($style = ''): string
{
  global $status;
  $output = "";
  foreach (WORLDS as $world) {
    $_s = $status['online'] ? 'success' : 'danger';
    $output .= "<span class='badge ms-1 bg-$_s' style='$style'>{$world['name']}</span>";
  }
  return $output;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  echo template_header(true);
  $title_full = (isset($title) ? $title . $config['title_separator'] : '') . configLua('serverName');
  ?>

  <title><?= $title_full ?></title>
  <link rel="shortcut icon" href="<?= BASE_URL ?>images/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="<?= BASE_URL ?>images/favicon.ico" type="image/x-icon" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?= BASE_URL ?>admin/bootstrap/css/bootstrap.min.css"> <!-- BOOTSTRAP 5 -->
  <link rel="stylesheet" href="<?= BASE_URL ?>admin/bootstrap/bootstrap-myaac.css"> <!-- CUSTOM -->
  <link rel="stylesheet" href="<?= BASE_URL ?>tools/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>tools/css/skins/skin-blue.min.css">

  <link rel="stylesheet" href="<?= BASE_URL ?>tools/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>tools/fonts/fontawesome/all.css">
  <script src="<?= BASE_URL ?>tools/fonts/fontawesome/all.js"></script>

  <link rel="stylesheet" href="<?= BASE_URL ?>tools/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>tools/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?= $template_path ?>style.css" />
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php if ($logged && admin()) { ?>
  <header class="main-header">
    <a href="." class="logo">
      <span class="logo-mini"><b>M</b>A</span>
      <span class="logo-lg"><b>My</b>AAC</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MyAAC v<?= MYAAC_VERSION ?></li>

        <?php foreach ($menus as $path => $item) {
          $icon = $item[1] ?? 'link';
          if (!$children = $item['children'] ?? null) {
            echo '<li' . ($page == $path ? ' class="active"' : '') . ">";
            echo "<a href='?p={$path}'><i class='fa fa-{$icon} me-1'></i> {$item[0]}</a></li>";
          }

          if ($children) {
            $used_menu = "";
            $nav_construct = '';
            foreach ($children as $_path => $child) {
              $nav_construct = $nav_construct . '<li';
              if ($page == $_path) {
                $nav_construct = $nav_construct . ' class="active"';
                $used_menu = true;
              }
              $nav_construct = "$nav_construct><a href='?p={$_path}'><i class='fa fa-circle-o me-1'></i> {$child}</a></li>";
            }

            $m = $used_menu ? ' menu-open' : '';
            $m2 = $used_menu ? '  display: block' : ' display: none';
            echo "<li class='treeview {$m}'><a href='#'><i class='fa fa-{$icon} me-1'></i> {$item[0]}
						              <span class='float-end'><i class='fa fa-angle-left float-end'></i></span></a>
						              <ul class='treeview-menu' style='$m2'>";
            echo $nav_construct;
            echo '</ul></li>';
          }
        }

        $menu_db = $db->query('SELECT `name`, `page`, `flags` FROM `' . TABLE_PREFIX . 'admin_menu` ORDER BY `ordering`')->fetchAll();
        foreach ($menu_db as $item) {
          if ($item['flags'] == 0 || hasFlag($item['flags'])) {
            echo '<li' . ($page == $item['page'] ? ' class="active"' : '') . ">";
            echo "<a href='?p={$item['page']}'><i class='fa fa-link me-1'></i> {$item['name']}</a></li>";
          }
        }
        ?>
        <li class="bg-danger">
          <a href="?action=logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
        </li>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1><?= ($title ?? ''); ?>
        <small> - Admin Panel</small>
        <div class="float-end"><?= getWorldsStatus() ?></div>
      </h1>
    </section>
    <section class="content">
      <?= $content; ?>
    </section>

  </div>

  <footer class="main-footer">
    <div class="hidden-xs float-end">
      <div id="status"><?= getWorldsStatus('width: 110px') ?></div>
    </div>
    <?= base64_decode('UG93ZXJlZCBieSA8YSBocmVmPSJodHRwczovL2dpdGh1Yi5jb20vb3BlbnRpYmlhYnIvbXlhYWMiIHRhcmdldD0iX2JsYW5rIj5PcGVuVGliaWFCUjwvYT4gYW5kIENvbnRyaWJ1dG9ycy4=') ?>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
    <div class="tab-content">
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Account</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="?action=logout">
              <i class="menu-icon fa fa-sign-out bg-red"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Log out</h4>
                <p>This will log you out of
                  account <?= (USE_ACCOUNT_NAME ? $account_logged->getName() : $account_logged->getId()); ?></p>
              </div>
            </a>
          </li>
        </ul>

        <h3 class="control-sidebar-heading">Site</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="<?= BASE_URL ?>" target="_blank">
              <i class="menu-icon fa fa-eye bg-blue"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Preview</h4>
                <p>This will open a new tab</p>
              </div>
            </a>
          </li>
        </ul>

        <h3 class="control-sidebar-heading">Version</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="?p=version">
              <i class="menu-icon fa fa-info bg-warning"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Check Version</h4>
                <p><?= MYAAC_VERSION ?> (check for updates)</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>

<?php }
if (!$logged && !admin()) {
  echo $content;
}
?>

<script src="<?= BASE_URL ?>admin/bootstrap/js/bootstrap.min.js"></script> <!-- BOOTSTRAP 5 -->
<!-- <script src="<?= BASE_URL ?>tools/js/bootstrap.min.js"></script> -->
<script src="<?= BASE_URL ?>tools/js/jquery-ui.min.js"></script>
<script src="<?= BASE_URL ?>tools/js/jquery.dataTables.min.js"></script>
<script src="<?= BASE_URL ?>tools/js/adminlte.min.js"></script>
</body>
</html>
