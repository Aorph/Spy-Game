<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');
$save = new SessionHelper();
$hero = $save->getData('hero');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enemy Attacks</title>
    <link rel="stylesheet" href="/assets/css/base.css">
  </head>
  <body>
    <div class="container">
      <h3>Enemy Spy Riposted but missed you !</h3>
      <div class="riposte">

      </div>
    </div>
    <form action="/templates/hide.php" method="POST">
      <input class="button" type="submit" value="hide">
      <input type="hidden" name="action" value="hide">
    </form>
    <form action="/actions/attack.php" method="POST">
      <input class="button" type="submit" value="attack">
      <input type="hidden" name="action" value="attack">
    </form>
  </body>
</html>
