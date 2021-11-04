<?php

/**
 * Calcula la distancia entre dos puntos de coordenadas
 * @param int $xPto1
 * @param int $yPto1
 * @param int $xPto2
 * @param int $yPto2
 * @return float
 */
function distanciaPuntos($xPto1, $yPto1, $xPto2, $yPto2){
    
}

/**
 * Calcula si una casa está dentro del radio de la escuela.
 * @param int $distEscCasa
 * @param int $radioEscuela
 * @return string
 */
function dentroFuera($distEscuelaCasa, $radioEscuela){
    if ($distEscuelaCasa > $radioEscuela){
        $estaDentro = "Fuera";
    }else 
        $estaDentro = "Dentro";
    return $estaDentro;
}

echo "Ingrese la coordenada x de la escuela: ";
$xEscuela = trim(fgets(STDIN));
echo "Ingrese la coordenada y de la escuela: ";
$yEscuela = trim(fgets(STDIN));
echo "Ingrese el radio: ";
$radio = trim(fgets(STDIN));

echo "Ingrese la coordenada x de la casa: ";
$xCasa = trim(fgets(STDIN));
echo "Ingrese la coordenada y de la casa: ";
$yCasa = trim(fgets(STDIN));

$distancia = distanciaPuntos($xEscuela, $yEscuela, $xCasa, $yCasa);
$resultado = dentroFuera($distancia, $radio);
echo $resultado;