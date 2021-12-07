<<<<<<< HEAD
<?php

/**
 * Calcula si un número es multiplo de otro
 * @param int $num1
 * @param int $num2
 * @return boolean
 */
function esMultiplo($num1, $num2){

    $num1 % $num2 == 0? $multiplo = true : $multiplo = false;
    return $multiplo;
}

echo "Ingrese le primer número: ";
$num1 = trim(fgets(STDIN));
echo "Ingrese el segundo número: ";
$num2 = trim(fgets(STDIN));

$esMultiplo = esMultiplo($num1, $num2);
$esMultiplo == false? $resultado = "False" : $resultado = "True";

=======
<?php

/**
 * Calcula si un número es multiplo de otro
 * @param int $num1
 * @param int $num2
 * @return boolean
 */
function esMultiplo($num1, $num2){

    $num1 % $num2 == 0? $multiplo = true : $multiplo = false;
    return $multiplo;
}

echo "Ingrese le primer número: ";
$num1 = trim(fgets(STDIN));
echo "Ingrese el segundo número: ";
$num2 = trim(fgets(STDIN));

$esMultiplo = esMultiplo($num1, $num2);
$esMultiplo == false? $resultado = "False" : $resultado = "True";

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo $resultado;