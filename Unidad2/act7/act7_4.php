<?php
/*
---
title: Ejercicio 4: Máximo con parámetros variables
desc: Implementa una función que devuelve el mayor de una lista de números.
tags: [parametros variables, bucles]
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

    
    function mayor(...$items): int {
        $max = 0;
        foreach ($items as $number) {
            if ($number > $max) {
                $max = $number;
            } 
        }
        return $max;
    }


    echo "El mayor de todos es " . mayor(3, 7, 1, 9, 5);

    ?>
</body>

</html>