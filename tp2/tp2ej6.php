<?php
/* intercambia los valores de dos variables */
    echo "Ingrese un número: ";
    $num1 = trim(fgets(STDIN));
    echo "Ingrese otro número: ";
    $num2 = trim(fgets(STDIN));
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    echo "El primer número es ". $num1. " y el segundo es ".$num2;