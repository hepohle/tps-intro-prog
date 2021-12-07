<<<<<<< HEAD
<?php

/**
 * Calcula si la nota ingresada aprueba o no el examen y si es una nota válida
 * @param int $nota
 * @return string
 */
function aproboDesaprobo($nota){
    if ($nota >= 4 && $nota <= 10){
        $tipoDeNota = "Aprobó";
    }elseif ($nota >= 0 && $nota < 4){
        $tipoDeNota = "Desaprobó";
    }else{
        $tipoDeNota = "Nota no válida";
    }
    return $tipoDeNota;
}

echo "Ingrese su nota: ";
//String $resultado
$notaEstudiante = trim(fgets(STDIN));
$resultado = aproboDesaprobo($notaEstudiante);
=======
<?php

/**
 * Calcula si la nota ingresada aprueba o no el examen y si es una nota válida
 * @param int $nota
 * @return string
 */
function aproboDesaprobo($nota){
    if ($nota >= 4 && $nota <= 10){
        $tipoDeNota = "Aprobó";
    }elseif ($nota >= 0 && $nota < 4){
        $tipoDeNota = "Desaprobó";
    }else{
        $tipoDeNota = "Nota no válida";
    }
    return $tipoDeNota;
}

echo "Ingrese su nota: ";
//String $resultado
$notaEstudiante = trim(fgets(STDIN));
$resultado = aproboDesaprobo($notaEstudiante);
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo $resultado;