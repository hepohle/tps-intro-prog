<<<<<<< HEAD
<?php
/* dada una temperatura en centigrados la convierte a fahrenheit */

    echo "Ingrese la temperatura en grados Centígrados: ";
    $tempC = trim(fgets(STDIN));
    $tempF = (9/5) * $tempC +32;
=======
<?php
/* dada una temperatura en centigrados la convierte a fahrenheit */

    echo "Ingrese la temperatura en grados Centígrados: ";
    $tempC = trim(fgets(STDIN));
    $tempF = (9/5) * $tempC +32;
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
    echo "La temperatura en Fahrenheit es: ". $tempF;