<<<<<<< HEAD
<?php
/* calcula el area de un rectangulo a partir de los valores de los lados dados */

    echo "Ingrese el valor de un lado: ";
    $ladoA = trim(fgets(STDIN));
    echo "Ingrese el valor del otro lado: ";
    $ladoB = trim(fgets(STDIN));
    $area = $ladoA * $ladoB;
=======
<?php
/* calcula el area de un rectangulo a partir de los valores de los lados dados */

    echo "Ingrese el valor de un lado: ";
    $ladoA = trim(fgets(STDIN));
    echo "Ingrese el valor del otro lado: ";
    $ladoB = trim(fgets(STDIN));
    $area = $ladoA * $ladoB;
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
    echo "El área del rectángulo es: ". $area;