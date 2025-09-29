<?php
/*
---
title: Ejercicio 3: Numero en castellano
desc: Uso de match para generar un numero y el numero en castellano.
tags: [bucles, match]
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

    $valor = random_int(1,3);

    $numero=match($valor){
        1=>'uno',
        2=>'dos',
        3=>'tres'
    };

    echo "<h1>El número generado es $valor y en castellano es: $numero</h1>";

    ?>
</body>
</html>