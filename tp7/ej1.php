<<<<<<< HEAD
<?php

/**
 * Recibe un valor de una temperatura y lo agrega a un array
 * @param float $n
 * @return array
 */
function leerTemperaturas($n){
    for ($i=0; $i < $n; $i++) {
        echo "Ingrese una temperatura: ";
        $inputTemp = trim(fgets(STDIN));
        $tempArray[$i] = $inputTemp;
    }
    return $tempArray;
}

// Array de muestra de temperaturas.
$temperaturasMinimasMes = [15, 14, 11, 7, 3, 1, 0, 1, 4, 8, 11, 14];

/** 
*  Dado un array devuelve el listado de valores
* @param array $listTemp
*/
 function listarTemperaturas($listTemp){
    echo "--- Listado de temperaturas ---\n";
    foreach ($listTemp as $value) {
        echo "--- " . $value . " ---\n";
    }
}

/**
* Dado un array devuelve el promedio de los valores.
* @param array $listTemp
* @return float
*/
function promTemperaturas($listTemp){
    $suma = 0;
    foreach ($listTemp as $value){
        $suma += $value;
        $cantElementos = count($listTemp);
        $promedio = $suma / $cantElementos;
    }
    return $promedio;
}

/**
* Dado un array y un valor devuelve el porcentaje de valores superiores al valor dado.
* @param array $listTemp
* @param float $tempLimite
* @return float
*/
 function porcTemperaturasSuperiores($listTemp, $tempLimite){
    $cant = count($listTemp);
    $tempSuperiores = 0;
    foreach ($listTemp as $value) {
        if ($value > $tempLimite) {
            $tempSuperiores ++;
        }
    }
    $porcentajeSup = ($tempSuperiores * 100) / $cant;
    return $porcentajeSup;
}

// Dado un array retorna el valor menor.
function minTemperatura($listTemp){
    $tempMasBaja = 100;

    foreach ($listTemp as $value) {
        if ($value < $tempMasBaja) {
            $tempMasBaja = $value;
        }
    }
    return $tempMasBaja;
}

/**
* 
*/
function indiceMenor($listTemp){
    $tempMasBaja = 100;
    foreach ($listTemp as $key => $value) {
        if ($value < $tempMasBaja) {
            $tempMasBaja = $value;
            $indice = $key;
        }
    }
    return $indice;
}

// Dado un array retorna el valor mayor.
function maxTemperatura($listTemp){
    $tempMax = 0;
    foreach ($listTemp as $value) {
        if ($value > $tempMax) {
            $tempMax = $value;
        }
    }
    return $tempMax;
}

/** 
* Dado un array retorna un array asociativo con clave "min" con el valor menor y clave "max" con el valor mayor.
* @param array $listTemp
* @return array
*/
function extremosTemperatura($listTemp){
    $tMax = maxTemperatura($listTemp);
    $tMin = minTemperatura($listTemp);
    $extremosTemp = [
        "min" => $tMin,
        "max" => $tMax,
    ];
    return $extremosTemp;
}

// Definicion de variables
$tempLimSup = 30;

// PROGRAMA PRINCIPAL
echo "Cuantas temperaturas desea ingresar: ";
$cantTemp = trim(fgets(STDIN));

$miArray = leerTemperaturas($cantTemp);

print_r($miArray);

listarTemperaturas($miArray);

$promedioTemperaturas = promTemperaturas($miArray);
echo "El promedio de las temperaturas es: " .  round($promedioTemperaturas, 2) . "\n";

$temperaturaMinima = minTemperatura($miArray);
echo "La temperatura minima ingresada es: " . $temperaturaMinima . "\n";

$indiceMin = indiceMenor($miArray);
echo "El indice de la temperatura menor es " . $indiceMin . "\n";

$porcentajeS = porcTemperaturasSuperiores($miArray, $tempLimSup);
echo "El porcentaje de temperaturas superiores a " . $tempLimSup . " es " . $porcentajeS . "%\n";

$temperaturasExtremas = extremosTemperatura($miArray);
print_r($temperaturasExtremas);
=======
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
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
