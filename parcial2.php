<?php

/**
 * Comprueba que las sillas cumplan con los requisitos.
 * @param float $alto
 * @param float $ancho
 * @param float $largo
 * @param float $peso
 * @return boolean
 */
function requisitosSillas($alto, $ancho, $largo, $peso){
    if($alto < 140.5 && $ancho <= 70 && $largo <= 50 && $peso < 30){
        $resultado = true;
    }else
        $resultado = false;
    return $resultado;
}