<?php

echo "Ingrese un número para obtener el factorial: ";
$num = trim(fgets(STDIN));
$factorial = 1;

for ($i=1; $i <= $num ; $i++) { 
    $factorial = $factorial * $i;
}

echo "El factorial es: " . $factorial;