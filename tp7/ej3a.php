<?php

function cargarMascotas(){
    $mascota1 = [
        "nombre" => "Gonzo",
        "edad" => 9,
        "tipo" => "perro",
    ];
    
    $mascota2 = [
        "nombre" => "Peggy",
        "edad" => 3,
        "tipo" => "puerco",
    ];
    
    $mascota3 = [
        "nombre" => "Harry",
        "edad" => 4,
        "tipo" => "hamster",
    ];
    
    $misMascotas[0] = $mascota1;
    $misMascotas[1] = $mascota2;
    $misMascotas[2] = $mascota3;

    return $misMascotas;
}

/**
 * Muestra las mascotas guardadas en el array.
 * @param array
 */
function mostrarMascotas($misMascotas){
    $i=1;
    foreach ($misMascotas as $mascota) {
        echo"Mascota " . $i . ": " . $mascota["nombre"] . " es " . $mascota["tipo"] . " de " . $mascota["edad"] . " años.\n";
    }
}

/**
 * Busca a la primera mascota con edad menor a un entero dado.
 * @param int $num
 * @param array $unArray
 * @return int
 */
function buscarPrimerMenorA($num, $unArray){
    $i=0;
    $corte = -1;
    while ($i < count($unArray) && $corte == -1) {
        if ($unArray[$i]["edad"] < $num) {
            $corte = $i;
        }
        $i++;
    }
    return $corte;
}

$mascotas = cargarMascotas();
mostrarMascotas($mascotas);
echo "Ingrese una edad: \n";
$edad = trim(fgets(STDIN));
$var = buscarPrimerMenorA($edad, $mascotas);

if ($var == -1) {
    echo "No se encontro una mascota menor a " . $edad . ".\n";
}else
    echo $mascotas[$var]["nombre"] . " es menor a " . $edad . ".\n";
