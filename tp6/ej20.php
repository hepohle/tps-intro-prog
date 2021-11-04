<?php

/**
 * Recibe un número y lo devuelve en orden inverso.
 * @param int $num
 * @param int $inverso
 * @param int $aux1
 * @return int $inverso
 */
function ordenInverso($num){
    $inverso = 0;
    while ($num > 0) {
        $inverso = $inverso * 10;
        $aux1 = $num % 10;
        $inverso = $inverso + $aux1;
        $num = (int)($num / 10);
    }
    return $inverso;
}


/**
 * Recibe un número y devuelve la suma de sus dígitos.
 * @param int $num
 * @param int $aux
 * @return int $sumatoria
 */
function sumaDigitos($num){
    $sumatoria = 0;
    while ($num > 0) {
        $aux = $num % 10;
        $sumatoria = $sumatoria + $aux;
        $num = (int)($num / 10);
    }
    return $sumatoria;
}

/**
 * Recibe un número y devuelve sus divisores.
 * @param int $num
 * @param int $divisor
 * @return int $divisor
 */
function cantidadDivisores($num){
    $divisor = "Los divisores de " . $num . " son: ";
    for ($i=1; $i <= $num ; $i++) { 
        if($num % $i == 0) {
            $divisor = $divisor . $i . " ";
        }
    }return $divisor;
}

/**
 * Recibe un número y devuelve si es un número primo o no.
 * @param int $num
 * @param boolean @esPrimo
 * @return boolean @esPrimo
 */
function esNumeroPrimo($num){
    for ($i=2; $i < $num; $i++) { 
        if($num % $i == 0){
            $esPrimo = false;
        }else {
            $esPrimo = true;
        }
    }
    return $esPrimo;
}

echo "Elija una opción: \n
    1- Número inverso \n
    2- Suma de dígitos\n
    3- Cantidad de divisores\n
    4- Es primo?\n
    5- Salir \n";
$opcion = trim(fgets(STDIN));

while ($opcion <> 5) {
    if ($opcion == 1) {
        echo "Ingrese un número para obtener el inverso: ";
        $numero = trim(fgets(STDIN));
        $resultado = ordenInverso($numero);
        echo "El inverso es: " . $resultado . "\n";
    }elseif ($opcion == 2){
        echo "Ingrese un número para ver la suma de sus digitos: ";
        $numero = trim(fgets(STDIN));
        $resultado = sumaDigitos($numero);
        echo "La suma de sus digitos es: " . $resultado;
    }elseif ($opcion == 3){
        echo "Ingrese un número para ver la cantidad de divisores: ";
        $numero = trim(fgets(STDIN));
        $resultado = cantidadDivisores($numero);
        echo $resultado . "\n";
    }elseif ($opcion == 4){
        echo "Ingrese un número para ver si es primo: ";
        $numero = trim(fgets(STDIN));
        $resultado = esNumeroPrimo($numero);
        if ($resultado){
            echo $numero . " es un número primo \n";
        }else {
            echo $numero . " no es un número primo.\n";
        }
    }
    echo "\n Elija una opción: \n
    1- Número inverso \n
    2- Suma de dígitos\n
    3- Cantidad de divisores\n
    4- Es primo?\n
    5- Salir \n";
$opcion = trim(fgets(STDIN));
}

echo "Gracias, vuelva pronto!";