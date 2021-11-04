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
echo "\nFIN";