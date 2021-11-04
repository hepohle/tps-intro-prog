<?php
//PRINCIPAL
//INT $i, $numeroLimite
echo "Ingrese un número: ";
$numeroLimite = trim(fgets(STDIN));
for ($i=1; $i < $numeroLimite; $i++) { 
    echo $i . " - ";
}
echo "\nFIN";