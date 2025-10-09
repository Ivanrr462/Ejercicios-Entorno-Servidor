<?php
/*
---
title: Ejercicio 4: Validación de Formulario — Campos Faltantes
desc: Compara los campos obligatorios de un formulario con los datos enviados por el usuario y lista los que faltan.
tags: [array_diff_key, forms, validation, foreach]
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

    $obligatorio = ['nombre', 'email', 'edad', 'direccion'];
    $usuario = ['nombre' => 'Ana', 'edad' => 22];

    echo "<h3>Campos obligatorios</h3>";
    echo "<table border=1>";
    echo "<tr><th>Campo</th></tr>";
    foreach ($obligatorio as $elemento) {
        echo "<tr>";
        echo "<td>" . $elemento . "</td>";
        echo "</tr>";
    }
    echo "</table>";


    echo "<h3>Campos enviados por el usuario</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Campo</th><th>Valor</th></tr>";
    foreach ($usuario as $campo => $valor) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($campo, ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars((string)$valor, ENT_QUOTES, 'UTF-8') . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $enviados = array_keys($usuario);
    $faltantes = array_values(array_diff($obligatorio, $enviados));

    echo "<h3>Campos faltantes</h3>";
    echo "<ul>";
    foreach ($faltantes as $f) {
        echo "<li style='color:red;'>" . htmlspecialchars($f, ENT_QUOTES, 'UTF-8') . "</li>";
    }
    echo "</ul>";

    ?>

</body>

</html>