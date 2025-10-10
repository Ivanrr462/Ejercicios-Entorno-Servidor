<?php
/*
---
title: Ejercicio 4: Filtrar Productos por Precio
desc: Muestra solo los productos cuyo precio supera un umbral (p. ej., 20 €) y los presenta en una tabla HTML.
tags: [array_filter, foreach]
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

    $productos = [
        ["nombre" => "Bolígrafo",         "precio" => 1.50],
        ["nombre" => "Cuaderno",          "precio" => 3.20],
        ["nombre" => "Auriculares",       "precio" => 25.00],
        ["nombre" => "Ratón inalámbrico", "precio" => 18.90],
        ["nombre" => "Teclado mecánico",  "precio" => 45.99]
    ];

    echo "<h3>Todos los productos</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Precio (€)</th></tr>";
    foreach ($productos as $p) {
        echo "<tr><td>{$p['nombre']}</td><td>{$p['precio']}</td></tr>";
    }
    echo "</table>";

    $filtrados = array_filter($productos, function($producto) {
        return $producto['precio'] > 20;
    });

    // Mostrar tabla filtrada
    echo "<h3>Productos con precio superior a 20 €</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Precio (€)</th></tr>";
    foreach ($filtrados as $p) {
        echo "<tr><td>{$p['nombre']}</td><td>{$p['precio']}</td></tr>";
    }
    echo "</table>";

    ?>

</body>

</html>