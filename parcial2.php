<<<<<<< HEAD
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
=======
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
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
}