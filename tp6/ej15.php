<<<<<<< HEAD
<?php

echo "Ingrese el número a encontrar: ";
$numX = trim(fgets(STDIN));
$numSalir = -1;

echo "Ingrese número para la secuencia: ";
$numSecuencia = trim(fgets(STDIN));

while ($numX != $numSecuencia && $numSalir != $numSecuencia) {
    echo "Ingrese número para la secuencia: ";
    $numSecuencia = trim(fgets(STDIN)); 
}

if ($numX == $numSecuencia){
    echo $numX . " fue encontrado!";
}elseif ($numSalir == $numSecuencia ) {
    echo $numX . " No fue encontrado!";
=======
<?php

echo "Ingrese el número a encontrar: ";
$numX = trim(fgets(STDIN));
$numSalir = -1;

echo "Ingrese número para la secuencia: ";
$numSecuencia = trim(fgets(STDIN));

while ($numX != $numSecuencia && $numSalir != $numSecuencia) {
    echo "Ingrese número para la secuencia: ";
    $numSecuencia = trim(fgets(STDIN)); 
}

if ($numX == $numSecuencia){
    echo $numX . " fue encontrado!";
}elseif ($numSalir == $numSecuencia ) {
    echo $numX . " No fue encontrado!";
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
}