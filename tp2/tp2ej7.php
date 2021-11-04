<?php
/* Calcula el cuadrado de un número dado */
    echo "Ingrese un número: ";
    $num = trim(fgets(STDIN));

    $numCuadrado = $num * $num;

    echo "El cuadrado de ". $num . " es: ". $numCuadrado;