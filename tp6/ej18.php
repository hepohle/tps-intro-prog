<?php

echo "Ingrese una palabra: ( . para finalizar) ";
$palabra = trim(fgets(STDIN));
$frase = "";
$fin = ".";

while ($palabra <> $fin) {
    $frase = $palabra . " " . $frase;
    echo "Ingrese una palabra: ( . para finalizar) ";
    $palabra = trim(fgets(STDIN));   
}
echo $frase;