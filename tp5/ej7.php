<?php

function kilometros($kmTotal){
    if ($kmTotal <= 300){
        $cobro = 850;
    }elseif ($kmTotal > 300 && $kmTotal <= 1000){
        $cobro = 850 + ($kmTotal - 300) * 10.5;
    }else
        $cobro = 850 + (10.5 * 700) + (8.5 * ($kmTotal - 1000));
    return $cobro;
}

function impuesto($cobro){
    $impuesto = $cobro * 0.21;
    return $impuesto;
}


echo "Ingrese la cantidad de km recorridos: ";
$kmts = trim(fgets(STDIN));
$cobro = kilometros($kmts);
$iva = impuesto($cobro);
$sinImp = $cobro - $iva;
echo "Total pagar $" . $cobro . "\n";
echo "Pagar: $" . $sinImp . " + $" . $iva . " de impuestos";