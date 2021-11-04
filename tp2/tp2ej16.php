<?php
/* recibe unacantidad de segundos y la convierte a minutos y segundos */

    echo "Ingrese la cantidad de segundos: ";
    $segundos = trim(fgets(STDIN));
    $minutos = (int)($segundos / 60);
    $segundos = $segundos % 60;
    echo "La cantidad de minutos es: ". $minutos.":". $segundos;