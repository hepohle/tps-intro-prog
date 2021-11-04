<?php
/* Calcula ganacia que recibe un empleado por las horas trabajadas */
    echo "Ingrese empleado: ";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese la cantidad de horas trabajadas: ";
    $horas = trim(fgets(STDIN));
    echo "Ingrese el valor de la hora trabajada: ";
    $valorHora = trim(fgets(STDIN));
    $ganancia = $horas * $valorHora;
    echo "El empleado ". $nombre. " obtuvo $".$ganancia. " de ganacia.";