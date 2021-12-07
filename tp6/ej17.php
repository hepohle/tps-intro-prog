<<<<<<< HEAD
<?php

echo "Ingrese una letra: ( - para finalizar) ";
$letra = trim(fgets(STDIN));

$contador = 0;
$final = "-";

while ($letra <> $final) {
    if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){
        $contador ++;
    }
    echo "Ingrese una letra: ( - para finalizar) ";
    $letra = trim(fgets(STDIN));
}

=======
<?php

echo "Ingrese una letra: ( - para finalizar) ";
$letra = trim(fgets(STDIN));

$contador = 0;
$final = "-";

while ($letra <> $final) {
    if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){
        $contador ++;
    }
    echo "Ingrese una letra: ( - para finalizar) ";
    $letra = trim(fgets(STDIN));
}

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "Cantidad de vocales: " . $contador;