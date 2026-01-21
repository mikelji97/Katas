<?php

/*Un bar de copas tiene mesas para los clientes:
Cada mesa tiene:

Un número identificador

Número de sillas

Un indicador de si ya está reservada o no

Imagínate que eres un/a cliente/a que quiere hacer una reserva en este bar. Para hacerlo, tendremos que indicar:

Nombre de la reserva

Cantidad de personas

Crea un programa que represente toda esta información y las lógicas propuestas.

*/

require_once 'class/restaurante.php';

$mesas = [
    new Mesa("mesa1", 18, false),
    new Mesa("mesa2", 5, false),
    new Mesa("mesa3", 20, true),
    new Mesa("mesa4", 4, true)
];

$restaurante = new Restaurante($mesas);

$mesasDisponibles = $restaurante->buscarMesasDisponibles();
$restaurante->mostrarMesaDisponible($mesasDisponibles);

echo "\n";

$restaurante->hacerReserva("Juan Pérez", 6);
$restaurante->hacerReserva("María García", 3);
$restaurante->hacerReserva("Carlos López", 25);