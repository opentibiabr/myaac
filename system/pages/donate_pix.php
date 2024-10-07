<?php
global $config, $twig, $logged;

/**
 * @name      myaac-polopag-pix
 * @author    Rokam
 * @author    Luan Luciano
 * @version   1.0
 */
 
defined('MYAAC') or die('Direct access not allowed!');
$title = 'Donate Pix';

$twig->addGlobal('config', $config);

if (!$logged) {
    $was_before = $config['friendly_urls'];
    $config['friendly_urls'] = true;
    echo 'To buy coins you need to be logged. ' . generateLink(getLink('?subtopic=accountmanagement') . '&redirect=' . urlencode(BASE_URL . '?donate_pix'), 'Login') . ' first to make a donate.';
    $config['friendly_urls'] = $was_before;
} else {
    echo $twig->display('donate.pix_generator.html.twig', array(
        "accName" => $account_logged->getName(),
    ));
}
