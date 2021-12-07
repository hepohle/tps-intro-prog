<<<<<<< HEAD
<?php
 
/*
22) En un censo se recorrerá un barrio, vivienda por vivienda, realizando una encuesta
formulando el siguiente conjunto de preguntas:
a. Nombre y apellido del jefe de hogar.
b. Cantidad de habitantes que se encuentran en la vivienda.
c. Cantidad de niños menores a 18 años
 
 
Como resultado de la encuesta se desea visualizar la siguiente información:
 
         * Aca muestro el resultado de las encuestas
         * Cantidad total de encuestadas formuladas
         * Jefe de familia (con mayor cantidad de menores)
         * Maxima cantidad de menores a cargo
         * Cantidad Total de viviendas que tienen integrantes menores a 18 años
         * Promedio de la cantidad de personas por vivienda
*/
 
 
 
//PROGRAMA PRINCIPAL
   
    //int $cantEncuestas
    //int $cantViviendasConMenoresDe18
    //int $cantTotalHabitantes
 
    //int $cantMenoresDe18
    //string $jefeDeFamilia
    //int $cantHabitantesVivienda
    //int $promedioPersonasPorVivienda
    //int $maxCantDeIntegrantesMenores
 
    //string $laViviendaEsPropia
    //string $jefeDeFamiliaConMasIntegrantesMenores
 
    //float $porcentajeDeViviendasPropias
 
    echo ("\nQuiere registrar una encuesta (si/no)?: ");
    $quiereOtraEncuesta = trim(fgets(STDIN));
   
    if ($quiereOtraEncuesta == "si" || $quiereOtraEncuesta == "Si" || $quiereOtraEncuesta == "SI")
    {
        //Incializacion de variables
        $cantEncuestas=0;
        $cantTotalHabitantes=0;
        $cantViviendasPropias=0;
        $cantViviendasConMenoresDe18=0;
        $maxCantDeIntegrantesMenores=0;
        $jefeDeFamiliaConMasIntegrantesMenores = "No hay ningun Jefe de familia" ;
       
        //Pedido de la cantidad de encuestas
        echo "Ingrese la cantidad de encuestas que desea realizar: ";
        $cantEncuestas = trim(fgets(STDIN));
        //Validación de número
        while(!is_numeric($cantEncuestas)){//NOT(ES-NUMERICO(cantEncuestas))
            echo "Ingrese un número válido:";
            $cantEncuestas = trim(fgets(STDIN));
        }
        for($i=1; $i <= $cantEncuestas; $i++){
            //$cantEncuestas+=1;
            echo ("\nENCUESTA n°: ".($i)); //este es el contador de encuestas
 
            echo ("\nIngrese el nombre del jefe de la familia: ");
            $jefeDeFamilia = trim(fgets(STDIN));
               
            echo ("Ingrese la cantidad de personas que habitan la vivienda: ");
            $cantHabitantesVivienda = trim(fgets(STDIN));
            //Validacion
            while($cantHabitantesVivienda < 1){
                echo "Ha ingresado una cantidad incorrecta de habitantes. Debe ser mayor a 0.";
                $cantHabitantesVivienda = trim(fgets(STDIN));
            }
 
            //acumulo la cantidad de personas por vivienda
            $cantTotalHabitantes = ($cantTotalHabitantes + $cantHabitantesVivienda);
           
            echo ("Ingrese la cantidad de niños menores a 18 años: ");
            $cantMenoresDe18 = trim(fgets(STDIN));
            //Validacion
            while($cantHabitantesVivienda <= $cantMenoresDe18 || $cantMenoresDe18 < 0){
                echo "Ha ingresado una cantidad de menores incorrecta, debe ser un número mayor o igual a 0 y debe ser menor que la cantidad de habitantes ";
                echo "Vuelva a ingresarlo: ";
                $cantMenoresDe18 = trim(fgets(STDIN));
            }
           
            //cantidad de viviendas con menores de 18
            if ($cantMenoresDe18 > 0)
            {
                $cantViviendasConMenoresDe18 ++;
            }
 
            /*necesito quedarme con el Jefe de Familia
            que tiene la mayor cantidad de menores de 18*/
            if ($cantMenoresDe18 > $maxCantDeIntegrantesMenores)
            {
                $jefeDeFamiliaConMasIntegrantesMenores = $jefeDeFamilia;
                $maxCantDeIntegrantesMenores = $cantMenoresDe18;
            }
               
 
            echo ("La vivienda es propia (si/no) ?: ");
            $laViviendaEsPropia = trim(fgets(STDIN));
 
           
 
        }
       
        //calc el promedio de personas por vivienda
        $promedioPersonasPorVivienda = ($cantTotalHabitantes / $cantEncuestas);
 
        /**
         * SALIDA POR PANTALLA
         * Cantidad total de encuestadas formuladas
         * Jefe de familia (con mayor cantidad de menores)
         * Maxima cantidad de menores a cargo
         * Cantidad Total de viviendas que tienen integrantes menores a 18 años
         * Promedio de la cantidad de personas por vivienda
         * Porcentaje de viviendas Propias
        */
 
        echo ("\nCantidad Total de encuestas: ".$cantEncuestas);
 
        echo ("\nJefe de familia (con mayor cantidad de menores): ".$jefeDeFamiliaConMasIntegrantesMenores);
        echo ("\nMaxima cantidad de menores a cargo: ".$maxCantDeIntegrantesMenores);
 
        echo ("\nCantidad Total de viviendas que tienen integrantes menores a 18: ".$cantViviendasConMenoresDe18);
        echo ("\nPromedio de la cantidad de personas por vivienda: ".$promedioPersonasPorVivienda);
       
    }
    else
    {  
        echo ("\nNo se registrará ninguna encuesta\n");    
    }
   
