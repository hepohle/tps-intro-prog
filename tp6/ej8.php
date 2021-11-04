<?php

echo "Cuantos números desea sumar?: ";
$acum = trim(fgets(STDIN));
$suma = 0;

for ($i=1; $i <= $acum; $i++) { 
    echo "Ingrese el nro " . $i . ": ";
    $a = trim(fgets(STDIN));
    $suma = $suma + $a;
}

echo "La suma es: " . $suma;