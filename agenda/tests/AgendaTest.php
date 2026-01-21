<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Agenda.php';

class AgendaTest extends TestCase
{
    public function testAñadirContacto()
    {
        $agenda = new Agenda();
        $contacto = new Contacto("Javi", "Etxebarria", "Goikoetxea", 688412573, "javietxe@gmail.com");

        $resultado = $agenda->añadirContacto($contacto);

        $this->assertEquals("El contacto se ha registrado correctamente", $resultado);
    }

    public function testBuscarContacto()
    {
        $agenda = new Agenda();
        $contacto = new Contacto("Nerea", "Bilbao", "Uriarte", 944556677, "nerea.bilbao@empresa.es");
        $agenda->añadirContacto($contacto);

        $encontrado = $agenda->buscarContacto(944556677);

        $this->assertEquals("Nerea", $encontrado->getNombre());
    }

    public function testEliminarContacto()
    {
        $agenda = new Agenda();
        $contacto = new Contacto("Gorka", "Arizmendi", "Sota", 655998877, "gorka92@yahoo.com");
        $agenda->añadirContacto($contacto);

        $resultado = $agenda->eliminarContacto(655998877);

        $this->assertEquals("El contacto se ha eliminado correctamente", $resultado);
    }

    public function testExportarAgenda()
    {
        $agenda = new Agenda();
        $contacto = new Contacto("Ainhoa", "Zabala", "Elorza", 688775544, "ainhoa.ze@outlook.es");
        $agenda->añadirContacto($contacto);

        $resultado = $agenda->exportarAgenda();

        $this->assertEquals("Agenda exportada correctamente", $resultado);
    }
}
