<<<<<<< HEAD
<?php

/**
 * Recibe un número de 4 cifras y lo devuelve encriptado
 * @param int $cifra
 * @return int $cifraEncriptada
 */
function encriptar($cifra){
    /* $digito1, $digito2, $digito3, $digito4 enteros*/
    $digito4 = $cifra % 10;
    $digito3 = (int)(($cifra/10) % 10);
    $digito2 = (int)(($cifra/100) % 10);
    $digito1 = (int)($cifra/1000);

    //encripta el valor de cada digito.
    $digito1 = ($digito1 + 7) % 10;
    $digito2 = ($digito2 + 7) % 10;
    $digito3 = ($digito3 + 7) % 10;
    $digito4 = ($digito4 + 7) % 10;

    //convierte los 4 dígitos en un número entero.
    $cifraEncriptada = ($digito3 * 1000) + ($digito4 * 100) + ($digito1 * 10) + $digito2;
    return $cifraEncriptada;    
}

/**
 * Recibe el número encriptado y lo devuelve desencriptado
 * @param int $encriptado
 * @return int $desencriptado
 */
function desencriptar($encriptado){
    /* $digito1, $digito2, $digito3, $digito4 enteros*/
    $digito1 = (int)($encriptado / 1000);
    $digito2 = (int)(($encriptado / 100) % 10);
    $digito3 = (int)(($encriptado / 10) % 10);
    $digito4 = (int)($encriptado % 10);

    //vuelve cada digito a su valor anterior
    $digito1 < 7 ? $digito1 = $digito1 + 3 : $digito1 = $digito1 - 7;
    $digito2 < 7 ? $digito2 = $digito2 + 3 : $digito2 = $digito2 - 7;
    $digito3 < 7 ? $digito3 = $digito3 + 3 : $digito3 = $digito3 - 7;
    $digito4 < 7 ? $digito4 = $digito4 + 3 : $digito4 = $digito4 - 7;

    //convierte los 4 dígitos en a un número entero.
    $desencriptado = ($digito3 * 1000) + ($digito4 * 100) + ($digito1 * 10) + $digito2;
    
    return $desencriptado;
}
/**
 * Programa principal Encriptar / Desencriptar
 * Recibe un número entero de 4 cifras lo encripta y devuelve un número entero.
 * Al final desencripta el número nuevamente.
 */
echo"Ingrese un numero de 4 cifras para encriptar: ";
$cifra = trim(fgets(STDIN));

$cifraEncriptada = encriptar($cifra);
$desencriptado = desencriptar($cifraEncriptada);

echo "El número encriptado es: " . $cifraEncriptada . "\n";
=======
<?php

/**
 * Recibe un número de 4 cifras y lo devuelve encriptado
 * @param int $cifra
 * @return int $cifraEncriptada
 */
function encriptar($cifra){
    /* $digito1, $digito2, $digito3, $digito4 enteros*/
    $digito4 = $cifra % 10;
    $digito3 = (int)(($cifra/10) % 10);
    $digito2 = (int)(($cifra/100) % 10);
    $digito1 = (int)($cifra/1000);

    //encripta el valor de cada digito.
    $digito1 = ($digito1 + 7) % 10;
    $digito2 = ($digito2 + 7) % 10;
    $digito3 = ($digito3 + 7) % 10;
    $digito4 = ($digito4 + 7) % 10;

    //convierte los 4 dígitos en un número entero.
    $cifraEncriptada = ($digito3 * 1000) + ($digito4 * 100) + ($digito1 * 10) + $digito2;
    return $cifraEncriptada;    
}

/**
 * Recibe el número encriptado y lo devuelve desencriptado
 * @param int $encriptado
 * @return int $desencriptado
 */
function desencriptar($encriptado){
    /* $digito1, $digito2, $digito3, $digito4 enteros*/
    $digito1 = (int)($encriptado / 1000);
    $digito2 = (int)(($encriptado / 100) % 10);
    $digito3 = (int)(($encriptado / 10) % 10);
    $digito4 = (int)($encriptado % 10);

    //vuelve cada digito a su valor anterior
    $digito1 < 7 ? $digito1 = $digito1 + 3 : $digito1 = $digito1 - 7;
    $digito2 < 7 ? $digito2 = $digito2 + 3 : $digito2 = $digito2 - 7;
    $digito3 < 7 ? $digito3 = $digito3 + 3 : $digito3 = $digito3 - 7;
    $digito4 < 7 ? $digito4 = $digito4 + 3 : $digito4 = $digito4 - 7;

    //convierte los 4 dígitos en a un número entero.
    $desencriptado = ($digito3 * 1000) + ($digito4 * 100) + ($digito1 * 10) + $digito2;
    
    return $desencriptado;
}
/**
 * Programa principal Encriptar / Desencriptar
 * Recibe un número entero de 4 cifras lo encripta y devuelve un número entero.
 * Al final desencripta el número nuevamente.
 */
echo"Ingrese un numero de 4 cifras para encriptar: ";
$cifra = trim(fgets(STDIN));

$cifraEncriptada = encriptar($cifra);
$desencriptado = desencriptar($cifraEncriptada);

echo "El número encriptado es: " . $cifraEncriptada . "\n";
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "El número desencriptado es: " . $desencriptado . "\n";