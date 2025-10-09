<?php
/*
---
title: Ejercicio 7: Numero de colores
desc: Uso de array para que los numeros pares sean de un color y los impares de otro
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

    for ($i = 0; $i < 10; $i++) {
        $valores[] = random_int(1, 100);
    }

    echo "<table border='1'><tr>";
    foreach ($valores as $valor) {
        $color = ($valor % 2 == 0) ? 'red' : 'blue';
        echo "<td style='color:$color'>$valor</td>";
    }
    echo "</tr></table>";
    ?>

</body>

</html>