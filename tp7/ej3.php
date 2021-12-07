<?php

function leerDatosCirco(){
    echo "Ingrese el nombre: \n";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese inicio: \n";
    $finicio = trim(fgets(STDIN));
    echo "Ingrese valor de la entrada: \n";
    $valorEntrada = trim(fgets(STDIN));
    echo "Ingrese la cantidad de payasos: \n";
    $cantPayasos = trim(fgets(STDIN));

    $arrayCirco = array(
        "nombre" => $nombre,
        "finicio" => $finicio,
        "valorEntrada" => $valorEntrada,
        "cantPayasos" => $cantPayasos,
    );
    return $arrayCirco;
};

$circo = leerDatosCirco();

print_r($circo);