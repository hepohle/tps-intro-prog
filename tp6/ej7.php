<<<<<<< HEAD
<?php

echo "Ingrese el primer número: ";
$a = trim(fgets(STDIN));
echo "Ingrese el segundo número: ";
$b = trim(fgets(STDIN));
$sumatoria = 0;

if ($a % 2 == 0){
    $inicio = $a + 1;
}else
    $inicio = $a + 2;

for ($i=$inicio; $i < $b ; $i = $i +2) { 
    $sumatoria = $sumatoria + $i; 
}

=======
<?php

echo "Ingrese el primer número: ";
$a = trim(fgets(STDIN));
echo "Ingrese el segundo número: ";
$b = trim(fgets(STDIN));
$sumatoria = 0;

if ($a % 2 == 0){
    $inicio = $a + 1;
}else
    $inicio = $a + 2;

for ($i=$inicio; $i < $b ; $i = $i +2) { 
    $sumatoria = $sumatoria + $i; 
}

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "La suma es: " . $sumatoria;