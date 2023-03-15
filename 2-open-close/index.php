<?php
include_once 'vendor/autoload.php';

/*
*   2.- Principio de Abierto / Cerrado
*
*   Las entidades DEBEN de estar abiertas a extension, PERO cerradas a modificacion
*  
*   Entidades puede referirse a clases, metodos o funciones
*   
*   La manera de poder manejar esto es:
*   
*   Separar el comportamiento extensible detras de una interfaz y voltear las dependencias
*   
*/

use App\CoffeeShop;
use App\JsonOutput;
use App\Menu;
use App\TextMenuOutput;

$products = [
  ['id' => 1, 'name' => 'Negro', 'price' => 25 ],
  ['id' => 2, 'name' => 'Latte', 'price' => 35 ],
  ['id' => 3, 'name' => 'Capuchino', 'price' => 45 ],
];

$shop = new CoffeeShop();

$shop->addProducts($products);

$menu = new Menu();

echo $menu->viewMenu($shop->getProducts(), new TextMenuOutput());
