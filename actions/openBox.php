<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');
$save = new SessionHelper();
$boxId = $_POST['id'];
$boxes = $save->getData('boxes');
$hero = $save->getData('hero');

foreach ($boxes as $box) {
  if ($boxId == $box->getId()) {
    $box->open();
    if ($box->getContent() == 'Empty') {
      header('location: ../templates/empty.php');
    } else if ($box->getContent() == 'Enemy Spy') {
      header('location: ../templates/encounter.php');
    } else if ($box->getContent() == 'Secret Plan') {
      header('location: ../templates/secretPlan.php');
    }
  }
}
