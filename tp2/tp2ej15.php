<<<<<<< HEAD
<?php
/* calcula el IMC a partir de la altura y peso */

    echo "Ingrese su peso en kilos: ";
    $peso = trim(fgets(STDIN));
    echo "Ingrese su altura en metros: ";
    $altura = trim(fgets(STDIN));
    $imc = $peso / ($altura * $altura);
=======
<?php
/* calcula el IMC a partir de la altura y peso */

    echo "Ingrese su peso en kilos: ";
    $peso = trim(fgets(STDIN));
    echo "Ingrese su altura en metros: ";
    $altura = trim(fgets(STDIN));
    $imc = $peso / ($altura * $altura);
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
    echo "Su IMC es: ". round($imc, 2);