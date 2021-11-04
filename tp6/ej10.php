<?php

echo "Ingrese un número para calcular la sumatoria: ";
$num = trim(fgets(STDIN));
$sumatoria = 0;

for ($i=1; $i <= $num ; $i++) { 
    $sumatoria = $sumatoria + $i;
}

echo "La sumatoria es: " . $sumatoria;