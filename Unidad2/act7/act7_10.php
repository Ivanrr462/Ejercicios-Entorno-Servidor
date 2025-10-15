<?php
/*
---
title: Ejercicio 10: Función flecha con cierre (IVA)
desc: Usa una function flecha que captura $iva para calcular el precio final de varios importes.
tags: [funcion flecha, variables-externas]
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

    $iva = 0.21;

    $calcularPrecioFinal =  fn($precio) => ($precio * $iva) + $precio;

    echo "<h1>El IVA es del 21%</h1>";
    echo "<h1>Precio final de 100: " . $calcularPrecioFinal(100) . "</h1>";
    echo "<h1>Precio final de 250: " . $calcularPrecioFinal(250) . "</h1>";
    echo "<h1>Precio final de 50: " . $calcularPrecioFinal(50) . "</h1>";
    ?>
</body>

</html>