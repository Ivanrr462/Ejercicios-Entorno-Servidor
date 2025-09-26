<?php
/*
---
title: Ejercicio 5: Precedencia de operadores
desc: Uso de la precedencia de operadores
tags: [basico, operadores, precedencia]
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

        $resultado = (3+5) * 2 < 20 & 4 === "4" || 7 % 2 == 1;
        echo $resultado ? "true" : "false";
        echo "La expresion es verdadero pq compara la primera parte que es true con la segunda, pero la segunda es o false o true por el parametro || que significa or; entonces la expresion seria true y true.";
    ?>
</body>
</html>