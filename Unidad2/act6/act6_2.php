<?php
/*
---
title: Ejercicio 2: Partes del nombre e iniciales (soporta nombre compuesto)
desc: Toma los dos últimos tokens como apellidos y el resto como nombre; también calcula las iniciales.
tags: [explode, implode, substr]
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

    $nombre = "Ana Maria Lopez Perez";
    
    $separados = explode(" ", $nombre);

    echo "Nombre Completo: " . $nombre;
    echo "<br>";

    echo "Nombre: " . $separados[0];
    echo "<br>";
    echo "Primer Apellido: " . $separados [2];
    echo "<br>";
    echo "Segundo Apellido: " . $separados [3];
    echo "<br>";

    $iniciales = '';
    foreach($separados as $item){
        $iniciales .= substr($item, 0, 1) . '.';
    }

    echo "Iniciales: " . $iniciales;

    ?>

</body>

</html>