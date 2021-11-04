<?php
/*determina el valor de la hipotenusa de un triángulo a partir de los valores de sus dos catetos*/
/*Float: $cateto1, $cateto2, $sumaCuad, $hipotenusa*/
echo "Ingrese el valor de un cateto: ";
$cateto1 = trim(fgets(STDIN));
echo "Ingrese el valor del otro cateto: ";
$cateto2 = trim(fgets(STDIN));
$sumaCuad = $cateto1 * $cateto1 + $cateto2 * $cateto2;
$hipotenusa = $sumaCuad ** 0.5;
echo "El valor de la hipotenusa es: " . round($hipotenusa, 2);
