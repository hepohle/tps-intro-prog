<?php
/* Calcula el promedi de tres notas dadas */
echo "Ingrese su primera nota: ";
$nota1 = trim(fgets(STDIN));
echo "Ingrese su segunda nota: ";
$nota2 = trim(fgets(STDIN));
echo "Ingrese su tercer nota: ";
$nota3 = trim(fgets(STDIN));
$promedio = ($nota1 + $nota2 + $nota3) / 3;
echo "El promedio de sus notas es: ". $promedio;