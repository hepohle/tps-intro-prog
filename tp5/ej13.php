<?php

/**
 * Comprueba si el postulante cumple con los requisitos
 * @param string $sexo
 * @param int $edad
 * @param string $secundario
 * @return string
 */
function requisitos($sexo, $edad, $secundario){
    if ($sexo == "masculino"){
        if ($edad < 25){
            if ($secundario == "si"){
                $perfil = "Seleccionado";
            }else
                $perfil = "No cumple los requisitos";
        }else
            $perfil = "No cumple los requisitos";
    }elseif ($sexo == "femenino"){
        if ($edad > 30 && $edad < 40){
            if ($secundario == "si"){
                $perfil = "Seleccionado";
            }else
                $perfil = "No cumple los requisitos";
        }else
            $perfil = "No cumple los requisitos";
    }
    return $perfil;
}

echo "Ingrese su sexo: ";
$sexoUsuario = trim(fgets(STDIN));
echo "Ingrese su edad: ";
$edadUsuario = trim(fgets(STDIN));
echo "Tiene secundario completo? (si/no) ";
$secundarioCompleto = trim(fgets(STDIN));

$resultado = requisitos($sexoUsuario, $edadUsuario, $secundarioCompleto);

echo $resultado;