<?php
/*
---
title: Ejercicio 1: Mayor de tres
desc: Uso de bucles para mostrar el número mayor entre 3 números
tags: [bucles, if]
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

    $numero1 = random_int(1, 100);
    $numero2 = random_int(1, 100);
    $numero3 = random_int(1, 100);
    $mayor;

    if ($numero1 > $numero2 && $numero1 > $numero3) {
        $mayor = "El número mayor es $numero1";
    } else if ($numero2 > $numero1 && $numero2 > $numero3) {
        $mayor = "El número mayor es $numero2";
    } else if ($numero3 > $numero1 && $numero3 > $numero2) {
        $mayor = "El número mayor es $numero3";
    } else {
        $mayor = "Hay 2 o más numeros iguales";
    }

    echo "<h1>Juego: Mayor de tres números</h1>";
    echo "<ul><li>Número 1: $numero1</li><li>Número 2: $numero2</li><li>Número 3: $numero3</li></ul>";
    echo "<h2>$mayor</h2>";

    ?>
</body>

</html>