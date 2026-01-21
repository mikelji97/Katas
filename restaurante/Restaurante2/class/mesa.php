<?php
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
    public function getNumSillas(): int {
        return $this->numSillas;
    }

    public function esReservada(): bool {
        return $this->reservada;
    }

    public function reservar(): void {
        $this->reservada = true;
    }

}



