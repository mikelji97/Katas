<?php
class Mesa
{
    private string $nombre;
    private int $numSillas;
    private bool $reservada;
    private string $reservadaPor;

    public function  __construct(string $nombre, int $numSillas, bool $reservada)
    {
        $this->nombre = $nombre;
        $this->numSillas = $numSillas;
        $this->reservada = false;
        $this->reservadaPor = "";
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getNumSillas(): int
    {
        return $this->numSillas;
    }
    public function getReservadaPor(): string
    {  
        return $this->reservadaPor;
    }

    public function estaReservada(): bool
    {
        return $this->reservada;
    }

    public function reservar(string $nombreCliente): void
    {
        $this->reservada = true;
        $this->reservadaPor = $nombreCliente;
    }
}
