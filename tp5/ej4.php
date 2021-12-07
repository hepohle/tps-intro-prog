<<<<<<< HEAD
<?php

/**
 * Comprueba si un número de 3 cifras es capicua.
 * @param int $num
 * @return string
 */
function capicua($num){
    // int digito1, digito2
    $digito1 = (int)($num / 100);
    $digito2 = (int)($num % 10);
    if ($digito1 == $digito2){
        $esCapicua = "Es capicua";
    } else {
        $esCapicua = "No es capicua";
    }
    return $esCapicua;
}

echo "Ingrese un número de tres cifras: ";
$numero = trim(fgets(STDIN));
if($numero > 99 && $numero < 1000 ){
    $retorno = capicua($numero);
}else{
    $retorno = "Ingrese un número de tres cifras";
}
echo $retorno;
=======
<?php

/**
 * Comprueba si un número de 3 cifras es capicua.
 * @param int $num
 * @return string
 */
function capicua($num){
    // int digito1, digito2
    $digito1 = (int)($num / 100);
    $digito2 = (int)($num % 10);
    if ($digito1 == $digito2){
        $esCapicua = "Es capicua";
    } else {
        $esCapicua = "No es capicua";
    }
    return $esCapicua;
}

echo "Ingrese un número de tres cifras: ";
$numero = trim(fgets(STDIN));
if($numero > 99 && $numero < 1000 ){
    $retorno = capicua($numero);
}else{
    $retorno = "Ingrese un número de tres cifras";
}
echo $retorno;
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
