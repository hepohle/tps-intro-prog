<?php
/* calcula el area de un rectangulo a partir de los valores de los lados dados */

    echo "Ingrese el valor de un lado: ";
    $ladoA = trim(fgets(STDIN));
    echo "Ingrese el valor del otro lado: ";
    $ladoB = trim(fgets(STDIN));
    $area = $ladoA * $ladoB;
    echo "El área del rectángulo es: ". $area;