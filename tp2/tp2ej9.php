<?php
/* devuelve el resto de una división */
    echo "Ingese un número: ";
    $dividendo = trim(fgets(STDIN));
    echo "Ingrese otro número: ";
    $divisor = trim(fgets(STDIN));
    $cociente = (int)($dividendo / $divisor);
    echo $cociente."\n";
    $resto = $dividendo - ($divisor * $cociente);
    echo "El resto de dividir ". $dividendo . " y ". $divisor. " es: ". $resto.".";
