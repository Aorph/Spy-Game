<?php
class Spy
{
  private $name;
  private $discretion;
  private $strength;
  private $helper;

  function __construct($name, $strength, $discretion)
  {
    $this->helper = new TypeHelper();
    $this->setName($name);
    $this->setStrength($strength);
    $this->setDiscretion($discretion);
  }

  private function setName($name) {
    $this->name = $name;
  }
  private function setDiscretion($discretion) {
    $this->discretion = $discretion;
  }
  private function setStrength($strength) {
    $this->strength = $strength;
  }

  public function getName() {
    return $this->name;
  }
  public function getDiscretion() {
    return $this->discretion;
  }
  public function getStrength() {
    return $this->strength;
  }
}
