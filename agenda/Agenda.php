<?php
/*Se trata de crear una agenda de contactos.

Cada contacto tiene un nombre, apellidos, un nº de teléfono y una dirección de correo electrónico.

Debemos poder:

Añadir, eliminar buscar y listar contactos en la agenda.
Exportar información de la agenda en un archivo.*/
require_once 'Contacto.php';

class Agenda
{

    private array $contactos = [];



    public function listarContactos(): array
    {
        return $this->contactos;
    }

    public function añadirContacto(Contacto $nuevoContacto)
    {

        foreach ($this->contactos as $contacto) {
            if ($contacto->getTelefono() == $nuevoContacto->getTelefono()) {
                return "El contacto ya existe en la agenda";
            }
        }
        $this->contactos[] = $nuevoContacto;
        return "El contacto se ha registrado correctamente";
    }
    public function buscarContacto(int $telefono): ?Contacto
    {
        foreach ($this->contactos as $contacto) {
            if ($contacto->getTelefono() == $telefono) {
                return $contacto;
            }
        }
        return null;
    }
    public function eliminarContacto(int $telefono): string
    {
        foreach ($this->contactos as $indice => $contacto) {
            if ($contacto->getTelefono() == $telefono) {
                unset($this->contactos[$indice]);
                return "El contacto se ha eliminado correctamente";
            }
        }
        return "No se encontró ningún contacto con ese teléfono";
    }
    public function exportarAgenda(): string
    {
        $ruta = __DIR__ . "/agenda_export.json";  

        $lista = [];

        foreach ($this->contactos as $contacto) {
            $lista[] = [
                'nombre' => $contacto->getNombre(),
                'apellido1' => $contacto->getApellido1(),
                'apellido2' => $contacto->getApellido2(),
                'telefono' => $contacto->getTelefono(),
                'email' => $contacto->getEmail()
            ];
        }

        $json = json_encode($lista, JSON_PRETTY_PRINT);

        if (file_put_contents($ruta, $json) !== false) {
            return "Agenda exportada correctamente";
        }

        return "No se ha podido exportar la agenda";
    }
}
