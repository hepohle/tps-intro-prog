<?php
/* calcula el diámetro, perímetro y area de una cicunferencia 
y también el area y volumen de una esfera a partir del valor del radio*/

echo "Ingrese el valor del radio: ";
$radio = trim(fgets(STDIN));
$diametro = $radio * 2;
$perimetro = round((2 * M_PI * $radio),2);
$superficie =  round((M_PI * ($radio * $radio)),2);
$superficieEsf = round((4 * M_PI * ($radio * $radio)),2);
$volumenEsf = round(((4 * M_PI * ($radio * $radio * $radio)) / 3),2);
echo "El diámetro es: ". $diametro. " el perímetro es: ". $perimetro. " el área es: ". $superficie."\n";
echo"El área de la esfera es: ". $superficieEsf. " el volumen de la esfera es: ". $volumenEsf;