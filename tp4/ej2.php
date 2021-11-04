<?php
/** 
* Calcula si un número es múltiplo de 2 y devuelve true o false.
* @param  int $num
* @return boolean $esMultiplo
*/
function esMultiploDe2($num){
    $num % 2 == 0? $esMultiplo = true : $esMultiplo = false;
    return $esMultiplo;
}

echo "Ingrese un número: ";
$num1 = trim(fgets(STDIN));

esMultiploDe2($num1) == false? $esMultiplo = "No es par" : $esMultiplo = "Es par";
echo "El número: ".$num1. " ". $esMultiplo."\n";