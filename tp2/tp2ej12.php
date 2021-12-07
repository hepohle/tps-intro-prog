<<<<<<< HEAD
<?php
/* calcula aproximadamente le edad a partir del año actual y el año de nacimiento */

    echo "Ingrese el año de su nacimiento: ";
    $anioNac = trim(fgets(STDIN));
    echo "Ingrese el año actual: ";
    $anioAct = trim(fgets(STDIN));
    $edad = $anioAct - $anioNac;
=======
<?php
/* calcula aproximadamente le edad a partir del año actual y el año de nacimiento */

    echo "Ingrese el año de su nacimiento: ";
    $anioNac = trim(fgets(STDIN));
    echo "Ingrese el año actual: ";
    $anioAct = trim(fgets(STDIN));
    $edad = $anioAct - $anioNac;
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
    echo "Su edad aproximada es: ". $edad;