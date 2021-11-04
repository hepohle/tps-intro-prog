<?php

echo "Cuantas temperaturas desea ingresar: ";
$cantTemp = trim(fgets(STDIN));


function leerTemperaturas($n){
    for ($i=0; $i < $n; $i++) {
        echo "Ingrese un temperatura: ";
        $inputTemp = trim(fgets(STDIN));
        $tempArray[$i] = $inputTemp;
    }
    return $tempArray;
}

$temperaturasMinimasMes = [15, 14, 11, 7, 3, 1, 0, 1, 4, 8, 11, 14];

// Dado un array devuelve el listado de valores
function listarTemperaturas($listTemp){
    for ($i=0; $i < count($listTemp) -1; $i++) { 
        
    }
}

// Dado un array devuelve el promedio de los valores.
function promTemperaturas($listTemp){
    $suma = 0;
    foreach ($listTemp as $value){
        $suma += $value;
        $cantElementos = count($listTemp);
        $promedio = $suma / $cantElementos;
    }
    return $promedio;
}

// Dado un array y un valor devuelve el porcentaje de valores superiores al valor dado.
function porcTemperaturasSuperiores($listTemp, $tempLimite){

    
}

// Dado un array retorna el indice del valor menor.
function minTemperatura($listTemp){
    $tempMasBaja = 100;
    for ($i=0; $i < count($listTemp) - 1; $i++) { 
        if () {
            # code...
        }
    }
    foreach ($listTemp as $value) {
        $tempMasBaja = 100;
        if ($value < $tempMasBaja) {
            $tempMasBaja = $value;
        }
    }
    return $tempMasBaja;
}

// Dado un array retorna el indice del valor mayor.
function maxTemperatura(){

}

// Dado un array retorna un array asociativo con clave "min" con el valor menor y clave "max" con el valor mayor.
function extremosTemperatura(){

}

$miArray = leerTemperaturas($cantTemp);

print_r($miArray);

$promedioTemperaturas = promTemperaturas($miArray);
echo "El promedio de las temperaturas es: " .  round($promedioTemperaturas, 2) . "\n";

$temperaturaMinima = minTemperatura($miArray);
echo "La temperatura minima ingresada es: " . $temperaturaMinima . "\n";