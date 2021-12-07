<<<<<<< HEAD
<?php

/**
 * Calcula la superficie del cuadro
 * @param float $anchoCuadro
 * @param float $largoCuadro
 * @return float
 */
function calcularSuperficie($anchoCuadro, $largoCuadro){
    $supCuadro = $anchoCuadro * $largoCuadro;
    return $supCuadro;
}

/**
 * Calcula el precio final del cuadro, según su clasificación, superficie y precio base.
 * @param string $clasifCuadro
 * @param float $superficie
 * @param float $precioBase
 * @return float
 */
function calcularPrecio($clasifCuadro, $superficie, $precioBase){
    if ($clasifCuadro == "P" || $clasifCuadro == "M"){
        $precioFinal = $precioBase + ($precioBase * 0.15);
    }elseif ($clasifCuadro == "E"){
        $precioFinal = $precioBase + ($precioBase * 0.05);
    }else
        $precioFinal = $precioBase + ($precioBase * 0.02);
    //Agrega un porcentaje al precio según la superficie.
    if ($superficie > 2){
        $precioFinal = $precioFinal + ($precioFinal * 0.10);
    }elseif ($superficie > 1 && $superficie <= 2){
        $precioFinal = $precioFinal + ($precioFinal * 0.08);
    }else
        $precioFinal;
    return $precioFinal;
}

//Calcula la superficie del cuadro y el precio final
echo "Ingrese la medida del ancho del cuadro (en metros): ";
$ancho = trim(fgets(STDIN));
echo "Ingrese la medida del largo del cuadro (en metros): ";
$largo = trim(fgets(STDIN));
echo "Ingrese la clasificación del cuadro (P, M, E, B): ";
$clasificacion = trim(fgets(STDIN));
echo "Ingrese el precio base del cuadro: ";
$precioB = trim(fgets(STDIN));

//Calcula superficie
$superficie = calcularSuperficie($ancho, $largo);

//Calcula el precio final
$precioF = calcularPrecio($clasificacion, $superficie, $precioB);

=======
<?php

/**
 * Calcula la superficie del cuadro
 * @param float $anchoCuadro
 * @param float $largoCuadro
 * @return float
 */
function calcularSuperficie($anchoCuadro, $largoCuadro){
    $supCuadro = $anchoCuadro * $largoCuadro;
    return $supCuadro;
}

/**
 * Calcula el precio final del cuadro, según su clasificación, superficie y precio base.
 * @param string $clasifCuadro
 * @param float $superficie
 * @param float $precioBase
 * @return float
 */
function calcularPrecio($clasifCuadro, $superficie, $precioBase){
    if ($clasifCuadro == "P" || $clasifCuadro == "M"){
        $precioFinal = $precioBase + ($precioBase * 0.15);
    }elseif ($clasifCuadro == "E"){
        $precioFinal = $precioBase + ($precioBase * 0.05);
    }else
        $precioFinal = $precioBase + ($precioBase * 0.02);
    //Agrega un porcentaje al precio según la superficie.
    if ($superficie > 2){
        $precioFinal = $precioFinal + ($precioFinal * 0.10);
    }elseif ($superficie > 1 && $superficie <= 2){
        $precioFinal = $precioFinal + ($precioFinal * 0.08);
    }else
        $precioFinal;
    return $precioFinal;
}

//Calcula la superficie del cuadro y el precio final
echo "Ingrese la medida del ancho del cuadro (en metros): ";
$ancho = trim(fgets(STDIN));
echo "Ingrese la medida del largo del cuadro (en metros): ";
$largo = trim(fgets(STDIN));
echo "Ingrese la clasificación del cuadro (P, M, E, B): ";
$clasificacion = trim(fgets(STDIN));
echo "Ingrese el precio base del cuadro: ";
$precioB = trim(fgets(STDIN));

//Calcula superficie
$superficie = calcularSuperficie($ancho, $largo);

//Calcula el precio final
$precioF = calcularPrecio($clasificacion, $superficie, $precioB);

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "La superficie del cuadro es: " . $superficie . " m2 y el precio del cuadro es $" . $precioF;