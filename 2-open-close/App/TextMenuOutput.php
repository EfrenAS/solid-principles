<?php
namespace App;

class TextMenuOutput implements MenuOutput {
  public function output($products = []) {
    echo '<pre>'; 
    var_dump($products);
    echo '<pre>';   
  }
}