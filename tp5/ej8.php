<?php

function contemporaneos($edad1, $edad2, $edad3){
    if ($edad1 == $edad2 && $edad1 == $edad3){
        $resultado = "Son contemporaneos";
    }elseif ($edad1 == $edad2){
        $resultado = "Juan y Mario son contemporaneos.";
    }elseif ($edad1 == $edad3){
        $resultado = "Juan y Pedro son contemporaneos.";
    }elseif ($edad2 == $edad3){
        $resultado = "Mario y Pedro son contemporaneos.";
    }else
        $resultado = "No son contemporaneos";
    return $resultado;
}

echo "Ingrese la edad de Juan: ";
$edad1 = trim(fgets(STDIN));
echo "Ingrese la edad de Mario: ";
$edad2 = trim(fgets(STDIN));
echo "Ingrese la edad de Pedro: ";
$edad3 = trim(fgets(STDIN));
$sonCont = contemporaneos($edad1, $edad2, $edad3);

echo $sonCont;