<?php
/*
---
title: Ejercicio 4: Filtrar Productos por Precio
desc: Muestra solo los productos cuyo precio supera un umbral (p. ej., 20 €) y los presenta en una tabla HTML.
tags: [array_filter, foreach]
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

    $enteros = range(0, 100);


    $random = array_rand($enteros, 3);

    $media = ($random[0] + $random[1] + $random[2]) / 3;


    printf("La media de %s, %s, %s es %.2f\n", $random[0], $random[1], $random[2], $media);

    ?>

</body>

</html>