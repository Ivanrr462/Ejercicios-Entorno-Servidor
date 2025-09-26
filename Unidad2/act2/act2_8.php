/*
---
title: Ejercicio 8: Tienda online
desc: Uso de la nave espacial para comparar dos precios de una tienda online
tags: [basico, operadores, <=>]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $precio1 = 25;
        $precio2 = 30;

        $comparacion = $precio1 <=> $precio2;
        echo $comparacion<0? "El producto 1 es más barato" : ($comparacion==0 ? "Ambos productos cuestan lo mismo" : "El producto 1 es más caro");

    ?>
</body>
</html>