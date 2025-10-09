<?php
/*
---
title: Ejercicio 2: Empleados Activos en Tabla
desc: Filtra un listado de empleados para mostrar solo los que están en estado activo dentro de una tabla HTML.
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

    $empleados = [
        ["name" => "María López",     "department" => "Ventas",        "status" => "activo"],
        ["name" => "Javier Martín",   "department" => "Marketing",     "status" => "inactivo"],
        ["name" => "Lucía Fernández", "department" => "IT",            "status" => "activo"],
        ["name" => "Carlos Ruiz",     "department" => "Finanzas",      "status" => "activo"],
        ["name" => "Ana Gómez",       "department" => "Atención al cliente", "status" => "inactivo"]
    ];

    echo "<h3>Empleados</h3>";
    echo "<table border=1>";
    echo "<tr><th>Nombre</th><th>Departamento</th><th>Estado</th></tr>";
    foreach($empleados as $empleado){
        echo "<tr>";
        echo "<td>" . $empleado["name"] . "</td>";
        echo "<td>" . $empleado["department"] . "</td>";
        echo "<td>" . $empleado["status"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $empleados_activos = array_filter($empleados, function($empleados){
        return $empleados["status"] === "activo";
    });

    echo "<h3>Empleados activos</h3>";
    echo "<table border=1>";
    echo "<tr><th>Nombre</th><th>Departamento</th><th>Estado</th></tr>";
    foreach($empleados_activos as $empleado){
        echo "<tr>";
        echo "<td>" . $empleado["name"] . "</td>";
        echo "<td>" . $empleado["department"] . "</td>";
        echo "<td>" . $empleado["status"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";





    ?>

</body>

</html>