<?php

require_once 'Mesa.php';
require_once 'Cliente.php';

class Restaurante {
    private array $mesas;

    public function __construct(array $mesas) {
        $this->mesas = $mesas;
    }

    public function hacerReserva(Cliente $cliente): void {
        foreach ($this->mesas as $mesa) {
            if (!$mesa->estaReservada() && $cliente->getNumPersonas() <= $mesa->getNumSillas()) {
                $mesa->reservar($cliente->getNombre());
                echo "Reserva realizada: {$mesa->getNombre()} para {$cliente->getNombre()}<br>";
                return;
            }
        }
        echo "No hay mesas disponibles para {$cliente->getNumPersonas()} personas<br>";
    }

    public function llegadaCliente(Cliente $cliente): void {
        foreach ($this->mesas as $mesa) {
            if ($mesa->estaReservada() && $mesa->getReservadaPor() === $cliente->getNombre()) {
                echo "Bienvenido/a {$cliente->getNombre()}! Tu mesa es la {$mesa->getNombre()}<br>";
                return;
            }
        }
        echo "No se encontró reserva para {$cliente->getNombre()}<br>";
    }

    public function buscarMesasDisponibles(): array {
        $mesasDisponibles = [];
        foreach ($this->mesas as $mesa) {
            if (!$mesa->estaReservada()) {
                $mesasDisponibles[] = $mesa;
            }
        }
        return $mesasDisponibles;
    }

    public function mostrarMesasDisponibles(array $mesasDisponibles): void {
        if (empty($mesasDisponibles)) {
            echo "No hay mesas disponibles<br>";
        } else {
            foreach ($mesasDisponibles as $mesa) {
                echo "Mesa: {$mesa->getNombre()} - Sillas: {$mesa->getNumSillas()}<br>";
            }
        }
    }
}