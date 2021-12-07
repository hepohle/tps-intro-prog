<<<<<<< HEAD
<?php
/* Calcula ganacia que recibe un empleado por las horas trabajadas */
    echo "Ingrese empleado: ";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese la cantidad de horas trabajadas: ";
    $horas = trim(fgets(STDIN));
    echo "Ingrese el valor de la hora trabajada: ";
    $valorHora = trim(fgets(STDIN));
    $ganancia = $horas * $valorHora;
=======
<?php
/* Calcula ganacia que recibe un empleado por las horas trabajadas */
    echo "Ingrese empleado: ";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese la cantidad de horas trabajadas: ";
    $horas = trim(fgets(STDIN));
    echo "Ingrese el valor de la hora trabajada: ";
    $valorHora = trim(fgets(STDIN));
    $ganancia = $horas * $valorHora;
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
    echo "El empleado ". $nombre. " obtuvo $".$ganancia. " de ganacia.";