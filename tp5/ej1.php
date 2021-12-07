<<<<<<< HEAD
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
=======
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
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "El número " . $numero . $resultado;