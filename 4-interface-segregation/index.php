<?php
include_once 'vendor/autoload.php';

/*
*   3.- Principio de Segregacion de Intercaes (ISP)
*
*   Ningun cliente debe de ser forzado a depender de metodos que no usa
*   
*   Ejemplo para aplicar este principio
*   
*   Se tiene una clase estanque donde cualquier objeto o cosa puede jugar en el (Clase Pato)
*
*   Con este principio la clase padre no deonde de las clases hijo, solo de las interfaces
*
*/

use App\Pond;
use App\Duck;
use App\Frog;
use App\WoodenDuck;

$pond = new Pond();

$pond->sendToPlay(new Duck());
$pond->sendToPlay(new WoodenDuck());
$pond->sendToPlay(new Frog());
