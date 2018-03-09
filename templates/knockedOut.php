<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');
$save = new SessionHelper();
$hero = $save->getData('hero');
$hero->incrementScore();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Knocked Out</title>
    <link rel="stylesheet" href="/assets/css/base.css">
  </head>
  <body>
    <div class="container">
      <h3>You sucessfully knocked out enemy spy</h3>
      <div class="knockOut">

      </div>
    </div>
    <form action='/templates/game.php' method=''>
      <input class="button" type='submit' value='Next'>
    </form>;
  </body>
</html>
