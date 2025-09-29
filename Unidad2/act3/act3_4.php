<?php
/*
---
title: Ejercicio 4: Numeros pares del 0 al 50
desc: Uso de while para printear los numeros pares del 0 al 50.
tags: [bucles, while, if]
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
    echo "<h1>Números pares del 0 al 50</h1>";
    echo "<ul>";
    $valor = 0;
    while ($valor <= 50){
        if ($valor % 2 == 0){
            echo "<li>$valor</li>";
        }
        $valor++;
    }
    echo "</ul>";
    ?>
</body>
</html>