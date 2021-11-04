<?php


function calcularDiscriminante($a, $b, $c){
    $discriminante = (($b * $b) - (4 * $a * $c));
    return $discriminante;
}

echo "Ingrese el coeficiente del término cuadrático: ";
$coefA = trim(fgets(STDIN));
echo "Ingrese el coeficiente del término lineal: ";
$coefB = trim(fgets(STDIN));
echo "Ingrese el coeficiente del término independiente: ";
$coefC = trim(fgets(STDIN));

$discriminante = calcularDiscriminante($coefA, $coefB, $coefC);
echo $discriminante. "\n";
if ($discriminante >= 0){
    $resultado =  (($coefB * (-1)) + abs(sqrt($discriminante))) / 2 * $coefA;
    $raiz1 = round($resultado,2);
    $raiz2 = round(($resultado * (-1)),2);

    echo "Los resultados son: " . $raiz1 . " y " . $raiz2 . ".\n";
}else
    $error = "No tiene solución en los reales.";
    echo $error;

