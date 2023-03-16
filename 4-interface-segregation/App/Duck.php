<?php
namespace App;

class Duck implements CanFloat, CanQuack, CanPlay {

  public function float() {
    echo "The Duck is floating\n";
  }

  public function quack() {
    echo "The Duck is quacking\n";
  }

  public function play()
  {
    $this->float();
    $this->quack();
  }
}
