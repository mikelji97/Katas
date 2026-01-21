<?php

require_once 'Mesa.php';

class Restaurante {
    private array $mesas;

    public function __construct($mesas) {
        $this->mesas = $mesas;
    }

    public function hacerReserva(string $nombreReserva, int $numPersonas): void {
        foreach ($this->mesas as $mesa) {
            if (!$mesa->esReservada() && $mesa->getNumSillas() >= $numPersonas) {
                $mesa->reservar();
                echo "Reserva realizada: {$mesa->getNombre()} para $nombreReserva\n";
                return;
            }
        }
        echo "No hay mesas disponibles para $numPersonas personas.\n";
    }

    public function buscarMesasDisponibles(): array {
        $mesasDisponibles = [];
        foreach ($this->mesas as $mesa) {
            if (!$mesa->esReservada()) {
                $mesasDisponibles[] = $mesa;
            }
        }
        return $mesasDisponibles;
    }

    public function mostrarMesaDisponible(array $mesasDisponibles): void {
        if (empty($mesasDisponibles)) {
            echo "No existe ninguna mesa disponible\n";
        } else {
            foreach ($mesasDisponibles as $mesa) {
                echo "Mesa: {$mesa->getNombre()} - Sillas: {$mesa->getNumSillas()}\n";
            }
        }
    }
}

