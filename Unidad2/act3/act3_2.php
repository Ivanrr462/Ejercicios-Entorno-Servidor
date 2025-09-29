<?php
/*
---
title: Ejercicio 2: Calificacion
desc: Uso de bucles para mostrar una nota y su calificacion
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

    $nota = random_int(0, 10);
    $calificacion = "";

    if ($nota < 5) {
        $calificacion = "Insuficiente";
    } elseif ($nota >= 5 && $nota < 6) {
        $calificacion = "Suficiente";
    } elseif ($nota >= 6 && $nota < 7) {
        $calificacion = "Bien";
    } elseif ($nota >= 7 && $nota < 9) {
        $calificacion = "Notable";
    } else {
        $calificacion = "Sobresaliente";
    }

    echo "<h1>Simulación de Calificación</h1>";
    echo "La nota generada es $nota";
    echo "<h2>Calificacion: $calificacion</h2>";

    ?>
</body>

</html>