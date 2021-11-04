<?php
/*genera la suma de tres números dados*/
    echo"Ingrese un número: ";
    $num1 = trim(fgets(STDIN));
    echo"Ingrese otro número: ";
    $num2 = trim(fgets(STDIN));
    echo"Ingrese untercer número: ";
    $num3 = trim(fgets(STDIN));

    $resultado = $num1 + $num2 + $num3;

    echo "El resultado de la suma de los tres números es: ".$resultado;