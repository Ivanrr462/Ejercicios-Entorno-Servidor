<?php
/*
---
title: Ejercicio 3: Participantes Comunes en Dos Actividades
desc: Obtiene las personas que aparecen en ambas listas de inscritos a partir de la intersección de arrays y las muestra.
tags: [array_intersect, foreach]
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

    $actividad1 = [
        "Ana",
        "Luis",
        "Marta",
        "Pablo"
    ];

    echo "<h3>Actividad 1</h3>";
    echo "<ul>";
    foreach ($actividad1 as $elemento){
        echo "<li>$elemento</li>";
    }
    echo "</ul>";

    $actividad2 = [
        "Pablo",
        "Lucía",
        "Ana"
    ];

    echo "<h3>Actividad 2</h3>";
    echo "<ul>";
    foreach ($actividad2 as $elemento){
        echo "<li>$elemento</li>";
    }
    echo "</ul>";

    $actividad3 = array_intersect($actividad1, $actividad2);

    echo "<h3>Actividad 3</h3>";
    echo "<ul>";
    foreach ($actividad3 as $elemento){
        echo "<li>$elemento</li>";
    }
    echo "</ul>";

    ?>

</body>

</html>