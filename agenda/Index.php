<?php

require_once 'Contacto.php';
require_once 'Agenda.php';

$persona1 = new Contacto("Mikel", "Jimenez","Álvarez",616397225,"mikel.falcesino@gmail.com"); 
$persona2 = new Contacto("Laura", "Del Rio","Manzano",645887441,"laura.delrio@gmail.com"); 

$agenda = new Agenda();

$agenda->añadirContacto($persona1);
$agenda->añadirContacto($persona2);

echo $agenda->exportarAgenda();