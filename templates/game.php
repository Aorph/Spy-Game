<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');
include("../index.php");
$save = new SessionHelper();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon Jeu</title>
  </head>
  <body>
    <?php
      $boxes = $save->getData('boxes');
      $hero = $save->getData('hero');
      $c = 0;
      echo "<h3>Your score is " . $hero->getScore() . "</h3>";
      foreach ($boxes as $box) {
        if ($box->getState() == 'open') {
          $c += 1;
          echo "<p>Already open</p><br>";
        } else {
        echo "<form method='POST' action='../actions/openBox.php'><input type='hidden' name='id' value='" . $box->getId() . "'><input class='boxes' type='submit' value=''></form>";
        }
      }
      if ($c == count($boxes)) {
        header('location: /win.php');
      }
      $save->saveData('hero', $hero);
    ?>
  </body>
</html>
