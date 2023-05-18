<?php
/**
 * Change main character
 *
 * @package   MyAAC
 * @author    Elson <elsongabriel@hotmail.com>
 */
defined('MYAAC') or die('Direct access not allowed!');

/** @var OTS_Players_List $account_players */
$account_players = $account_logged->getPlayersList();
$account_players->orderBy('id');
$main_changed = false;
$player_id = isset($_POST['player_id']) ? (int)$_POST['player_id'] : NULL;
if (isset($_POST['changemainsave']) && $_POST['changemainsave'] == 1) {

    if (!$db->hasColumn('players', 'ismain')) {
        $errors[] = "You can't set main character.";
    }

    if (empty($errors)) {
        $player = new OTS_Player();
        $player->load($player_id);
        if ($player->isLoaded()) {
            $player_account = $player->getAccount();
            if ($account_logged->getId() == $player_account->getId()) {
                if (empty($errors)) {
                    $db->query("update `players` set `ismain` = 0 where `account_id` = " . $player_account->getId());
                    $db->query("update `players` set `ismain` = 1 where `id` = " . $player_id);
                    $main_changed = true;
                    $account_logged->logAction($desc = "Changed main character to <b>{$player->getName()}</b>.");
                    $twig->display('success.html.twig', array(
                        'title' => 'Main Character Changed',
                        'description' => $desc
                    ));
                }
            } else {
                $errors[] = 'Character <b>' . $player->getName() . '</b> is not on your account.';
            }
        } else {
            $errors[] = "Character with this name doesn't exist.";
        }
    }
}

if (!$main_changed) {
    if (!empty($errors)) {
        $twig->display('error_box.html.twig', array('errors' => $errors));
    }
    $twig->display('account.change_main.html.twig', array(
        'players' => $account_players
    ));
}