//FIN DEL PROGRAMA
=======
<?php
 
/*
22) En un censo se recorrerá un barrio, vivienda por vivienda, realizando una encuesta
formulando el siguiente conjunto de preguntas:
a. Nombre y apellido del jefe de hogar.
b. Cantidad de habitantes que se encuentran en la vivienda.
c. Cantidad de niños menores a 18 años
 
 
Como resultado de la encuesta se desea visualizar la siguiente información:
 
         * Aca muestro el resultado de las encuestas
         * Cantidad total de encuestadas formuladas
         * Jefe de familia (con mayor cantidad de menores)
         * Maxima cantidad de menores a cargo
         * Cantidad Total de viviendas que tienen integrantes menores a 18 años
         * Promedio de la cantidad de personas por vivienda
*/
 
 
 
//PROGRAMA PRINCIPAL
   
    //int $cantEncuestas
    //int $cantViviendasConMenoresDe18
    //int $cantTotalHabitantes
 
    //int $cantMenoresDe18
    //string $jefeDeFamilia
    //int $cantHabitantesVivienda
    //int $promedioPersonasPorVivienda
    //int $maxCantDeIntegrantesMenores
 
    //string $laViviendaEsPropia
    //string $jefeDeFamiliaConMasIntegrantesMenores
 
    //float $porcentajeDeViviendasPropias
 
    echo ("\nQuiere registrar una encuesta (si/no)?: ");
    $quiereOtraEncuesta = trim(fgets(STDIN));
   
    if ($quiereOtraEncuesta == "si" || $quiereOtraEncuesta == "Si" || $quiereOtraEncuesta == "SI")
    {
        //Incializacion de variables
        $cantEncuestas=0;
        $cantTotalHabitantes=0;
        $cantViviendasPropias=0;
        $cantViviendasConMenoresDe18=0;
        $maxCantDeIntegrantesMenores=0;
        $jefeDeFamiliaConMasIntegrantesMenores = "No hay ningun Jefe de familia" ;
       
        //Pedido de la cantidad de encuestas
        echo "Ingrese la cantidad de encuestas que desea realizar: ";
        $cantEncuestas = trim(fgets(STDIN));
        //Validación de número
        while(!is_numeric($cantEncuestas)){//NOT(ES-NUMERICO(cantEncuestas))
            echo "Ingrese un número válido:";
            $cantEncuestas = trim(fgets(STDIN));
        }
        for($i=1; $i <= $cantEncuestas; $i++){
            //$cantEncuestas+=1;
            echo ("\nENCUESTA n°: ".($i)); //este es el contador de encuestas
 
            echo ("\nIngrese el nombre del jefe de la familia: ");
            $jefeDeFamilia = trim(fgets(STDIN));
               
            echo ("Ingrese la cantidad de personas que habitan la vivienda: ");
            $cantHabitantesVivienda = trim(fgets(STDIN));
            //Validacion
            while($cantHabitantesVivienda < 1){
                echo "Ha ingresado una cantidad incorrecta de habitantes. Debe ser mayor a 0.";
                $cantHabitantesVivienda = trim(fgets(STDIN));
            }
 
            //acumulo la cantidad de personas por vivienda
            $cantTotalHabitantes = ($cantTotalHabitantes + $cantHabitantesVivienda);
           
            echo ("Ingrese la cantidad de niños menores a 18 años: ");
            $cantMenoresDe18 = trim(fgets(STDIN));
            //Validacion
            while($cantHabitantesVivienda <= $cantMenoresDe18 || $cantMenoresDe18 < 0){
                echo "Ha ingresado una cantidad de menores incorrecta, debe ser un número mayor o igual a 0 y debe ser menor que la cantidad de habitantes ";
                echo "Vuelva a ingresarlo: ";
                $cantMenoresDe18 = trim(fgets(STDIN));
            }
           
            //cantidad de viviendas con menores de 18
            if ($cantMenoresDe18 > 0)
            {
                $cantViviendasConMenoresDe18 ++;
            }
 
            /*necesito quedarme con el Jefe de Familia
            que tiene la mayor cantidad de menores de 18*/
            if ($cantMenoresDe18 > $maxCantDeIntegrantesMenores)
            {
                $jefeDeFamiliaConMasIntegrantesMenores = $jefeDeFamilia;
                $maxCantDeIntegrantesMenores = $cantMenoresDe18;
            }
               
 
            echo ("La vivienda es propia (si/no) ?: ");
            $laViviendaEsPropia = trim(fgets(STDIN));
 
           
 
        }
       
        //calc el promedio de personas por vivienda
        $promedioPersonasPorVivienda = ($cantTotalHabitantes / $cantEncuestas);
 
        /**
         * SALIDA POR PANTALLA
         * Cantidad total de encuestadas formuladas
         * Jefe de familia (con mayor cantidad de menores)
         * Maxima cantidad de menores a cargo
         * Cantidad Total de viviendas que tienen integrantes menores a 18 años
         * Promedio de la cantidad de personas por vivienda
         * Porcentaje de viviendas Propias
        */
 
        echo ("\nCantidad Total de encuestas: ".$cantEncuestas);
 
        echo ("\nJefe de familia (con mayor cantidad de menores): ".$jefeDeFamiliaConMasIntegrantesMenores);
        echo ("\nMaxima cantidad de menores a cargo: ".$maxCantDeIntegrantesMenores);
 
        echo ("\nCantidad Total de viviendas que tienen integrantes menores a 18: ".$cantViviendasConMenoresDe18);
        echo ("\nPromedio de la cantidad de personas por vivienda: ".$promedioPersonasPorVivienda);
       
    }
    else
    {  
        echo ("\nNo se registrará ninguna encuesta\n");    
    }
   
//FIN DEL PROGRAMA
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
