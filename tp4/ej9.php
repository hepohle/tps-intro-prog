<<<<<<< HEAD
<?php

/**
 * Calcula el perimetro de la base del cilindro.
 * @param float $radio
 * @return float $perimetro
 */
function perimetro($radio){
    //
    $perimetro = 2 * M_PI * $radio;
    return round($perimetro,2);
}

/**
 * Calcula área de la base del cilindro.
 * @param float $radio
 * @return float $areaB
 */
function areaBase($radio){
    $areaB = M_PI * pow($radio,2);
    return round($areaB, 2);
}

/**
 * Calcula el área lateral del cilindro.
 * @param float $radio
 * @param float $altura
 * @return float $areaLateral
 */
function areaLateral($radio, $altura){
    $areaLateral = 2 * M_PI * $radio * $altura;
    return round($areaLateral,2);
}

/**
 * Calcula el área total del cilindro.
 * @param float $radio
 * @param float $altura
 * @return float $areaTotal
 */
function areaTotal($radio, $altura){
    $areaTotal = ($altura + $radio) * 2 * M_PI * $radio;
    return round($areaTotal,2);
}

/**
 * Calcula el volumen del cilindro.
 * @param float $radio
 * @param float $altura
 * @return float $volumen
 */
function volumenCilindro($radio, $altura){
    $volumen = (M_PI * pow($radio,2)) * $altura;
    return round($volumen, 2);
}

echo "Ingrese la altura del cilindro: ";
$alturaCilindro = trim(fgets(STDIN));
echo "Ingrese el radio del cilindro: ";
$radioCilindro = trim(fgets(STDIN));

echo "Cilindro con h=". $alturaCilindro . " y r=" . $radioCilindro . ":\n";
echo "Longitud de la circunferencia de la base (cm) = " . perimetro($radioCilindro) . "\n";
echo "Superficie de la base del cilindro (cm2) = " . areaBase($radioCilindro) . "\n";
echo "Superficie lateral del cilindro (cm2) = " . areaLateral($radioCilindro, $alturaCilindro) . "\n";
echo "Superficie total del cilindro (cm2) = " . areaTotal($radioCilindro, $alturaCilindro) . "\n";
=======
<?php

/**
 * Calcula el perimetro de la base del cilindro.
 * @param float $radio
 * @return float $perimetro
 */
function perimetro($radio){
    //
    $perimetro = 2 * M_PI * $radio;
    return round($perimetro,2);
}

/**
 * Calcula área de la base del cilindro.
 * @param float $radio
 * @return float $areaB
 */
function areaBase($radio){
    $areaB = M_PI * pow($radio,2);
    return round($areaB, 2);
}

/**
 * Calcula el área lateral del cilindro.
 * @param float $radio
 * @param float $altura
 * @return float $areaLateral
 */
function areaLateral($radio, $altura){
    $areaLateral = 2 * M_PI * $radio * $altura;
    return round($areaLateral,2);
}

/**
 * Calcula el área total del cilindro.
 * @param float $radio
 * @param float $altura
 * @return float $areaTotal
 */
function areaTotal($radio, $altura){
    $areaTotal = ($altura + $radio) * 2 * M_PI * $radio;
    return round($areaTotal,2);
}

/**
 * Calcula el volumen del cilindro.
 * @param float $radio
 * @param float $altura
 * @return float $volumen
 */
function volumenCilindro($radio, $altura){
    $volumen = (M_PI * pow($radio,2)) * $altura;
    return round($volumen, 2);
}

echo "Ingrese la altura del cilindro: ";
$alturaCilindro = trim(fgets(STDIN));
echo "Ingrese el radio del cilindro: ";
$radioCilindro = trim(fgets(STDIN));

echo "Cilindro con h=". $alturaCilindro . " y r=" . $radioCilindro . ":\n";
echo "Longitud de la circunferencia de la base (cm) = " . perimetro($radioCilindro) . "\n";
echo "Superficie de la base del cilindro (cm2) = " . areaBase($radioCilindro) . "\n";
echo "Superficie lateral del cilindro (cm2) = " . areaLateral($radioCilindro, $alturaCilindro) . "\n";
echo "Superficie total del cilindro (cm2) = " . areaTotal($radioCilindro, $alturaCilindro) . "\n";
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "Volumen del cilindro (cm3) = " . volumenCilindro($radioCilindro, $alturaCilindro) . "\n";