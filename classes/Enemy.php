<?php
class Enemy extends Spy
{
  private $state = 'awake';

  public function reaction(){
    $d6 = rand(1,6);
    if ($d6 <= 2) {
      return true;
    } else {
      return false;
    }
  }
  public function sleep() {
    $this->state = 'asleep';
  }
}
