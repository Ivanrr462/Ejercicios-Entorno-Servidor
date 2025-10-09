<?php
/*
---
title: Ejercicio 8: Bolas
desc: Uso de array para mostrar de entre 5 a 15 bolas del 1 al 10 al azar y luego mostrar las que son unicas
tags: [array, foreach]
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
    $valores = [];
    $valor = random_int(5, 15);

    echo "<h2>Entre estas $valor bolas ...</h2>";
    for ($i = 0; $i < $valor; $i++) {
        $valores[] = random_int(1, 10);
        $numero = $valores[$i];

        if ($numero < 9) {
            $unicode = $numero + 1;
            echo "<span style='font-size: 48px;'>&#1010$unicode;</span>";
        } else {
            $unicode = $numero + 1;
            echo "<span style='font-size: 48px;'>&#101$unicode;</span>";
        }
    }

    $valoresUnicos = array_unique($valores);
    $cantidadDistintos = count($valoresUnicos);
    echo "<h2>... hay $cantidadDistintos bolas distintas</h2>";

    foreach ($valoresUnicos as $numero) {
        if ($numero < 9) {
            $unicode = $numero + 1;
            echo "<span style='font-size: 48px;'>&#1010$unicode;</span>";
        } else {
            $unicode = $numero + 1;
            echo "<span style='font-size: 48px;'>&#101$unicode;</span>";
        }
    }

    ?>

</body>

</html>