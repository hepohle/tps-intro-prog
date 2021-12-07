<<<<<<< HEAD
<?php

echo "Ingrese un número para obtener el factorial: ";
$num = trim(fgets(STDIN));
$factorial = 1;

for ($i=1; $i <= $num ; $i++) { 
    $factorial = $factorial * $i;
}

=======
<?php

echo "Ingrese un número para obtener el factorial: ";
$num = trim(fgets(STDIN));
$factorial = 1;

for ($i=1; $i <= $num ; $i++) { 
    $factorial = $factorial * $i;
}

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "El factorial es: " . $factorial;