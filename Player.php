<?php

class Player {

  private $sticks;
  private $sticksToRemove;

  public function __construct($sticksLeft) {
    $this->sticks = $sticksLeft;
  }

  public function removeSticks($amount) {
    $this->sticks -= $amount;
  }
}

?>
