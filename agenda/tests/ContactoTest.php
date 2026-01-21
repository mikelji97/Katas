<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Contacto.php';

class ContactoTest extends TestCase
{
    public function testObtenerNombre()
    {
        $contacto = new Contacto("Laura", "García", "Pérez", 654123789, "laura.gp@hotmail.com");

        $this->assertEquals("Laura", $contacto->getNombre());
    }

    public function testObtenerPrimerApellido()
    {
        $contacto = new Contacto("Pedro", "Martínez", "López", 612345678, "pedroml@yahoo.es");

        $this->assertEquals("Martínez", $contacto->getApellido1());
    }

    public function testObtenerSegundoApellido()
    {
        $contacto = new Contacto("Ana", "Ruiz", "Fernández", 699887766, "ana_ruiz92@gmail.com");

        $this->assertEquals("Fernández", $contacto->getApellido2());
    }

    public function testObtenerTelefono()
    {
        $contacto = new Contacto("Carlos", "Sánchez", "Díaz", 677554433, "carlos.sd@outlook.com");

        $this->assertEquals(677554433, $contacto->getTelefono());
    }

    public function testObtenerEmail()
    {
        $contacto = new Contacto("María", "López", "Torres", 622113344, "maria.torres@empresa.com");

        $this->assertEquals("maria.torres@empresa.com", $contacto->getEmail());
    }
}
