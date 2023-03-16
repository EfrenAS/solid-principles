<?php

namespace App;

use App\Shape;

class Shape_O {

  protected $areas = [];

  // Precondicion: El tipo de dato que se pasara al metodo debe de coincidir con su tipo
  // Poscondicion: El tipo de valor de retorno del metodo debe de coincidir con su tipo

  public function insert(Shape $shape /* Precondicion */, $hole): bool  /* Poscondicion */ {
    return $shape->area() <= $this->areas[$hole];
  }
}