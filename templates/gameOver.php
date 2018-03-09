<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');
$save = new SessionHelper();
$hero = $save->getData('hero');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Game Over</title>
    <link rel="stylesheet" href="/assets/css/base.css">
  </head>
  <body>
    <div class="container">
      <h3>Enemy spy found you and killed you</h3>
      <div class="dead">
      </div>
    </div>
    <?php
    echo "<h1>Game Over</h1>";
    echo "<h3>Your score was " . $hero->getScore() . "</h3>";
    echo "<form action='../actions/startGame.php' method=''><input class='button' type='submit' value='Restart'></form>";
    ?>
  </body>
</html>
