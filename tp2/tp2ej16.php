<<<<<<< HEAD
<?php
/* recibe unacantidad de segundos y la convierte a minutos y segundos */

    echo "Ingrese la cantidad de segundos: ";
    $segundos = trim(fgets(STDIN));
    $minutos = (int)($segundos / 60);
    $segundos = $segundos % 60;
=======
<?php
/* recibe unacantidad de segundos y la convierte a minutos y segundos */

    echo "Ingrese la cantidad de segundos: ";
    $segundos = trim(fgets(STDIN));
    $minutos = (int)($segundos / 60);
    $segundos = $segundos % 60;
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
    echo "La cantidad de minutos es: ". $minutos.":". $segundos;