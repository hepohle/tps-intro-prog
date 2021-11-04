<?php

/**
 * Calcula el puntaje a partir del número de prueba y el tipo de prueba
 * @param int $numPrueba
 * @param string $tipoPrueba
 * @return int
 */
function calcPuntaje($numPrueba, $tipoPrueba){
    //int $resultado
    $resultado = (int)($numPrueba % 20);
    if ($tipoPrueba == "Conquista"){
        $resultado = $resultado + 40;
    }else
        $resultado = $resultado + 25;
    return $resultado;
}

/**
 * Calcula los minutos extra a partir del puntaje obtenido
 * @param int $puntaje
 * @return int
 */
function calcMinutosExtra($puntaje){
    //int minExtra
    if ($puntaje < 26){
        $minExtra = 3;
    }elseif ($puntaje >= 26 && $puntaje < 33){
        $minExtra = 4;
    }elseif ($puntaje >= 33 && $puntaje < 41){
        $minExtra = 5;
    }elseif ($puntaje >= 41){
        $minExtra = 6;
    }
    return $minExtra;
}

/* Calcula la cantidad de minutos extra que recibe el jugador*/
//int $numeroDePrueba, $puntajeJugador, $minutosExtra
echo "Ingrese el número de prueba: ";
$numeroDePrueba = trim(fgets(STDIN));
echo "Ingrese el tipo de prueba: ";
$tipoDePrueba = trim(fgets(STDIN));
$puntajeJugador = calcPuntaje($numeroDePrueba, $tipoDePrueba);
$minutosExtra = calcMinutosExtra($puntajeJugador);
echo $minutosExtra;