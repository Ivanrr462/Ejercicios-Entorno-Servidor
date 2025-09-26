/*
---
title: Ejercicio 2: 2 números azar
desc: 2 números azar y media aritmética de ambos.
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        $numero1 = random_int(1, 100);
        $numero2 = random_int(1, 100);
        $suma = $numero1 + $numero2;
        $media = $suma / 2;
    ?> 

    <p style="font-family: Libre Baskerville;">La media aritmética de <?=$numero1, ' y ' , $numero2, ' es ', $media?></p>
</body>
</html>