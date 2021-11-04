<?php

echo "Ingrese un número para calcular la sumatoria: ";
$num = trim(fgets(STDIN));
$sumatoria = 3;
$acum = 1;
for ($i=1; $i < $num; $i++) { 
    $acum = $acum + $sumatoria;
    $sumatoria = $sumatoria +2;
}

echo "La sumatoria es: " . $acum;