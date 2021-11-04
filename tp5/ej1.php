<?php
/**
 * Comprueba si el número ingresado es par.
 * Retorna true / false.
 * @param int $num
 * @return boolean $result
 */
function esPar($num){
    if ($num % 2 == 0){
        $result = true;   
    }else {
        $result = false;
    }
    return $result;
}

echo "Ingrese un número: ";
$numero = trim(fgets(STDIN));
$parONo = esPar($numero);
if ($parONo == true){
    $resultado = " es par.";
}else
    $resultado = " es impar.";
echo "El número " . $numero . $resultado;