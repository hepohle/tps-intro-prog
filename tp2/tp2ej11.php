<<<<<<< HEAD
<?php
/* dados 2 números, calcula el porcentaje del segundo número que representa el primero */

    echo "Ingrese un número: ";
    $num1 = trim(fgets(STDIN));
    echo "Ingrese otro número: ";
    $num2 = trim(fgets(STDIN));
    $porcentaje = ($num1 * 100) / $num2;
=======
<?php
/* dados 2 números, calcula el porcentaje del segundo número que representa el primero */

    echo "Ingrese un número: ";
    $num1 = trim(fgets(STDIN));
    echo "Ingrese otro número: ";
    $num2 = trim(fgets(STDIN));
    $porcentaje = ($num1 * 100) / $num2;
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
    echo $num1." es el ". $porcentaje."% "."de ". $num2;