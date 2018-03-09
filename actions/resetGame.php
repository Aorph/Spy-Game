<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');
$save = new SessionHelper();
$hero = $save->getData('hero');
$save->deleteData($hero);
header('location: /actions/startGame.php');
