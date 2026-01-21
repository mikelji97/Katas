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
            if ($mesa->esReservada() && $mesa->getReservadaPor() === $cliente->getNombre()) {
                echo "{$cliente->getNombre()} ya tiene una reserva en {$mesa->getNombre()}<br>";
                return;
            }
        }

        $mejorMesa = null;

        foreach ($this->mesas as $mesa) {
            if (!$mesa->esReservada() && $cliente->getNumPersonas() <= $mesa->getNumSillas()) {
                if ($mejorMesa === null || $mesa->getNumSillas() < $mejorMesa->getNumSillas()) {
                    $mejorMesa = $mesa;
                }
            }
        }

        if ($mejorMesa !== null) {
            $mejorMesa->reservar($cliente->getNombre());
            echo "Reserva realizada: {$mejorMesa->getNombre()} para {$cliente->getNombre()}<br>";
        } else {
            echo "No hay mesas disponibles para {$cliente->getNumPersonas()} personas<br>";
        }
    }

    public function llegadaCliente(Cliente $cliente): void {
        foreach ($this->mesas as $mesa) {
            if ($mesa->esReservada() && $mesa->getReservadaPor() === $cliente->getNombre()) {
                echo "Bienvenido/a {$cliente->getNombre()}! Tu mesa es la {$mesa->getNombre()}<br>";
                return;
            }
        }
        echo "No se encontró reserva para {$cliente->getNombre()}<br>";
    }

    public function cancelarReserva(Cliente $cliente): void {
        foreach ($this->mesas as $mesa) {
            if ($mesa->esReservada() && $mesa->getReservadaPor() === $cliente->getNombre()) {
                $mesa->liberar();
                echo "Reserva cancelada: {$mesa->getNombre()} de {$cliente->getNombre()}<br>";
                return;
            }
        }
        echo "No se encontró reserva para {$cliente->getNombre()}<br>";
    }

    public function mostrarEstadoRestaurante(): void {
        foreach ($this->mesas as $mesa) {
            $estado = $mesa->esReservada() 
                ? "Reservada por {$mesa->getReservadaPor()}" 
                : "Libre";
            echo "{$mesa->getNombre()} ({$mesa->getNumSillas()} sillas) - {$estado}<br>";
        }
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