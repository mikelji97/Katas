<?php

class mesa{
    private int $nombre;
    private int $numSillas;
    private bool $reservada;

    public function  __construct(int $nombre, int $numSillas, bool $reservada){
        $this->nombre = $nombre;
        $this->numSillas = $numSillas;
        $this->reservada = $reservada;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
    public function getNumSillas(): string {
        return $this->nombre;
    }

    public function esReservada(): bool {
        return $this->reservada;
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
        if (!$mesa->estaReservada() && $mesa->getNumPersonas() >= $numPersonas) {
            $mesa->reservar();
            echo "Reserva: {$mesa}";
        } else{
        echo "No hay mesas disponibles para $numPersonas personas.<br>";
        }  
    }
}

    function buscarMesasDisponibles($mesas){
        $mesasDisponibles = [];
        foreach ($mesas as $mesa){
            if(!$mesa->esReservada()){
                $mesasDisponibles [] = $mesa; 
            }
        }
    function mostrarMesaDisponible($mesas){
        if (empty($mesasDisponibles)){
            echo "No existe ninguna mesa disponible":
        }else{
            foreach($mesasDisponibles as $disponibles){
                echo $disponibles;
            }

        }








/*
        una clase mesa, clase index, 

        corregir fallos examen, como la clase no poner Peliculas, ya que no instancias Peliculas si no Pelicula de uno en uno.
        */