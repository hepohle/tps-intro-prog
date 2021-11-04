<?php

/**
 * Recibe horas, minutos, segundos y tipo (AM/PM) y devuelve el total de segundos.
 * @param int $horas
 * @param int $minutos
 * @param int $segundos
 * @param string $tipo
 * @return int $segundosTotales
 */
function aSegundos($horas, $minutos, $segundos, $tipo){
    if ($tipo == "PM" && $horas == 12){
        $horas = 0;
    }elseif ($tipo == "PM" && $horas < 12)
        $horas = $horas + 12;
    $segundosTotales = ($horas * 3600) + ($minutos * 60) + $segundos; 
    return $segundosTotales;
}

/**
 * Recibe una cantidad de segundos y devuelve formateado en horas, minutos y segundos.
 * @param int $segTotales
 * @return string $horaFormateada
 */
function formatoHora($segTotales){
    //int $horas, $minutos, $segundos
    $horas = (int)($segTotales / 3600);
    $minutos = (int)(($segTotales % 3600) / 60);
    $segundos = (int)(($segTotales % 3600) % 60);
    $horaFormateada = $horas . "h:" . $minutos . "m:" . $segundos . "s";
    return $horaFormateada; 
}

/**
 * Recibe dos horas expresadas en segundos y determina si la primera es menor a la segunda.
 * @param int $segundos1
 * @param int $segundos2
 * @return boolean $esMenor
 */
function esMenor($segundos1, $segundos2){
    if ($segundos1 < $segundos2){
        $esMenor = true;
        return $esMenor;
    }
}

/**
 * Recibe dos parametros de horas expresados en segundos
 * y retorna la diferencia con formato legible.
 * @param int $segundos1
 * @param int $segundos2
 * @return string $difFormated
 */
function difHoras($segundos1, $segundos2){
    //int $diferencia
    if (esMenor($segundos1, $segundos2) == true){
        $diferencia = $segundos2 - $segundos1;
    }else
        $diferencia = $segundos1 - $segundos2;
    $difFormated = formatoHora($diferencia);
    return $difFormated;
}

echo "Ingrese una cantidad de horas (0 a 12): ";
$horas1 = trim(fgets(STDIN));
echo "Ingrese una cantidad de minutos (0 a 59): ";
$minutos1 = trim(fgets(STDIN));
echo "Ingrese una cantidad de segundos (0 a 59): ";
$segundos1 = trim(fgets(STDIN));
echo "Ingrese un tipo (AM / PM): ";
$tipo1 = trim(fgets(STDIN));

echo "Ingrese otra cantidad de horas (0 a 12): ";
$horas2 = trim(fgets(STDIN));
echo "Ingrese otra cantidad de minutos (0 a 59): ";
$minutos2 = trim(fgets(STDIN));
echo "Ingrese otra cantidad de segundos (0 a 59): ";
$segundos2 = trim(fgets(STDIN));
echo "Ingrese un tipo (AM / PM): ";
$tipo2 = trim(fgets(STDIN));

$sTotales1 = aSegundos($horas1, $minutos1, $segundos1, $tipo1);
$sTotales2 = aSegundos($horas2, $minutos2, $segundos2, $tipo2);

echo $sTotales1 . "\n";
echo $sTotales2 . "\n";

echo "Las horas ordenadas de mayor a menor son: \n";

if (esMenor($sTotales1, $sTotales2) == true){
    echo formatoHora($sTotales2) . "\n" . formatoHora($sTotales1) . "\n";
}else
    echo formatoHora($sTotales1) . "\n" . formatoHora($sTotales2) . "\n";

echo "La diferencia es: " . difHoras($sTotales1, $sTotales2);