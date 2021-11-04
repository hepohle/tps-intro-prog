<?php
/* calcula el porcentaje de aumento que debe recibir para que el sueldo actual sea el ideal */
    echo "Ingrese su sueldo actual: $ ";
    $sueldoActual = trim(fgets(STDIN));
    echo "Ingrese su sueldo deseado: $ ";
    $sueldoDeseado = trim(fgets(STDIN));
    $aumento = ($sueldoDeseado - $sueldoActual) / ($sueldoActual / 100);
    echo "Deberías tener un aumento del ". $aumento . "% para tu sueldo deseado.";