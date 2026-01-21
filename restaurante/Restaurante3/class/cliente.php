<?php

class Cliente {
    private string $nombre;
    private int $numPersonas;

    public function __construct(string $nombre, int $numPersonas) {
        $this->nombre = $nombre;
        $this->numPersonas = $numPersonas;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getNumPersonas(): int {
        return $this->numPersonas;
    }
}