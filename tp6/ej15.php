<?php

echo "Ingrese el número a encontrar: ";
$numX = trim(fgets(STDIN));
$numSalir = -1;

echo "Ingrese número para la secuencia: ";
$numSecuencia = trim(fgets(STDIN));

while ($numX != $numSecuencia && $numSalir != $numSecuencia) {
    echo "Ingrese número para la secuencia: ";
    $numSecuencia = trim(fgets(STDIN)); 
}

if ($numX == $numSecuencia){
    echo $numX . " fue encontrado!";
}elseif ($numSalir == $numSecuencia ) {
    echo $numX . " No fue encontrado!";
}