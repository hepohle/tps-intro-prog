<?php

/**
 * Recibe el numero de un dado y devuelve el valor de la cara opuesta.
 * @param int $numDado
 * @return int
 */
function caraOpuesta($numDado){
    $caraOpuesta = 7 - $numDado;
    return $caraOpuesta;
}

echo "Introduzca número del dado: ";
$caraDado = trim(fgets(STDIN));

if ($caraDado > 0 && $caraDado < 7){
    $resultado = "En la cara opuesta está el: " . caraOpuesta($caraDado);
}else
    $resultado = "Error: Número incorrecto";

echo $resultado;
