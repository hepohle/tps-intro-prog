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
echo $resultado;