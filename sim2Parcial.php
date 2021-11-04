<?php

function esNroElegido1($num){
    $umbral = ((int)($num / 2)) + 1;
    $bandera = false;
    for ($i=2; $i < $umbral; $i++) { 
        if ($num % $i == 0) {
            $bandera = false;
        }
    }
    return $bandera;
}

function esNroElegido2($num){
    $umbral =((int)($num / 2)) + 1;
	$bandera = true;
    $i = 2;
    while ($bandera &&  $i < $umbral) {
        $bandera = !($num % $i == 0);
        $i = $i + 1;
    }
    return $bandera;
}
