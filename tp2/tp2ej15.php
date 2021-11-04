<?php
/* calcula el IMC a partir de la altura y peso */

    echo "Ingrese su peso en kilos: ";
    $peso = trim(fgets(STDIN));
    echo "Ingrese su altura en metros: ";
    $altura = trim(fgets(STDIN));
    $imc = $peso / ($altura * $altura);
    echo "Su IMC es: ". round($imc, 2);