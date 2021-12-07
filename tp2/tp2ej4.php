<<<<<<< HEAD
<?php
/* calcula el valor de la cuota más el interes de una suma dada */
    echo "Ingreso el monto: $ ";
    $monto = trim(fgets(STDIN));
    echo "Ingrese la cantidad de cuotas: ";
    $cuotas = trim(fgets(STDIN));
    echo "Ingrese el porcentaje de interes: ";
    $interes = trim(fgets(STDIN));
    $interes = $interes / 100;
    $cuotas = $monto / $cuotas;
    $pago = $cuotas + ($cuotas * $interes);
=======
<?php
/* calcula el valor de la cuota más el interes de una suma dada */
    echo "Ingreso el monto: $ ";
    $monto = trim(fgets(STDIN));
    echo "Ingrese la cantidad de cuotas: ";
    $cuotas = trim(fgets(STDIN));
    echo "Ingrese el porcentaje de interes: ";
    $interes = trim(fgets(STDIN));
    $interes = $interes / 100;
    $cuotas = $monto / $cuotas;
    $pago = $cuotas + ($cuotas * $interes);
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
    echo "Debe abonar: $".$pago." por cada cuota.";