<<<<<<< HEAD
<?php
//PRINCIPAL
//int $numeroPar, $numeroLimite
$numeroPar = 2;
echo "Ingrese un número. ";
$numeroLimite = trim(fgets(STDIN));
while ($numeroPar <= $numeroLimite) {
    echo $numeroPar . ",";
    $numeroPar = $numeroPar + 2;
}
=======
<?php
//PRINCIPAL
//int $numeroPar, $numeroLimite
$numeroPar = 2;
echo "Ingrese un número. ";
$numeroLimite = trim(fgets(STDIN));
while ($numeroPar <= $numeroLimite) {
    echo $numeroPar . ",";
    $numeroPar = $numeroPar + 2;
}
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "\nFIN";