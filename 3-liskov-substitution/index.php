<?php
include_once 'vendor/autoload.php';

/*
*   3.- Principio de Substitucion de Liskov (LSP)
*
*   Si S es un subtipo de T, entonces los objetos de tipo T
*   pueden ser substituidos por objetos de tipo S   
*
*   Ejemplo para aplicar este principio
*
*   El objetivo del juguete es insertar figuras geometricas en los orificios que contiene a los lados.
*   Al tratar de insertar una figura en un orificio tenemos dos posibles resultados:
*
*   1. Entro : verdarero
*   2. No entro: Falso
*   
*   Para saber si una figura entro en el orificio, requerimos saber dos cosas:
*
*   1. El area de la figura que queremos insertar
*   2. El area del orificio donde queremos insertar la figura
*
*/

