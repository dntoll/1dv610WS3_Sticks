<?php

class Sticks {

  private $sticks;

  public function __construct($sticksLeft) {
    $this->sticks = $sticksLeft;
  }

  public function removeSticks($amount) {
    $this->sticks -= $amount;
  }

  public function getSticksLeft() {
    return $this->sticks;
  }
}

?>
