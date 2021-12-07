<<<<<<< HEAD
<?php
/*desencripta el número encriptado*/
    echo"Ingrese el número para desencriptar: ";
    $encriptado = trim(fgets(STDIN));
    $encriptado < 999 ? $digito1 = 0 : $digito1 = (int)($encriptado / 1000);
    $encriptado < 99 ? $digito2 = 0 : $digito2 = (int)($encriptado / 100) % 10;
    $encriptado < 9 ? $digito3 = 0 : $digito3 = (int)($encriptado / 10) % 10;
    $digito4 = (int)($encriptado % 10);

    $digito1 < 7 ? $digito1 = $digito1 + 3 : $digito1 = $digito1 - 7;
    $digito2 < 7 ? $digito2 = $digito2 + 3 : $digito2 = $digito2 - 7;
    $digito3 < 7 ? $digito3 = $digito3 + 3 : $digito3 = $digito3 - 7;
    $digito4 < 7 ? $digito4 = $digito4 + 3 : $digito4 = $digito4 - 7;

    $desencriptado = ($digito3 * 1000) + ($digito4 * 100) + ($digito1 * 10) + $digito2;

    echo $desencriptado;
=======
<?php
/*desencripta el número encriptado*/
    echo"Ingrese el número para desencriptar: ";
    $encriptado = trim(fgets(STDIN));
    $encriptado < 999 ? $digito1 = 0 : $digito1 = (int)($encriptado / 1000);
    $encriptado < 99 ? $digito2 = 0 : $digito2 = (int)($encriptado / 100) % 10;
    $encriptado < 9 ? $digito3 = 0 : $digito3 = (int)($encriptado / 10) % 10;
    $digito4 = (int)($encriptado % 10);

    $digito1 < 7 ? $digito1 = $digito1 + 3 : $digito1 = $digito1 - 7;
    $digito2 < 7 ? $digito2 = $digito2 + 3 : $digito2 = $digito2 - 7;
    $digito3 < 7 ? $digito3 = $digito3 + 3 : $digito3 = $digito3 - 7;
    $digito4 < 7 ? $digito4 = $digito4 + 3 : $digito4 = $digito4 - 7;

    $desencriptado = ($digito3 * 1000) + ($digito4 * 100) + ($digito1 * 10) + $digito2;

    echo $desencriptado;
>>>>>>> 7d3ccae0737bf5dc7920a27d83accb6063402f41
