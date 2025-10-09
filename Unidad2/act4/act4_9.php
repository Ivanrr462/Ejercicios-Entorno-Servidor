<?php
/*
---
title: Ejercicio 9: Busqueda de emoji en grupo
desc: Uso de array que genera entre 5 y 10 emojis y despues selecciona un emoji adicional y dice si esta o no en la lista.
tags: [array, foreach, in_array]
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

    $emojis = [];
    $valor = random_int(5, 10);

    for ($i = 0; $i < $valor; $i++) {
        $emojis[] = random_int(128512, 128580);
    }

    echo "<h2>Grupo:</h2>";
    foreach ($emojis as $emoji) {
        echo "<span style='font-size: 48px;'>&#$emoji;</span> ";
    }
    echo "<br>";

    $emoticono = random_int(128512, 128580);

    echo "<h2>Elegido: <span style='font-size: 48px;'>&#$emoticono;</span></h2>";

    if (in_array($emoticono, $emojis)) {
        echo "<h2>Sí está en la lista</h2>";
    } else {
        echo "<h2>No está en la lista</h2>";
    }

    ?>

</body>

</html>