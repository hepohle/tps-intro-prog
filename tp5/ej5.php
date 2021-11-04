<?php

function esMultiplo($num1, $num2){
    if ($num1 % $num2 == 0){
        $multiplo = true;
    } else {
        $multiplo = false;
    }
    return $multiplo;
}

echo "Ingrese un número: ";
$numero1 = trim(fgets(STDIN));
echo "Ingrese otro número: ";
$numero2 = trim(fgets(STDIN));

$respuesta = esMultiplo($numero1, $numero2)? "Es multiplo": "No es multiplo.";
echo $respuesta;