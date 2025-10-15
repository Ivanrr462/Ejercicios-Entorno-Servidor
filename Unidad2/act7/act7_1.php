<?php
/*
---
title: Ejercicio 1: Par o impar con función
desc: Determina si un número es par usando una función y operador ternario; muestra el resultado
tags: [modulo, funciones, terniario]
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
    function esPar (int $num): bool {
        if ($num % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    $num = 5;
    if (esPar($num) == true){
        echo "El numero $num es par";
    } else {
        echo "El numero $num es impar";
    }

    ?>
</body>
</html>