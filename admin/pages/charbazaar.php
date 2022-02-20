<?php
/**
 * Dashboard
 *
 * @package   MyAAC
 * @author    Slawkens <slawkens@gmail.com>
 * @copyright 2019 MyAAC
 * @link      https://my-aac.org
 */
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Char Bazaar';




?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>














<div class="row">

	<div class="col-md-2 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-aqua"><i class="ion ion-person"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Total Auctions:</span>
				<span class="info-box-number">17</span>
			</div>
		</div>
	</div>
	<div class="col-md-2 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-green"><i class="ion ion-pie-graph"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Balance:</span>
				<span class="info-box-number">12,000</span>
			</div>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Auctions Active</h3>
			</div>
			<div class="box-body">
				<table class="table table-striped">
				  <thead>
					<tr>
					  <th scope="col">Name</th>
					  <th scope="col">Auction Start</th>
					  <th scope="col">Auction End</th>
					  <th scope="col">Current Bid</th>
					</tr>
				  </thead>
				  <tbody>
<?php
	$date_today = date('d-m-Y');
	$get_auctions = $db->query('SELECT `id`, `player_id`, `price`, `date_end`, `date_start`, `bid_account`, `bid_price`' . 'FROM `myaac_charbazaar`' . 'WHERE `date_end` = ' . $date_today .'');
	/*$get_auctions = $get_auctions->fetch();*/

	foreach($get_auctions as $auctions){

	$get_character = $db->query('SELECT `id`, `name`, `level`' . 'FROM `myaac_charbazaar`' . 'WHERE `date_end` < ' . $$auctions['player_id'] .'');
	$get_character = $get_character->fetch();
?>
					<tr>
					  <th scope="row"><?php echo $auctions['id'] ?></th>
					  <td><?php echo $auctions['player_id'] ?></td>
					  <td><?php echo $auctions['price'] ?></td>
					  <td><?php echo $auctions['date_start'] ?></td>
					</tr>
<?php } ?>
					<tr>
					  <th scope="row">Test Zero</th>
					  <td>20 Feb 2022</td>
					  <td>20 Feb 2022</td>
					  <td>2,000</td>
					</tr>
					<tr>
					  <th scope="row">Test Um</th>
					  <td>20 Feb 2022</td>
					  <td>20 Feb 2022</td>
					  <td>2,268</td>
					</tr>
				  </tbody>
				</table>
			</div>
			<div class="box-footer">
			<form method="post" action="">
				<input type="submit" class="btn btn-success" value="Finish Auctions">
				</form>
			</div>
		</div>
	</div>
</div>