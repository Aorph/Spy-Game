<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/autoloader.php');
$save = new SessionHelper();
$hero = $save->getData('hero');
if (!$save->checkData('enemy')) {
  $enemy = new Enemy('Warrior', 0, 0);
  $save->saveData('enemy', $enemy);
}
$enemy = $save->getData('enemy');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Encounter</title>
    <link rel="stylesheet" href="/assets/css/base.css">
  </head>
  <body>
    <div class="container">
      <?php echo "<h1>Enemy Spy " . $enemy->getName() . " was hidden in the box</h1>"; ?>
      <div class="enemy">
      </div>
    </div>
        <form action="/actions/hide.php" method="POST">
          <input class="button" type="submit" value="hide">
          <input type="hidden" name="action" value="hide">
        </form>
        <form action="/templates/attack.php" method="POST">
          <input class="button" type="submit" value="attack">
          <input type="hidden" name="action" value="attack">
        </form>
  </body>
</html>
