<?php
class Box
{
  private $content;
  private $state = 'closed';
  private $id;

  function __construct($id)  {
    $rd3 = rand(0,1000);
    if ($rd3 <= 333) {
      $this->content = "Empty";
    } else if ($rd3 > 333 && $rd3 < 667) {
      $this->content = "Enemy Spy";
    } else if ($rd3 >= 667) {
      $this->content = "Secret Plan";
    }
    $this->id = $id;
  }

  private function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function getState() {
    return $this->state;
  }
  public function getContent() {
    return $this->content;
  }

  public function open() {
    $this->state = 'open';
    return $this->content;
  }
}
