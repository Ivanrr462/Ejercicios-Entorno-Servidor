<?php
/*
---
title: Ejercicio 2: Precedencia
desc: Precedencia operadores
tags: [basico, operadores, preincremento]
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

        $a = 5;
        $b = 10;
        $c = 15;
        $d = 20;
        $result = ++$a * $b / $c + $d-- -$a;
        echo $result;

    ?>
</body>
</html>