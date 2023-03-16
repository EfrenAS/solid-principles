<?php

namespace App;

class Pond {
  public function sendToPlay(CanPlay $player) {
    $player->play();
  }
}
