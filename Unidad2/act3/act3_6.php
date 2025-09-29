<?php
/*
---
title: Ejercicio 6: Tabla de multiplicar
desc: Uso de for para mostrar la tabla de multiplicacion.
tags: [bucles, for]
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
    <style>
        table {
            display: table;
            border-collapse: collapse;
            box-sizing: border-box;
        }

        td {
            border: 1px solid black;
            padding: 8px 10px;
            max-width: 8px;
        }
    </style>
</head>

<body>
    <?php

    $numero = 7;

    echo "<h1>Tabla de multiplicar del $numero</h1>";
    echo "<table border='1'><tbody>";
    for ($a = 1; $a <= 10; $a++) {
        $multi = $a * $numero;
        echo "<tr>
    <td>$numero</td>
    <td>x</td>
    <td>$a</td>
    <td>=</td>
    <td>$multi</td>
    </tr>";
    }
    echo "</tbody></table>";
    ?>
</body>

</html>