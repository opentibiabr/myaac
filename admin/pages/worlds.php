<?php
global $db, $action, $account_logged;
/**
 * Worlds
 *
 * @package   MyAAC
 * @author    OpenTibiaBR
 * @copyright 2024 MyAAC
 * @link      https://github.com/opentibiabr/myaac
 */
defined('MYAAC') or die('Direct access not allowed!');
if (!$db->hasTable('worlds')) {
  echo "worlds table doesn't exists!";
  return;
}

if (!superAdmin()) {
  echo 'Access denied.';
  return;
}

$title = 'Worlds';
$base = BASE_URL . 'admin/?p=worlds';

function echo_success($message)
{
  echo '<p class="success">' . $message . '</p>';
}

function echo_error($message)
{
  global $error;
  echo '<p class="error">' . $message . '</p>';
  $error = true;
}

if (isset($_POST['save'])) {
  $error = false;

  $_error = '';

  if (!$name = $_POST['name']) {
    echo_error("World name is required!");
  }
  $name = stripslashes(ucwords(strtolower($name)));

  if (!$type = $_POST['type']) {
    echo_error("Server type is required!");
  }
  if (!$ip = $_POST['ip']) {
    echo_error("IP is required!");
  }
  if (!$port = $_POST['port']) {
    echo_error("Port is required!");
  }
  if (!$location = $_POST['location']) {
    echo_error("Location is required!");
  }
  $motd = $_POST['motd'] ?? '';

  if ($id = $_POST['world_id'] ?? null) {
    $world = $id > 0 ? $db->query("SELECT * FROM `worlds` WHERE `id` = {$id}")->fetch(PDO::FETCH_ASSOC) : null;
    if (!$world) {
      echo_error("World with this id doesn't exist.");
    }

    if (!$error) {
      $db->exec("UPDATE `worlds` SET `name` = {$db->quote($name)}, `type` = {$db->quote($type)}, `motd` = {$db->quote($motd)}, `location` = {$db->quote($location)}, `ip` = {$db->quote($ip)}, `port` = {$port} WHERE `id` = {$id}");
      echo_success("World {$name} saved at: " . date('G:i'));
    }
  } else {
    if ($db->query("SELECT `id` FROM `worlds` WHERE `name` = {$db->quote($name)}")->fetch(PDO::FETCH_ASSOC)) {
      echo_error("World name is already in use!");
    } else if ($port == 7171) {
      echo_error("World port is unavailable!");
    } else if ($db->query("SELECT `id` FROM `worlds` WHERE `port` = {$port}")->fetch(PDO::FETCH_ASSOC)) {
      echo_error("World port is already in use!");
    }

    if (!$error) {
      try {
        generateQueryBuild('worlds', [
          'name' => $db->quote($name), 'type' => $db->quote($type), 'ip' => $db->quote($ip),
          'port' => $port, 'location' => $location, 'motd' => $motd, 'creation' => time()
        ]);

        generateQueryBuild('players', [
          'name' => $godName = "GOD on {$name}", 'group_id' => 6, 'account_id' => $account_logged->getId(),
          'level' => 2, 'vocation' => 0, 'health' => 155, 'healthmax' => 155, 'experience' => 100, 'lookbody' => 113,
          'lookfeet' => 115, 'lookhead' => 95, 'looklegs' => 39, 'looktype' => 75, 'maglevel' => 0, 'mana' => 60,
          'manamax' => 60, 'manaspent' => 0, 'town_id' => 8, 'conditions' => '', 'cap' => 410, 'sex' => 1,
          'skill_club' => 10, 'skill_club_tries' => 0, 'skill_sword' => 10, 'skill_sword_tries' => 0, 'skill_axe' => 10,
          'skill_axe_tries' => 0, 'skill_dist' => 10, 'skill_dist_tries' => 0, 'world_id' => $db->lastInsertId()
        ]);
        echo_success("World {$name} and '{$godName}' created at: " . date('H:i'));
        $action = "list";
//        header("Location: $base");
//        $twig->display('success.html.twig', array(
//          'title' => 'World Created',
//          'description' => "The world <b>{$name}</b> and character <b>GOD {$name}</b> has been created.",
//          'custom_buttons' => ''
//        ));
      } catch (E_OTS_NotLoaded $e) {
        echo_error("Can't create world, error: " . $e->getMessage());
      }
    }
  }
}

$id = $_REQUEST['id'] ?? 0;

