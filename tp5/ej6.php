<<<<<<< HEAD
<?php

function factorMes($nombreMes){
    if ($nombreMes == "enero" || $nombreMes == "febrero" || $nombreMes == "marzo"){
        $factorMes = 15;
    } elseif ($nombreMes == "abril" || $nombreMes == "mayo" || $nombreMes == "junio"){
        $factorMes = 17;
    } elseif ($nombreMes == "julio" || $nombreMes == "agosto"){
        $factorMes = 19;
    } elseif ($nombreMes == "septiembre" || $nombreMes == "octubre" || $nombreMes == "noviembre"){
        $factorMes = 20;
    } elseif ($nombreMes == "diciembre"){
        $factorMes = 21;
    } 
    return $factorMes;
}

echo "Ingrese el nombre del mes: ";
$mes = trim(fgets(STDIN));
$factor = factorMes($mes);
echo "Ingrese la cantidad de articulos producidos en el mes: ";
$productos = trim(fgets(STDIN));
$productividad = $factor * $productos;

=======
<?php

function factorMes($nombreMes){
    if ($nombreMes == "enero" || $nombreMes == "febrero" || $nombreMes == "marzo"){
        $factorMes = 15;
    } elseif ($nombreMes == "abril" || $nombreMes == "mayo" || $nombreMes == "junio"){
        $factorMes = 17;
    } elseif ($nombreMes == "julio" || $nombreMes == "agosto"){
        $factorMes = 19;
    } elseif ($nombreMes == "septiembre" || $nombreMes == "octubre" || $nombreMes == "noviembre"){
        $factorMes = 20;
    } elseif ($nombreMes == "diciembre"){
        $factorMes = 21;
    } 
    return $factorMes;
}

echo "Ingrese el nombre del mes: ";
$mes = trim(fgets(STDIN));
$factor = factorMes($mes);
echo "Ingrese la cantidad de articulos producidos en el mes: ";
$productos = trim(fgets(STDIN));
$productividad = $factor * $productos;

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "La productividad del mes: " . $mes . " es " . $productividad . ".\n";