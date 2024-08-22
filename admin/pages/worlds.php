<?php
global $db;
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
  die("worlds table doesn't exists!");
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

$id = $_REQUEST['id'] ?? 0;

if ($id > 0) {
  $world = $db->query("SELECT * FROM `worlds` WHERE `id` = {$id}")->fetch();
  ?>
  <form action="<?= $base . '&id=' . $id ?>" method="post" class="form-horizontal col-md-8">
    <div class="">
      <div class="box box-primary">
        <div class="box-body">
          <div class="row">
            <div class="col-2 mb-3">
              <label for="id" class="control-label">ID:</label>
              <input type="text" class="form-control" id="id" name="id"
                     autocomplete="off" style="cursor: auto;" readonly
                     value="<?= $world['id'] ?>" />
            </div>
          </div>

          <input type="hidden" name="save" value="yes" />
          <div class="box-footer">
            <a href="<?= $base ?>"><span class="btn btn-danger"><i
                  class="fa fa-remove"></i> Cancel</span></a>
            <div class="pull-right">
              <input type="submit" class="btn btn-success" value="Update">
            </div>
          </div>

        </div>
      </div>
  </form>
<?php } else {
  $worlds = $db->query("SELECT * FROM `worlds` ORDER BY `id` ASC")->fetchAll();
  ?>
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="box">
        <div class="box-body no-padding">
          <table id="tb_donates" class="table table-striped">
            <tbody>
            <tr>
              <th style="width: 40px">#</th>
              <th style="width: 60px">ID</th>
              <th>Name</th>
              <th style="width: 120px; text-align: center">Server Type</th>
              <th style="width: 100px; text-align: center">IP</th>
              <th style="width: 100px; text-align: center">Port</th>
              <th style="width: 40px;"></th>
            </tr>
            <?php foreach ($worlds as $k => $world) { ?>
              <tr>
                <td><?= $k + 1 ?></td>
                <td><?= $world['id'] ?></td>
                <td><?= $world['name'] ?></td>
                <td style="text-align: center"><?= $world['type'] ?></td>
                <td style="text-align: center"><?= $world['ip'] ?></td>
                <td style="text-align: center"><?= $world['port'] ?></td>
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
