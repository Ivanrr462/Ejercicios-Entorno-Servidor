<?php
/*
---
title: Ejercicio 1: TAbla Alturas
desc: Uso de array asociativo para mostrar una tabla con el nombre y la altura, la media y el mas alto
tags: [array, asociativo]
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

    $alturas = array('Ana' => 165, 'Luis' => 172, 'Marta' => 158);

    $media = ($alturas['Ana'] + $alturas['Luis'] + $alturas['Marta']) / 3;
    $masalto = 0;
    $persona = '';

    foreach ($alturas as $nombre => $altura) {
        if ($altura > $masalto) {
            $masalto = $altura;
            $persona = $nombre;
        }
    }

    ?>

    <h1>Alturas de personas</h1>
    <table border="1">
        <tr>
            <td>Nombre</td>
            <td>Altura</td>
        </tr>
        <tr>
            <td>Ana</td>
            <td><?=$alturas['Ana']?></td>
        </tr>
        <tr>
            <td>Luis</td>
            <td><?=$alturas['Luis']?></td>
        </tr>
        <tr>
            <td>Marta</td>
            <td><?=$alturas['Marta']?></td>
        </tr>
        <tr>
            <td>Media</td>
            <td><?= $media ?></td>
        </tr>
        <tr>
            <td>Mas alto</td>
            <td><?= $persona ?></td>
        </tr>
    </table>
</body>

</html>