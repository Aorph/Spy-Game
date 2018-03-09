<?php
class TypeHelper
{
  public function checkType($type, $value)
  {
    if (gettype($value) != $type) {
      throw new Exception($value . " is not a " . $type);
    } else {
      return true;
    }
  }
}
