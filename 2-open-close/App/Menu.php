<?php
namespace App;

/*
*    Se tomoa el ejemplo que se requiere modificar el comportamiento del metodo viewMenu
*    para poder obtener el menu en formato TEXTO y formato JSON
*
*   Todo a traves de una interfaz MenuOutput
*/


class Menu{
  public function viewMenu($products = [], MenuOutput $output){
    return $output -> output($products);
  }
}

