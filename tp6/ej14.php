<<<<<<< HEAD
<?php
/**
 * Calcula el porcentaje de múltiplos de un número 
 * de una secuencia de números leida.
 */

$contador = 0;
$multiplo = 0;
echo "Ingrese un número para evaluar sus múltiplos: ";
$numero = trim(fgets(STDIN));

echo "¿Desea ingresar un número de la secuencia? (si/no): ";
$seguir = trim(fgets(STDIN));

while ($seguir == "si") {
    echo "Número de la secuencia: ";
    $numSecuencia = trim(fgets(STDIN));
    $contador = $contador + 1;
    if ($numSecuencia % $numero == 0){
        $multiplo = $multiplo + 1;
    }
    echo "¿Desea ingresar otro número de la secuencia? (si/no): ";
    $seguir = trim(fgets(STDIN));
}

if ($contador == 0){
    echo "No ingresaron números en la secuencia";
}else {
    $porcentaje = (int)(($multiplo * 100) / $contador);
    echo "El porcentaje de multiplos es: " . $porcentaje . "%";
=======
<?php
/**
 * Calcula el porcentaje de múltiplos de un número 
 * de una secuencia de números leida.
 */

$contador = 0;
$multiplo = 0;
echo "Ingrese un número para evaluar sus múltiplos: ";
$numero = trim(fgets(STDIN));

echo "¿Desea ingresar un número de la secuencia? (si/no): ";
$seguir = trim(fgets(STDIN));

while ($seguir == "si") {
    echo "Número de la secuencia: ";
    $numSecuencia = trim(fgets(STDIN));
    $contador = $contador + 1;
    if ($numSecuencia % $numero == 0){
        $multiplo = $multiplo + 1;
    }
    echo "¿Desea ingresar otro número de la secuencia? (si/no): ";
    $seguir = trim(fgets(STDIN));
}

if ($contador == 0){
    echo "No ingresaron números en la secuencia";
}else {
    $porcentaje = (int)(($multiplo * 100) / $contador);
    echo "El porcentaje de multiplos es: " . $porcentaje . "%";
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
}