<<<<<<< HEAD
<?php

function calculo($num1, $num2){
    $resultado = (pow($num1, $num2)) + sqrt(abs($num1));
    return $resultado;
}

echo "Ingrese un número: ";
$numM = trim(fgets(STDIN));
echo "Ingrese otro númmero: ";
$numN = trim(fgets(STDIN));

=======
<?php

function calculo($num1, $num2){
    $resultado = (pow($num1, $num2)) + sqrt(abs($num1));
    return $resultado;
}

echo "Ingrese un número: ";
$numM = trim(fgets(STDIN));
echo "Ingrese otro númmero: ";
$numN = trim(fgets(STDIN));

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo calculo($numM, $numN);