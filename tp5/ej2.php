<<<<<<< HEAD
<?php

/**
 * Recibe dos números, comprueba que el primero es mayor que el segundo.
 * @param int $num1
 * @param int $num2
 * @return boolean $result
 */
function esMayor($num1, $num2){
    if ($num1 > $num2){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

echo "Ingrese el primer número: ";
$numero1 = trim(fgets(STDIN));
echo "Ingrese el segundo número: ";
$numero2 = trim(fgets(STDIN));
$mayorMenor = esMayor($numero1, $numero2) ? " es mayor a " : " no es mayor a ";
=======
<?php

/**
 * Recibe dos números, comprueba que el primero es mayor que el segundo.
 * @param int $num1
 * @param int $num2
 * @return boolean $result
 */
function esMayor($num1, $num2){
    if ($num1 > $num2){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

echo "Ingrese el primer número: ";
$numero1 = trim(fgets(STDIN));
echo "Ingrese el segundo número: ";
$numero2 = trim(fgets(STDIN));
$mayorMenor = esMayor($numero1, $numero2) ? " es mayor a " : " no es mayor a ";
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "El número " . $numero1 . $mayorMenor . $numero2;