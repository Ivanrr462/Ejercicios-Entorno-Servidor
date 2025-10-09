<?php
/*
---
title: Ejercicio 1: Catálogo Unificado de Productos
desc: Une dos listas de productos de distintos proveedores, elimina duplicados, ordena alfabéticamente y muestra el resultado.
tags: [array_merge, array_unique, foreach]
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

    // Proveedor A
    $supplierA = [
        "Apple iPhone 14",
        "Samsung Galaxy S23",
        "Sony WH-1000XM5",
        "Nintendo Switch OLED",
        "Kindle Paperwhite"
    ];

    echo "<h3>Proveedor 1</h3>";
    echo "<ul>";
    foreach ($supplierA as $elemento){
        echo "<li>$elemento</li>";
    }
    echo "</ul>";

    // Proveedor B
    $supplierB = [
        "Samsung Galaxy S23",
        "Apple AirPods Pro 2",
        "Sony WH-1000XM5",
        "Google Pixel 7",
        "Kindle Paperwhite"
    ];

    echo "<h3>Proveedor 2</h3>";
    echo "<ul>";
    foreach ($supplierB as $elemento){
        echo "<li>$elemento</li>";
    }
    echo "</ul>";

    $supplier = array_merge($supplierA, $supplierB);

    echo "<h3>Proveedor 3</h3>";
    echo "<ul>";
    foreach ($supplier as $elemento){
        echo "<li>$elemento</li>";
    }
    echo "</ul>";



    ?>

</body>

</html>