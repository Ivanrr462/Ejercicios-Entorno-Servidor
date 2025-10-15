<?php
/*
---
title: Ejercicio 5: Dígito en posición n
desc: Devuelve el dígito que ocupa una posición concreta dentro de un número y lo muestra.
tags: [array, aleatorio, funciones]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    function digitoN(int $num, int $pos): int
    {
        $str   = (string) abs($num);
        $len   = strlen($str);

        if ($pos < 1 || $pos > $len) {
            throw new InvalidArgumentException("Posición fuera de rango (1 – $len)");
        }

        $digito = (int) $str[$pos - 1];
        return $digito;
    }

    $num  = 2674;
    $pos  = 3;
    $dig  = digitoN($num, $pos);

    echo "El número es $num y la posición que pido es la $pos<br>";
    echo "En esa posición está el $dig";
    ?>
</body>

</html>