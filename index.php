<?php //debugger
spl_autoload_register(function($class_name) {
  include($_SERVER['DOCUMENT_ROOT'] . "/classes/" . $class_name . ".php");
});
$routing = new Router();
echo $routing->routeAction($_SERVER['REQUEST_URI']);
