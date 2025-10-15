<?php
/*
---
title: Ejercicio 3: Filtrar mayores que 10
desc: Usa array_filter con una función callback para quedarse solo con los valores > 10; imprime original y filtrado.
tags: [arrays, funciones]
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

    function arrayMayores(array &$array): array
    {
        $resultado = [];
        foreach ($array as $valor) {
            if ($valor > 10) {
                $resultado[] = $valor;
            }
        }
        return $resultado;
    }

    $datos = [4, 15, 7, 23, 10, 11];
    $mayores = arrayMayores($datos);
    echo "<b>Array Original</b><br>";

    print_r($datos);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<b>Array de solo Mayores de 10</b><br>";
    print_r($mayores);

    ?>
</body>

</html>