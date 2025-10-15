<?php
/*
---
title: Ejercicio 6: Librería de operaciones básicas
desc: Define funciones para sumar, restar, multiplicar y dividir enteros (con intdiv en la división).
tags: [funciones, aritmetica]
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

    function sumar(int $num1, int $num2)
    {
        return $num1 + $num2;
    }

    function restar(int $num1, int $num2)
    {
        return $num1 - $num2;
    }

    function multiplicar(int $num1, int $num2)
    {
        return $num1 * $num2;
    }

    function dividir(int $num1, int $num2)
    {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            echo "El divisor no puede ser 0";
        }
    }

    ?>
</body>

</html>