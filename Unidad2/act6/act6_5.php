<?php
/*
---
title: Ejercicio 5:  Extraer nombre de fichero
desc: Divide la ruta por '/' y devuelve el último segmento no vacío (el nombre del fichero).
tags: [explode]
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

    $ruta = 'http://www.linkfred.com/carpeta1/index.php';

    $ruta_separada = explode("/", $ruta);
    $nombre_fichero = end($ruta_separada);


    echo "<b>Ruta: </b>" . $ruta . "<br>";
    echo "<b>Nombre fichero: </b>" . $nombre_fichero;

    ?>

</body>

</html>