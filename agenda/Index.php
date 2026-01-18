<?php

require_once 'Contacto.php';
require_once 'Agenda.php';

$persona1 = new Contacto("Mikel", "Jimenez","Álvarez",616397225,"mikel.falcesino@gmail.com"); 

$agenda = new Agenda();

$agenda->añadirContacto($persona1);

var_dump($agenda);