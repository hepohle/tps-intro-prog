<<<<<<< HEAD
<?php

$continuar = "si";
$contador = 0;
$totalTuristas = 0;
$totalIngresos = 0;
$turistasSanMartin = 0;
$promedioIngresos = 0;
$porcentajeTuristasSanMartin = 0;
$destinoMayorTuristas = 0;
$nombreDestinoMayor = "";
do {
    $contador ++;
    echo "Nombre del destino turístico: ";
    $destino = trim(fgets(STDIN));
    
    echo "Cantidad de turistas: ";
    $cantidadTuristas = trim(fgets(STDIN));

    echo "Ingreso (en millones de dolares): ";
    $ingresos = trim(fgets(STDIN));

    if ($destino == "san martin"){
        $turistasSanMartin = $cantidadTuristas;
    }

    if ($cantidadTuristas > $destinoMayorTuristas) {
        $destinoMayorTuristas = $cantidadTuristas;
        $nombreDestinoMayor = $destino;
    }

    $totalIngresos = $totalIngresos + $ingresos;
    $totalTuristas = $totalTuristas + $cantidadTuristas;
    
    $porcentajeTuristasSanMartin = ($turistasSanMartin * 100) / $totalTuristas;
    
    $promedioIngresos = $totalIngresos / $contador;

    echo "Desea ingresar otro destino? ";
    $continuar = trim(fgets(STDIN));

} while ($continuar == "si");

echo "Promedio de ingresos (en millones de dolares: " . $promedioIngresos . "\n";
echo "Porcentaje de turistas con destino San Martin: " . $porcentajeTuristasSanMartin . "%\n";
=======
<?php

$continuar = "si";
$contador = 0;
$totalTuristas = 0;
$totalIngresos = 0;
$turistasSanMartin = 0;
$promedioIngresos = 0;
$porcentajeTuristasSanMartin = 0;
$destinoMayorTuristas = 0;
$nombreDestinoMayor = "";
do {
    $contador ++;
    echo "Nombre del destino turístico: ";
    $destino = trim(fgets(STDIN));
    
    echo "Cantidad de turistas: ";
    $cantidadTuristas = trim(fgets(STDIN));

    echo "Ingreso (en millones de dolares): ";
    $ingresos = trim(fgets(STDIN));

    if ($destino == "san martin"){
        $turistasSanMartin = $cantidadTuristas;
    }

    if ($cantidadTuristas > $destinoMayorTuristas) {
        $destinoMayorTuristas = $cantidadTuristas;
        $nombreDestinoMayor = $destino;
    }

    $totalIngresos = $totalIngresos + $ingresos;
    $totalTuristas = $totalTuristas + $cantidadTuristas;
    
    $porcentajeTuristasSanMartin = ($turistasSanMartin * 100) / $totalTuristas;
    
    $promedioIngresos = $totalIngresos / $contador;

    echo "Desea ingresar otro destino? ";
    $continuar = trim(fgets(STDIN));

} while ($continuar == "si");

echo "Promedio de ingresos (en millones de dolares: " . $promedioIngresos . "\n";
echo "Porcentaje de turistas con destino San Martin: " . $porcentajeTuristasSanMartin . "%\n";
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
echo "Nombre del destino con mayor cantidad de turistas: " . $nombreDestinoMayor . "\n";