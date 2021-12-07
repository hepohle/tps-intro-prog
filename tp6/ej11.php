<<<<<<< HEAD
<?php

echo "Ingrese un número para calcular la sumatoria: ";
$num = trim(fgets(STDIN));
$sumatoria = 3;
$acum = 1;
for ($i=1; $i < $num; $i++) { 
    $acum = $acum + $sumatoria;
    $sumatoria = $sumatoria +2;
}

=======
<?php

echo "Ingrese un número para calcular la sumatoria: ";
$num = trim(fgets(STDIN));
$sumatoria = 3;
$acum = 1;
for ($i=1; $i < $num; $i++) { 
    $acum = $acum + $sumatoria;
    $sumatoria = $sumatoria +2;
}

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "La sumatoria es: " . $acum;