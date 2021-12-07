<<<<<<< HEAD
<?php
/* calcula el porcentaje de aumento que debe recibir para que el sueldo actual sea el ideal */
    echo "Ingrese su sueldo actual: $ ";
    $sueldoActual = trim(fgets(STDIN));
    echo "Ingrese su sueldo deseado: $ ";
    $sueldoDeseado = trim(fgets(STDIN));
    $aumento = ($sueldoDeseado - $sueldoActual) / ($sueldoActual / 100);
=======
<?php
/* calcula el porcentaje de aumento que debe recibir para que el sueldo actual sea el ideal */
    echo "Ingrese su sueldo actual: $ ";
    $sueldoActual = trim(fgets(STDIN));
    echo "Ingrese su sueldo deseado: $ ";
    $sueldoDeseado = trim(fgets(STDIN));
    $aumento = ($sueldoDeseado - $sueldoActual) / ($sueldoActual / 100);
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
    echo "Deberías tener un aumento del ". $aumento . "% para tu sueldo deseado.";