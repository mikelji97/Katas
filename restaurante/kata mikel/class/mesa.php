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



class Mesa{
    private string $nombre;
    private int $numSillas;
    private bool $reservada;

    public function  __construct(string $nombre, int $numSillas, bool $reservada){
        $this->nombre = $nombre;
        $this->numSillas = $numSillas;
        $this->reservada = $reservada;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
    public function getNumSillas(): string {
        return $this->numSillas;
    }

    public function esReservada(): bool {
        return $this->reservada;
    }

    public function reservar(): void {
        $this->reservada = true;
    }

}
    $mesa = [
        new Mesa("mesa1", 18, false),
        new Mesa("mesa2", 5, false),
        new Mesa("mesa3", 20, true),
        new Mesa("mesa4", 4, true)
    ];

    function hacerReserva($mesas, $nombreReserva, $numPersonas) {
        foreach ($mesas as $mesa) {
            if (!$mesa->esReservada() && $mesa->getNumSillas() >= $numPersonas) {
                $mesa->reservar();
                echo "Reserva realizada: {$mesa->getNombre()} para $nombreReserva<br>";
                return;
            }
        }
        echo "No hay mesas disponibles para $numPersonas personas.<br>";
    }

    function buscarMesasDisponibles($mesas){
        $mesasDisponibles = [];
        foreach ($mesas as $mesa){
            if(!$mesa->esReservada()){
                $mesasDisponibles[] = $mesa;
            }
        }
        return $mesasDisponibles;
    }

    function mostrarMesaDisponible($mesasDisponibles){
        if (empty($mesasDisponibles)){
            echo "No existe ninguna mesa disponible<br>";
        } else {
            foreach($mesasDisponibles as $mesa){
                echo "Mesa: {$mesa->getNombre()} - Sillas: {$mesa->getNumSillas()}<br>";
            }
        }
    }




