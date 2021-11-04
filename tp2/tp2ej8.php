<?php
/* usuari ingresa su nombre y recibe un mensaje de bienvenida */
    echo "Ingrese su nombre: ";
    $nombre = trim(fgets(STDIN));
    echo "Bienvenido/a a la programación ".$nombre."!";