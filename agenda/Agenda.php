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



    public function listarContactos(): array {
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
    public function buscarContacto() {}

    public function eliminarContacto() {}

}
