<?php

echo "Ingrese una letra: ( - para finalizar) ";
$letra = trim(fgets(STDIN));

$contador = 0;
$final = "-";

while ($letra <> $final) {
    if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){
        $contador ++;
    }
    echo "Ingrese una letra: ( - para finalizar) ";
    $letra = trim(fgets(STDIN));
}

echo "Cantidad de vocales: " . $contador;