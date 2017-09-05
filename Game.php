<?php

require_once("Sticks.php");
require_once("AI.php");
require_once("Player.php");

class Game {

  private $sticks;
  private $player;
  private $AI;
  private $winner;
  private $result;

  public function __construct($sticksLeft) {

    $this->sticks = new Sticks($sticksLeft);
    $this->player = new Player($sticksToRemove);
    $this->AI = new AI($sticksLeft);
  }

  public function playerRemoveSticks($amount) {

    $this->sticks->removeSticks($amount);

    if ($this->sticks->getSticksLeft() == 1) {
      $this->winner = "Player"
    }
  }

  public function AIRemoveSticks() {

    $this->sticks->removeSticks($this->AI->sticksToRemove());
    if ($this->sticks->getSticksLeft() == 1) {
      $this->winner = "AI"
    }
  }

  public function sticksLeft() {
    return $this->sticks->getSticksLeft();
  }

  public function gameResult() {
    if ($this->sticks->getSticksLeft() <= 0) {
      return $winner
    }
  }
}

?>
