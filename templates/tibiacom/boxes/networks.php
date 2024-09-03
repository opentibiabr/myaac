<?php

$twig->display('networks.html.twig', [
  'topPlayers' => getTopPlayers(5),
]);
