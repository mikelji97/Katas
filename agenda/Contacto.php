<?php


class Contacto
{
    private string $nombre;
    private string $apellido1;
    private string $apellido2;
    private int $telefono;
    private string $email;

    public function __construct(string $nombre, string $apellido1, string $apellido2, int $telefono, string $email)
    {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido1()
    {
        return $this->apellido1;
    }
    public function getApellido2()
    {
        return $this->apellido2;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getEmail()
    {
        return $this->email;
    }



    
}
