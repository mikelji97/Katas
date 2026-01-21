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
    new Mesa("mesa1", 18),
    new Mesa("mesa2", 5),
    new Mesa("mesa3", 20),
    new Mesa("mesa4", 4)
];

$restaurante = new Restaurante($mesas);

$mesasDisponibles = $restaurante->buscarMesasDisponibles();
$restaurante->mostrarMesasDisponibles($mesasDisponibles);

echo "<br>";

// Crear clientes con nombre y número de personas
$cliente1 = new Cliente("Juan Pérez", 6);
$cliente2 = new Cliente("María García", 3);
$cliente3 = new Cliente("Carlos López", 25);

// Hacer reservas (Kata 1)
$restaurante->hacerReserva($cliente1);
$restaurante->hacerReserva($cliente2);
$restaurante->hacerReserva($cliente3);

echo "<br>";

// Simular llegada de clientes (Kata 2)
$restaurante->llegadaCliente($cliente1);
$restaurante->llegadaCliente($cliente2);
$restaurante->llegadaCliente(new Cliente("Pedro Sin Reserva", 2));