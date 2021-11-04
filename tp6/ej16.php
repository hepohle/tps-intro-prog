<?php

echo "Ingrese una palabra: ( . para finalizar) ";
$palabra = trim(fgets(STDIN));
$frase = "";
$fin = ".";

while ($palabra <> $fin) {
    $frase = $frase . " " . $palabra;
    echo "Ingrese una palabra: ( . para finalizar) ";
    $palabra = trim(fgets(STDIN));   
}
echo $frase;