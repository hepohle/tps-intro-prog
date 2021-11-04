<?php
/**
 * Se ingresa una palabra para adivinar y la cantidad de intentos para adivinarla.
 * Devuelve la cantidad de veces que se adivinó la palabra.
 */
echo "Ingrese la palabra que debe ser adivinada: ";
$palabraX = trim(fgets(STDIN));
echo "Ingrese la cantidad de itentos: ";
$intentos = trim(fgets(STDIN));
$cantPalabras = 0;
$respuesta = "No hay secuencia de palabras para analizar.";

if($intentos == 0){
    echo $respuesta;
}else {
    for ($i=0; $i < $intentos; $i++) { 
        echo "Ingrese una palabra: ";
        $palabraIntento = trim(fgets(STDIN));
        if ($palabraIntento == $palabraX){
            $cantPalabras ++;
        }   
    }
    echo $cantPalabras;
}