<<<<<<< HEAD
<?php

/**
 * Calcula el area de una circunferencia a partir del radio.
 * @param float $radio
 * @return float $area
 */
function areaCirculo($radio){
    $area = M_PI * ($radio * $radio);
    return $area;
}

/**
 * Calcula el área de la corona calculando la diferencia de áreas.
 * @param float $radio1
 * @param float $radio2
 * @return float $areaC
 */
function diferenciaAreas($radio1, $radio2){
    //Float $areaCorona
    $areaC = areaCirculo($radio1) - areaCirculo($radio2);
    return $areaC;
}

echo "Ingrese el valor del radio mayor: ";
$radioMayor = trim(fgets(STDIN));
echo "Ingrese el valor del radio menor: ";
$radioMenor = trim(fgets(STDIN));

$areaCorona = diferenciaAreas($radioMayor, $radioMenor);

=======
<?php

/**
 * Calcula el area de una circunferencia a partir del radio.
 * @param float $radio
 * @return float $area
 */
function areaCirculo($radio){
    $area = M_PI * ($radio * $radio);
    return $area;
}

/**
 * Calcula el área de la corona calculando la diferencia de áreas.
 * @param float $radio1
 * @param float $radio2
 * @return float $areaC
 */
function diferenciaAreas($radio1, $radio2){
    //Float $areaCorona
    $areaC = areaCirculo($radio1) - areaCirculo($radio2);
    return $areaC;
}

echo "Ingrese el valor del radio mayor: ";
$radioMayor = trim(fgets(STDIN));
echo "Ingrese el valor del radio menor: ";
$radioMenor = trim(fgets(STDIN));

$areaCorona = diferenciaAreas($radioMayor, $radioMenor);

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "El área de la corona es: ". round($areaCorona, 2) . " cm2." ;