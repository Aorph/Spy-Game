  <?php
class Hero extends Spy
{
  private $score = 0;

  public function incrementScore() {
    $this->score += 1;
  }

  public function getScore() {
    return $this->score;
  }

  public function hide()
  {
    $d20 = rand(1, 20);
    if($d20 > 10) {
      return true;
    } else {
      return false;
      //$this->knockOut();
    }
  }
  public function knockOut()
  {
    $d202 = rand(1, 20);
    if($d202 > 10) {
      return true;
    } else {
      return false;
    }
  }
  public function search()
  {
    echo $this->getName() . " fouille ...<br>";
  }
}
