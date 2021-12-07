<<<<<<< HEAD
<?php

echo "Ingrese un numero: ";
$a = trim(fgets(STDIN));
$num = 2;
$den = 1;

$acum = 0;
for ($i=0; $i < $a; $i++) { 
    $sumaFraccion = $num / $den;
    $acum = $acum + $sumaFraccion;
    $aux = $num + $den;
    $den = $num;
    $num = $aux;
}

=======
<?php

echo "Ingrese un numero: ";
$a = trim(fgets(STDIN));
$num = 2;
$den = 1;

$acum = 0;
for ($i=0; $i < $a; $i++) { 
    $sumaFraccion = $num / $den;
    $acum = $acum + $sumaFraccion;
    $aux = $num + $den;
    $den = $num;
    $num = $aux;
}

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "La sumatoria es: " . $acum;