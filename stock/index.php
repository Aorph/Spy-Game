<?php
class Car
{
  public $brand;
  public $color;
  public $price;
  public $speed = 0;

  public function speedUp()
  {
    //rand(1,20);
    $this->speed += rand(10,110);
  }

  public function speedDown()
  {
    $randValue = rand(10,110);
    if (($this->speed - $randValue) >= 0) {
      $this->speed -= $randValue;
    } else {
      $this->speed = 0;
    }
  }
}

$car1 = new car();
$car1->brand = "Ford";
$car1->speedDown();

$car2 = new car();
$car2->color = "blue";

var_dump($car1);
var_dump($car2);die;
