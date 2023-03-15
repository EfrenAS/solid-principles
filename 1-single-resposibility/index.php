<?php
include_once 'vendor/autoload.php';

/*
*   1.- Principio de Resposabiidad Unica
*
*   Una clase DEBE tener una, y SOLO una, razon para cambiar
*  
*   Cada clase debe de tener SOLO una responsabilidad
* 
*   La clase CoffeeShop esta destinada para todo lo relacionado con los productos
*   La clase Menu esta destinada para mostrar todos nuestros productos
*   La clase Cart se usa para la logica de nuestro carrito de compras
*/

use App\CoffeeShop;
use App\Menu;

$products = [
  ['id' => 1, 'name' => 'Negro', 'price' => 25 ],
  ['id' => 2, 'name' => 'Latte', 'price' => 35 ],
  ['id' => 3, 'name' => 'Capuchino', 'price' => 45 ],
];

$shop = new CoffeeShop();

$shop->addProducts($products);

$menu = new Menu();

echo $menu->viewMenu($shop->getProducts());
