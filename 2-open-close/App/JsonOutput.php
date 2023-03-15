<?php

namespace App;

class JsonOutput implements MenuOutput {
  public function output($products = [])
  {
    return json_encode($products);
  }
}