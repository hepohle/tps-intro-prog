<?php
/* dada una temperatura en centigrados la convierte a fahrenheit */

    echo "Ingrese la temperatura en grados Centígrados: ";
    $tempC = trim(fgets(STDIN));
    $tempF = (9/5) * $tempC +32;
    echo "La temperatura en Fahrenheit es: ". $tempF;