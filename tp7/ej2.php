<?php

$celulares = array(
    "Moto G6",
    "Samsung J7",
    "LG K",
    "iPhone SE",
    "Galaxy A9",
);

$valor = array(
    22030.90,
    10500.00,
    27999.00,
    38105.00,
    17000.80,
);

/**
 * Recibe un numero y un array. Devuelve el valor del indice igual al numero.
 * @param int $numero
 * @param array $unArray
 * @return 
 */
function retornoData($numero, $unArray){
    foreach ($unArray as $key => $value) {
        if ($numero == $key) {
            $valorRetorno = $value;
        }
    }
    return $valorRetorno;
}

/**
 * Del array de valores devuelve la suma de todos los valores.
 * @param array $unArray
 * @return float
 */
function sumatoriaValores($unArray){
    $sum = 0;
    for ($i=0; $i < count($unArray) ; $i++) { 
        $sum = $sum + $unArray[$i];
    }
    return $sum;
}

echo "Ingrese el número del celular que quiere ver: (0 al 4) \n";
$num = trim(fgets(STDIN));

$celular = retornoData($num, $celulares);
$precio = retornoData($num, $valor);

echo "El celular es " . $celular . " y su precio es $" . $precio . "\n";

$precioTotal = sumatoriaValores($valor);
echo "El precio de todos los celulares es: " . $precioTotal . "\n";
