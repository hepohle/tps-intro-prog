<<<<<<< HEAD
<?php

echo "¿Cuantas palabras desea ingresar? ";
$cantidad = trim(fgets(STDIN));

for ($i=0; $i < $cantidad; $i++) { 
    echo "Ingrese palabra: ";
    $palabra = trim(fgets(STDIN));
    echo "Su palabra " . $i + 1 . " es " . $palabra . "\n";
=======
<?php

echo "¿Cuantas palabras desea ingresar? ";
$cantidad = trim(fgets(STDIN));

for ($i=0; $i < $cantidad; $i++) { 
    echo "Ingrese palabra: ";
    $palabra = trim(fgets(STDIN));
    echo "Su palabra " . $i + 1 . " es " . $palabra . "\n";
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
}