<?php

class AI {

  private $sticksLeft;

  public function __construct($sticksLeft) {
    $this->sticksLeft = $sticksLeft;
  }

  public function sticksToRemove() {

    if ($this->sticksLeft >= 2) {
      if ($this->sticksLeft - 1 <= 1) {
        return 1;
      }
    }
  }
}

?>
