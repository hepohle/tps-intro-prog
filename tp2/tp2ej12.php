<?php
/* calcula aproximadamente le edad a partir del año actual y el año de nacimiento */

    echo "Ingrese el año de su nacimiento: ";
    $anioNac = trim(fgets(STDIN));
    echo "Ingrese el año actual: ";
    $anioAct = trim(fgets(STDIN));
    $edad = $anioAct - $anioNac;
    echo "Su edad aproximada es: ". $edad;