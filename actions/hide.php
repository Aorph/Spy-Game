<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');
$save = new SessionHelper();
$enemy = $save->getData('enemy');
$hero = $save->getData('hero');
echo "You tried to hide from Spy " . $enemy->getName() . "<br>";
if ($hero->hide() == TRUE) {
  header('location: /templates/hidden.php');
} else {
  $enemy->reaction();
  if (!$enemy->reaction() == TRUE) {
    header('location: /templates/enemyFindttack.php');
  } else {
    header('location: /templates/gameOver.php');
  }
}
