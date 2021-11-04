<?php

function calcularSueldo($categoria, $antiguedad, $cargo){
    if ($cargo = "director"){
        $sueldo = 65952;
    } elseif ($cargo = "jefe"){
        $sueldo = 48000;
    }else
        if($categoria = 1){
            $sueldo = 35000;
        }else
            $sueldo = 30000;
    if ($antiguedad > 15){
        $sueldo = $sueldo * 1.10;
    }
    return $sueldo;
}

echo "Ingrese cargo: ";
$cargo = trim(fgets(STDIN));
echo "Ingrese categoria: ";
$categoria = trim(fgets(STDIN));
echo "Ingrese antiguedad: ";
$antiguedad = trim(fgets(STDIN));

$sueldoTotal = calcularSueldo($cargo, $antiguedad, $categoria);
echo "Su sueldo es de: $" . $sueldoTotal;