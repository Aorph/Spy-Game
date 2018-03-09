<?php
include($_SERVER['DOCUMENT_ROOT'] . '/autoloader.php');
$save = new SessionHelper();
$hero = $save->getData('hero');
echo "<h1>You Won</h1>";
echo "Your score is " . $hero->getScore();
echo "<form action='./actions/startGame.php' method=''><input type='submit' value='Restart'></form>";
