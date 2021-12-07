<<<<<<< HEAD
<?php

$i = 0;
$suma = 0;
echo "Desea ingresar un sueldo? (s/n)";
$respuesta = trim(fgets(STDIN));
$promedio = 0;
while ($respuesta == "s"){
    echo "Ingrese un sueldo: ";
    $sueldo = trim(fgets(STDIN));
    $suma = $suma + $sueldo;
    $i ++;
    echo "Desea ingresar un sueldo? (s/n)";
    $respuesta = trim(fgets(STDIN));
    $promedio = $suma / $i;
} 
=======
<?php

$i = 0;
$suma = 0;
echo "Desea ingresar un sueldo? (s/n)";
$respuesta = trim(fgets(STDIN));
$promedio = 0;
while ($respuesta == "s"){
    echo "Ingrese un sueldo: ";
    $sueldo = trim(fgets(STDIN));
    $suma = $suma + $sueldo;
    $i ++;
    echo "Desea ingresar un sueldo? (s/n)";
    $respuesta = trim(fgets(STDIN));
    $promedio = $suma / $i;
} 
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "El promedio es " . $promedio .  "\n";