<?php

/* Se trata de realizar una función que, dado un string,
nos devuelva la cantidad de veces que se repite cada vocal.*/
function contarVocales($texto)
{
    $vocales = ['a', 'e', 'i', 'o', 'u'];
    $resultado = [];

    foreach ($vocales as $vocal) {
        $contador = 0;

        for ($i = 0; $i < strlen($texto); $i++) {
            if (strtolower($texto[$i]) == $vocal) {
                $contador++;
            }
        }
        if ($contador == 0) {
            echo "Vocal:" . $vocal . " No parece\n";
        } else if ($contador == 1) {
            echo "Vocal:" . $vocal . " Aparece " . $contador . " vez.\n";
        } else {
            echo "Vocal:" . $vocal . " Aparece " . $contador . " veces.\n";
        }
    }
}

print_r(contarVocales("Hola Mundo"));
