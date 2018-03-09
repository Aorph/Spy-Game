<?php
class SessionHelper
{
  public function checkData($key) {
    if (!isset($_SESSION)) {
      session_start();
    }
    return array_key_exists($key, $_SESSION);
  }

  public function saveData($key, $value) {
    if (!isset($_SESSION)) {
      session_start();
    }
    $_SESSION[$key] = $value;
  }
  public function getData($key) {
    if (!isset($_SESSION)) {
      session_start();
    }
    return $_SESSION[$key];
  }
  public function deleteData($key) {
    if (!isset($_SESSION)) {
      session_start();
    }
    unset($_SESSION[$key]);
  }
}
