<<<<<<< HEAD
<?php
/*recibe un numero de 4 cifras y lo encripta*/
    echo"Ingrese un numero de 4 cifras para encriptar: ";
    $cifra = trim(fgets(STDIN));
    $digito4 = $cifra % 10;
    $digito3 = (int)(($cifra/10) % 10);
    $digito2 = (int)(($cifra/100) % 10);
    $digito1 = (int)($cifra/1000);

    //encripta el valor
    $digito1 = ($digito1 + 7) % 10;
    $digito2 = ($digito2 + 7) % 10;
    $digito3 = ($digito3 + 7) % 10;
    $digito4 = ($digito4 + 7) % 10;

    //cambia de lugar los digitos
    $cifraEncriptada = ($digito3 * 1000) + ($digito4 * 100) + ($digito1 * 10) + $digito2;

=======
<?php
/*recibe un numero de 4 cifras y lo encripta*/
    echo"Ingrese un numero de 4 cifras para encriptar: ";
    $cifra = trim(fgets(STDIN));
    $digito4 = $cifra % 10;
    $digito3 = (int)(($cifra/10) % 10);
    $digito2 = (int)(($cifra/100) % 10);
    $digito1 = (int)($cifra/1000);

    //encripta el valor
    $digito1 = ($digito1 + 7) % 10;
    $digito2 = ($digito2 + 7) % 10;
    $digito3 = ($digito3 + 7) % 10;
    $digito4 = ($digito4 + 7) % 10;

    //cambia de lugar los digitos
    $cifraEncriptada = ($digito3 * 1000) + ($digito4 * 100) + ($digito1 * 10) + $digito2;

>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
    echo "El número encriptado es: " .$cifraEncriptada;