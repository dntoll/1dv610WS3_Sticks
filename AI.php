<?php

class AI {

  private $sticksLeft;

  public function __construct($sticksLeft) {
    $this->sticksLeft = $sticksLeft;
  }

  public function sticksToRemove() {

    /*switch($this->sticksLeft) {
      case 7:
        echo "från case 7";
        return 2;
        break;
      case 4:
      echo "från case 4";
        return 3;
        break;
      case 3:
      echo "från case 3";
        return 2;
        break;
      case 2:
      echo "från case 2";
        return 1;
        break;
      default:
      echo "från default";
        return 1;
    }*/

    if ($this->sticksLeft == 4) {
      return 3;
    } else {
      return 1;
    }
  }
}

?>