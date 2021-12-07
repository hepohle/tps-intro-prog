<<<<<<< HEAD
<?php
/**
 * Calcula la velocidad a partir de la distancia y el tiempo que se tardo en realizarla.
 * Se ingresa el tiempo en horas, minutos y segundos y se convierten a segundos.
 */

/**
 * Convierte horas, minutos y segundos a segundos.
 * @param int $h
 * @param int $m
 * @param int $s
 * @return int $tiempo
 */
function convertirSegundos($h, $m, $s){
    /* $t1 , $t2 enteros */
    $t1 = $h * 3600;
    $t2 = $m * 60;
    $tiempo = $t1 + $t2 + $s;
    return $tiempo;
}

/**
 * Calcula la velocidad tomando la distancia y tiempo.
 * @param int $dist
 * @param int $tiempo
 * @return float $velocidad
 */
function velocidad($dist, $tiempo){
    $velocidad = $dist / $tiempo;
    return $velocidad;    
}

echo "Ingrese la distancia de la carrera en metros: ";
$distancia = trim(fgets(STDIN));
echo "Ingrese el tiempo del primer competidor\n";
echo "Ingrese la cantidad de horas de carrera: ";
$horas1 = trim(fgets(STDIN));
echo "Ingrese la cantidad de minutos: ";
$minutos1 = trim( fgets(STDIN));
echo "Ingrese la cantidad de segundos: ";
$segundos1 = trim(fgets(STDIN));

echo "Ingrese el tiempo del segundo competidor\n";
echo "Ingrese la cantidad de horas de carrera: ";
$horas2 = trim(fgets(STDIN));
echo "Ingrese la cantidad de minutos: ";
$minutos2 = trim( fgets(STDIN));
echo "Ingrese la cantidad de segundos: ";
$segundos2 = trim(fgets(STDIN));

$tiempo1 = convertirSegundos($horas1, $minutos1, $segundos1);
$velocidad1 = velocidad($distancia, $tiempo1);

$tiempo2 = convertirSegundos($horas2, $minutos2, $segundos2);
$velocidad2 = velocidad($distancia, $tiempo2);

=======
<?php
/**
 * Calcula la velocidad a partir de la distancia y el tiempo que se tardo en realizarla.
 * Se ingresa el tiempo en horas, minutos y segundos y se convierten a segundos.
 */

/**
 * Convierte horas, minutos y segundos a segundos.
 * @param int $h
 * @param int $m
 * @param int $s
 * @return int $tiempo
 */
function convertirSegundos($h, $m, $s){
    /* $t1 , $t2 enteros */
    $t1 = $h * 3600;
    $t2 = $m * 60;
    $tiempo = $t1 + $t2 + $s;
    return $tiempo;
}

/**
 * Calcula la velocidad tomando la distancia y tiempo.
 * @param int $dist
 * @param int $tiempo
 * @return float $velocidad
 */
function velocidad($dist, $tiempo){
    $velocidad = $dist / $tiempo;
    return $velocidad;    
}

echo "Ingrese la distancia de la carrera en metros: ";
$distancia = trim(fgets(STDIN));
echo "Ingrese el tiempo del primer competidor\n";
echo "Ingrese la cantidad de horas de carrera: ";
$horas1 = trim(fgets(STDIN));
echo "Ingrese la cantidad de minutos: ";
$minutos1 = trim( fgets(STDIN));
echo "Ingrese la cantidad de segundos: ";
$segundos1 = trim(fgets(STDIN));

echo "Ingrese el tiempo del segundo competidor\n";
echo "Ingrese la cantidad de horas de carrera: ";
$horas2 = trim(fgets(STDIN));
echo "Ingrese la cantidad de minutos: ";
$minutos2 = trim( fgets(STDIN));
echo "Ingrese la cantidad de segundos: ";
$segundos2 = trim(fgets(STDIN));

$tiempo1 = convertirSegundos($horas1, $minutos1, $segundos1);
$velocidad1 = velocidad($distancia, $tiempo1);

$tiempo2 = convertirSegundos($horas2, $minutos2, $segundos2);
$velocidad2 = velocidad($distancia, $tiempo2);

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "La velocidad del primer competidor es: ". round($velocidad1,2). "m/s y la velocidad de segundo es: ". round($velocidad2,2). "m/s\n";