<?php
class Router
{

  function __construct() {}
  public function routeAction() {
    $htmlRender = $htmlRender = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/templates/layouts/head.html');
    $htmlRender .= file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/templates/start.html');
    $htmlRender .= file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/templates/layouts/footer.html');
    return $htmlRender;
  }
}
