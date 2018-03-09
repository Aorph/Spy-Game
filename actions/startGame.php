<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');

$Robert = new Hero('Robert', 0.35, 0.65);
$boxes =[];
for ($i=1; $i <= 25; $i++) {
  array_push($boxes, new Box($i));
}
$save = new SessionHelper();
$save->saveData('hero', $Robert);
$save->saveData('boxes', $boxes);
header('location: /templates/game.php');
