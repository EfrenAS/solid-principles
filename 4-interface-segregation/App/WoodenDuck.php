<?php
namespace App;

class WoodenDuck implements CanFloat,CanPlay {
  public function float()
  {
    echo "The wooden duck is floating \n";
  }

  public function play()
  {
    $this->float();
  }
}