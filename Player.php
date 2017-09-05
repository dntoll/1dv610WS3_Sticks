<?php

class Player {

  private $sticksToRemove;

  public function __construct($sticksLeft) {
    $this->sticks = $sticksLeft;
  }

  public function removeSticks($amount) {
    $this->sticks -= $amount;
  }
}

?>
