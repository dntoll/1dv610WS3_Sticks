<?php

class AI {

  private $sticksLeft;

  public function __construct($sticksLeft) {
    $this->sticksLeft = $sticksLeft;
  }

  public function sticksToRemove() {

    if ($this->sticksLeft == 4) {
      return 3;
    } else {
      return 1;
    }
  }
}

?>