<?php
/*
---
title: Ejercicio 5: Suma del 1 al 10
desc: Uso de while para sumar los números del 1 al 10.
tags: [bucles, while]
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

    $valor = 1;
    $suma = 0;

    while ($valor <= 10) {
        $suma += $valor;
        $valor++;
    }

    echo "<h1>Suma de los números del 1 al 10</h1>";
    echo "La suma de los números del 1 al 10 es: $suma";

    ?>
</body>

</html>