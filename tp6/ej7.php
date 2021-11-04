<?php

echo "Ingrese el primer número: ";
$a = trim(fgets(STDIN));
echo "Ingrese el segundo número: ";
$b = trim(fgets(STDIN));
$sumatoria = 0;

if ($a % 2 == 0){
    $inicio = $a + 1;
}else
    $inicio = $a + 2;

for ($i=$inicio; $i < $b ; $i = $i +2) { 
    $sumatoria = $sumatoria + $i; 
}

echo "La suma es: " . $sumatoria;