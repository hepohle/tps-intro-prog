<<<<<<< HEAD
<?php

echo "Ingrese un número para calcular la sumatoria: ";
$num = trim(fgets(STDIN));
$sumatoria = 0;

for ($i=1; $i <= $num ; $i++) { 
    $sumatoria = $sumatoria + $i;
}

=======
<?php

echo "Ingrese un número para calcular la sumatoria: ";
$num = trim(fgets(STDIN));
$sumatoria = 0;

for ($i=1; $i <= $num ; $i++) { 
    $sumatoria = $sumatoria + $i;
}

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "La sumatoria es: " . $sumatoria;