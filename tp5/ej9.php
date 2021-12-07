<<<<<<< HEAD
<?php

/**
 * Calcula el indice de masa corporal a partir del peso en kilogramos y la altura en metros.
 * @param float $peso
 * @param floatt @altura
 * @return float $imc
 */
function calcImc($peso, $altura){
    $imc = $peso / pow($altura,2);
    return $imc;
}

/**
 * Se ingresa el imc y devuelve el estado nutricional.
 * @param float $imc
 * @return string $valor
 */
function valorImc($imc){
    if ($imc < 18.50){
        $valor = "Bajo peso";
    }elseif ($imc >= 18.50 && $imc <= 24.99){
        $valor = "Normal";
    }elseif ($imc >= 25.0 && $imc <= 29.99){
        $valor = "Sobrepeso";
    }elseif ($imc >= 30.0 && $imc <= 34.99){
        $valor = "Obesidad leve";
    }elseif ($imc >= 35.0 && $imc <= 39.99){
        $valor = "Obesidad media";
    }elseif ($imc >= 40.00){
        $valor = "Obesidad mórbida";
    }
    return $valor;
}

echo "Ingrese su peso en kilogramos: ";
$peso = trim(fgets(STDIN));
echo "Ingrese su altura en metros: ";
$altura = trim(fgets(STDIN));

$indice = calcImc($peso, $altura);
$valor = valorImc($indice);

=======
<?php

/**
 * Calcula el indice de masa corporal a partir del peso en kilogramos y la altura en metros.
 * @param float $peso
 * @param floatt @altura
 * @return float $imc
 */
function calcImc($peso, $altura){
    $imc = $peso / pow($altura,2);
    return $imc;
}

/**
 * Se ingresa el imc y devuelve el estado nutricional.
 * @param float $imc
 * @return string $valor
 */
function valorImc($imc){
    if ($imc < 18.50){
        $valor = "Bajo peso";
    }elseif ($imc >= 18.50 && $imc <= 24.99){
        $valor = "Normal";
    }elseif ($imc >= 25.0 && $imc <= 29.99){
        $valor = "Sobrepeso";
    }elseif ($imc >= 30.0 && $imc <= 34.99){
        $valor = "Obesidad leve";
    }elseif ($imc >= 35.0 && $imc <= 39.99){
        $valor = "Obesidad media";
    }elseif ($imc >= 40.00){
        $valor = "Obesidad mórbida";
    }
    return $valor;
}

echo "Ingrese su peso en kilogramos: ";
$peso = trim(fgets(STDIN));
echo "Ingrese su altura en metros: ";
$altura = trim(fgets(STDIN));

$indice = calcImc($peso, $altura);
$valor = valorImc($indice);

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "Su imc es: " . round($indice, 2) . ". Su estado nutricional: " . $valor . ".\n";