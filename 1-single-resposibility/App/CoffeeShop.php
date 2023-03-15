<?php

namespace App;

class CoffeeShop {

  private $products = [];

  public function addProducts($product = []){
    $this->products = $product;
  }

  public function getProducts() {
    return $this->products;
  }

  public function removeProduct(int $id){
    // Logica para borrar el producto
  }
}
