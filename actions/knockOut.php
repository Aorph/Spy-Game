<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');
$save = new SessionHelper();
$enemy = $save->getData('enemy');
$hero = $save->getData('hero');
$KOresult = $hero->knockOut();
if ($hero->knockOut() != TRUE) {
  if (!$enemy->reaction() == TRUE) {
    header('location: ../templates/enemyAttack.php');
  } else {
    header('location: ../templates/gameOver.php');
  }
} else {
  header('location: ../templates/knockedOut.php');
}
