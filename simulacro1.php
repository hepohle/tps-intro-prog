<?php

/**
 * Recibe los códigos internacional y de área y retorna el tipo de la llamada.
 * @param int $codigoInternacional
 * @param int $codigoArea
 * @return string
 */
function tipoLlamada($codigoInternacional, $codigoArea){
    //String $tipo
    if ($codigoInternacional == 54){
        if($codigoArea == 299){
            $tipo = "Local";
        }else
            $tipo = "Larga";
    }else
        $tipo = "Internacional";
    return $tipo;
}

/**
 * Recibe el tipo de llamada y devuelve el valor del segundo de la llamada.
 * @param string $tipoLlamada
 * @return float
 */
function costoSegundo($tipoLlamada){
    // Float valorSegundo
    if ($tipoLlamada == "Local"){
        $valorSegundo = 0.2;
    }elseif ($tipoLlamada == "Larga" ){
        $valorSegundo = 0.75;
    }elseif ($tipoLlamada == "Internacional"){
        $valorSegundo = 2;
    }
    return $valorSegundo;
}

/**
 * Recibe el valor por segundo de la llamada y la duración, devuelve el costo total de la llamada.
 * @param float $valorSegundo
 * @param float $duracionLlamada
 * @return float
 */
function costoLlamada($valorSegundo, $duracionLlamada){
    $costoTotal = $valorSegundo * $duracionLlamada;
    return $costoTotal;
}

echo "Ingrese el código internacional: ";
$codInt = trim(fgets(STDIN));
echo "Ingrese el código de área: ";
$codArea = trim(fgets(STDIN));
echo "Ingrese la duración de la llamada en segundos: ";
$duracion = trim(fgets(STDIN));

$tLlamada = tipoLlamada($codInt, $codArea);
$valorSeg = costoSegundo($tLlamada, $duracion);
$costoDeLlamada = costoLlamada($valorSeg, $duracion);
echo "El tipo de llamada es: " . $tLlamada . " El costo de su llamada es: $" . $costoDeLlamada;
