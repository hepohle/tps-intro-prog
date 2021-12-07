<<<<<<< HEAD
<?php
/**
 * Calcula el perimetro de un triangulo equilatero
 * A pertir del valor de un lado.
 * @param float $lado
 * @return float
*/
function perimetro($lado){
    $perimetro = $lado * 3;
    return $perimetro;
}

/**
 * Calcula el valor de la altura de un triangulo equilatero
 * A partir del valor de un lado
 * @param float $lado
 * @return float
 */
function altura($lado){
    //$altura = sqrt(pow($lado, 2) - pow(($lado / 2), 2));
    $altura = (sqrt(3) * $lado) / 2;
    return $altura;
}

/**
 * Calcula el area de un triangulo
 * @param float $lado
 * @return float
 */
function areaTriang($lado){
    $area = ($lado * altura($lado)) / 2;
    return $area;
}

echo "Ingrese el valor del lado del triángulo: ";
$lado1 = trim(fgets(STDIN));

=======
<?php
/**
 * Calcula el perimetro de un triangulo equilatero
 * A pertir del valor de un lado.
 * @param float $lado
 * @return float
*/
function perimetro($lado){
    $perimetro = $lado * 3;
    return $perimetro;
}

/**
 * Calcula el valor de la altura de un triangulo equilatero
 * A partir del valor de un lado
 * @param float $lado
 * @return float
 */
function altura($lado){
    //$altura = sqrt(pow($lado, 2) - pow(($lado / 2), 2));
    $altura = (sqrt(3) * $lado) / 2;
    return $altura;
}

/**
 * Calcula el area de un triangulo
 * @param float $lado
 * @return float
 */
function areaTriang($lado){
    $area = ($lado * altura($lado)) / 2;
    return $area;
}

echo "Ingrese el valor del lado del triángulo: ";
$lado1 = trim(fgets(STDIN));

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "Dado un triángulo equilátero de lado ". $lado1. "cm, su perímetro es ". perimetro($lado1)." y su área es ". areaTriang($lado1). " cm2\n";