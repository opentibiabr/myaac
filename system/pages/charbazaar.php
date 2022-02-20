<?php
/**
 *
 * Char Bazaar
 *
 */
defined('MYAAC') or die('Direct access not allowed!');

if(isset($_GET['createcharacterauction']))
{
	$title = 'Create Character Auction';
}
//show create character auction
if(empty($action)) {
	require PAGES . 'charactertrade/createcharacterauction.php';
}else{
	if(!ctype_alnum(str_replace(array('-', '_'), '', $action))) {
		error('Error: Action contains illegal characters.');
	}
	else if(file_exists(PAGES . 'charactertrade/' . $action . '.php')) {
		require PAGES . 'charactertrade/' . $action . '.php';
	}
	else {
		error('This page does not exists.');
	}
}
?>
