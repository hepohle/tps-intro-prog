<?php
//PROGRAMA PRINCIPAL
echo "¿Cuantas encuestas desea ingresar? ";
$cantidad = trim(fgets(STDIN));

if ($cantidad == 0){
	echo "Fin programa";
}else{

$cantViviendaMenores = 0;
$menores = 0;
$cantHabVivienda = 0;
$nombreJefeMenores = 0;

for ($i = 0; $i < $cantidad; $i++) {
    
	echo "Nombre del jefe de hogar: ";
	$nombre = trim(fgets(STDIN));
	echo "Cantidad de habitantes en la vivienda: ";
	$cantHabitantes = trim(fgets(STDIN));
	echo "Cantidad de niños menores a 18 años: ";
	$cantMenores = trim(fgets(STDIN));
	if ($cantMenores > 0) {
    	$cantViviendaMenores = $cantViviendaMenores + 1;
	}
	if ($cantMenores > $menores) {
    	$menores = $cantMenores;
    	$nombreJefeMenores = $nombre;
	}
    $cantHabVivienda = $cantHabVivienda + $cantHabitantes;
}

$promedioCantPersonas = $cantHabVivienda / $cantidad;

echo "Cantidad de encuestas formuladas: " . $cantidad . "\n";
echo "Cantidad de viviendas con menores de 18 años: " . $cantViviendaMenores . "\n";
echo "Nombre del jefe de familia con mayor cantidad de menores en la vivienda: " . $nombreJefeMenores . "\n";
echo "Promedio de la cantidad de personas por vivienda: " . $promedioCantPersonas;
}