<?php
/*
---
title: Ejercicio 4: Listado de personas
desc: Uso de array con range y coger 3 y mostrar su media
tags: [array, bidimensional]
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