if ($id > 0 || $action === 'add') {
  $world = $id > 0 ? $db->query("SELECT * FROM `worlds` WHERE `id` = {$id}")->fetch(PDO::FETCH_ASSOC) : null;
  ?>
  <form action="<?= $base . ($id > 0 ? '&id=' . $id : '') . (!empty($action) ? '&action=' . $action : ''); ?>"
        method="post" class="form-horizontal">
    <div class="col-12 col-md-8">
      <div class="box box-primary">
        <div class="box-body">
          <?php if ($world) { ?>
            <div class="row">
              <div class="col-6 col-md-2 mb-3">
                <label for="id" class="control-label">ID:</label>
                <input type="text" class="form-control" id="id" name="id"
                       autocomplete="off" style="cursor: auto;" readonly
                       value="<?= $world['id'] ?>" />
              </div>
            </div>
          <?php } ?>
          <div class="row">
            <div class="col-12 col-md-3 mb-3">
              <label for="name" class="control-label">Name:</label>
              <input type="text" class="form-control" id="name" name="name"
                     autocomplete="off" style="cursor: auto;" maxlength="50"
                     value="<?= $name ?? ($world['name'] ?? '') ?>" required />
            </div>
            <div class="col-12 col-md-3 mb-3">
              <label for="type" class="control-label">Server Type:</label>
              <select class="form-control" id="type" name="type" required>
                <?php foreach (['pvp', 'no-pvp', 'pvp-enforced', 'retro-pvp', 'retro-pvp-enforced'] as $item):
                  $type = $type ?? ($world['type'] ?? '')
                  ?>
                  <option
                    value="<?= $item ?>" <?= ($type == $item ? 'selected' : '') ?>><?= getWorldType($item) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-12 col-md-3 mb-3">
              <label for="ip" class="control-label">IP:</label>
              <input type="text" class="form-control" id="ip" name="ip"
                     autocomplete="off" style="cursor: auto;" maxlength="12"
                     value="<?= $ip ?? ($world['ip'] ?? '') ?>" required />
            </div>
            <div class="col-12 col-md-3 mb-3">
              <label for="port" class="control-label">Port:</label>
              <input type="number" class="form-control" id="port" name="port"
                     autocomplete="off" style="cursor: auto;" maxlength="5"
                     value="<?= $port ?? ($world['port'] ?? '') ?>" required />
            </div>
            <div class="col-12 col-md-3 mb-3">
              <label for="location" class="control-label">Location:</label>
              <select class="form-control" id="location" name="location" required>
                <?php foreach (['Europe', 'North America', 'South America', 'Oceania'] as $item):
                  $location = $location ?? ($world['location'] ?? '');
                  ?>
                  <option
                    value="<?= $item ?>" <?= ($location == $item ? 'selected' : '') ?>><?= $item ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-12 col-md-9 mb-3">
              <label for="motd" class="control-label">Motd:</label>
              <input type="text" class="form-control" id="motd" name="motd"
                     autocomplete="off" style="cursor: auto;" maxlength="200"
                     value="<?= $motd ?? ($world['motd'] ?? '') ?>" />
            </div>
          </div>
          <input type="hidden" name="save" value="yes" />
          <input type="hidden" name="world_id" value="<?= $world['id'] ?? null ?>" />
          <div class="box-footer">
            <a href="<?= $base ?>"><span class="btn btn-danger"><i
                  class="fa fa-remove"></i> Cancel</span></a>
            <div class="pull-right">
              <input type="submit" class="btn btn-success" value="<?= $id ? 'Update' : 'Create' ?>">
            </div>
          </div>

        </div>
      </div>
    </div>
  </form>
<?php } else { ?>
  <div class="row">
    <div class="col-12 col-md-9">
      <div class="box">
        <div class="box-header mb-1">
          <h3 class="box-title">Worlds found on your server</h3>
          <div class="box-tools pull-right">
            <a href="?p=worlds&action=add"><span class="btn btn-primary"><i
                  class="fa fa-plus-circle"></i> New</span></a>
          </div>
        </div>
        <div class="box-body no-padding">
          <table id="tb_worlds" class="table table-striped">
            <tbody>
            <tr>
              <th style="width: 100px; text-align: center">ID</th>
              <th>Name</th>
              <th style="width: 150px; text-align: center">Server Type</th>
              <th style="width: 150px; text-align: center">Location</th>
              <th style="width: 100px; text-align: center">IP</th>
              <th style="width: 100px; text-align: center">Port</th>
              <th style="width: 220px; text-align: center">Created at</th>
              <th style="width: 40px;"></th>
            </tr>
            <?php foreach (WORLDS as $world) { ?>
              <tr>
                <td style="text-align: center"><?= $world['id'] ?></td>
                <td><?= $world['name'] ?></td>
                <td style="text-align: center"><?= getWorldType($world['type']) ?></td>
                <td style="text-align: center"><?= $world['location'] ?></td>
                <td style="text-align: center"><?= $world['ip'] ?></td>
                <td style="text-align: center"><?= $world['port'] ?></td>
                <td style="text-align: center"><?= date("j F Y, H:i:s", $world['creation']) ?></td>
                <td>
                  <a href="?p=worlds&id=<?= $world['id'] ?>">
                    <span class="btn btn-success btn-sm edit"><i class="fa fa-edit"></i></span>
                  </a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
