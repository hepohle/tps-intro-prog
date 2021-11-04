<?php

echo "Ingrese un numero estero mayor a cero: ";
$num = trim(fgets(STDIN));
$n1 = 0;
$n2 = 1;
$a = 0;
if ($num <= 0){
    echo "Ingrese un número positivo: ";
} elseif ($num == 1){
    echo "$n1";
}else
    while ($a <= $num) {
        echo "$n1 - ";
        $aux = $n1 + $n2;
        $n1 = $n2;
        $n2 = $aux;
        $a ++;
    }