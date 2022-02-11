<?php
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Character Trade';

if(ACTION == 'charactertrade') {
	require PAGES . 'charactertrade/' . ACTION . '.php';
	return;
}
?>


