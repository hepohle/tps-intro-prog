<<<<<<< HEAD
<?php

echo "Cuantos números desea sumar?: ";
$acum = trim(fgets(STDIN));
$suma = 0;

for ($i=1; $i <= $acum; $i++) { 
    echo "Ingrese el nro " . $i . ": ";
    $a = trim(fgets(STDIN));
    $suma = $suma + $a;
}

=======
<?php

echo "Cuantos números desea sumar?: ";
$acum = trim(fgets(STDIN));
$suma = 0;

for ($i=1; $i <= $acum; $i++) { 
    echo "Ingrese el nro " . $i . ": ";
    $a = trim(fgets(STDIN));
    $suma = $suma + $a;
}

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "La suma es: " . $suma;