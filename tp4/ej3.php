<?php

function calculo($num1, $num2){
    $resultado = (pow($num1, $num2)) + sqrt(abs($num1));
    return $resultado;
}

echo "Ingrese un número: ";
$numM = trim(fgets(STDIN));
echo "Ingrese otro númmero: ";
$numN = trim(fgets(STDIN));

echo calculo($numM, $numN);