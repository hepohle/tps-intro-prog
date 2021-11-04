<?php

/**
 * Calcula la cantidad de agua destilada a partir de la cantidad de los componentes.
 * @param int $lora
 * @param int $beta
 * @return float $porcentaje
 */
function calcAguaDestilada($lora, $beta){
    $lora = $lora / 10;
    $beta = $beta * 0.15;
    $porcentaje = $lora + $beta;
    return $porcentaje;
}

echo "Ingrese la cantidad de Loratadina: ";
$loratadina = trim(fgets(STDIN));
echo "Ingrese la cantidad de Betametasona: ";
$betametasona = trim(fgets(STDIN));

$aguaDestilada = calcAguaDestilada($loratadina, $betametasona);

echo "La cantidad de agua destilada es: ". $aguaDestilada . "\n" ;