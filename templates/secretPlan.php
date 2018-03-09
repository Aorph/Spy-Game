<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');
$save = new SessionHelper();
$hero = $save->getData('hero');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Secret Plan</title>
    <link rel="stylesheet" href="/assets/css/base.css">
  </head>
  <body>
    <div class="container">
      <h1>You found a secret Plan !</h1>
      <div class="SecretPlan">

      </div>
    </div>
      <?php
        $hero->incrementScore();
        $save->saveData('hero', $hero);
        echo "<form action='./game.php' method=''><input class='button' type='submit' value='Back to boxes'></form>";
      ?>
  </body>
</html>
