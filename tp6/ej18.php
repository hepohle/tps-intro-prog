<<<<<<< HEAD
<?php

echo "Ingrese una palabra: ( . para finalizar) ";
$palabra = trim(fgets(STDIN));
$frase = "";
$fin = ".";

while ($palabra <> $fin) {
    $frase = $palabra . " " . $frase;
    echo "Ingrese una palabra: ( . para finalizar) ";
    $palabra = trim(fgets(STDIN));   
}
=======
<?php

echo "Ingrese una palabra: ( . para finalizar) ";
$palabra = trim(fgets(STDIN));
$frase = "";
$fin = ".";

while ($palabra <> $fin) {
    $frase = $palabra . " " . $frase;
    echo "Ingrese una palabra: ( . para finalizar) ";
    $palabra = trim(fgets(STDIN));   
}
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo $frase;