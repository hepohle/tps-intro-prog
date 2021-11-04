<?php
/* dibujoRep */
// int $i, $j, $digito
echo "ingrese cantidad: ";
$N = trim(fgets(STDIN));
for ($i = 1; $i<=$N; $i++){
    $digito = $i % 2;
    for ($j = 1; $j <= $i; $j++){
        echo $N;
    };
    echo "\n"; //salto de línea
};
echo "\nfin dibujo";