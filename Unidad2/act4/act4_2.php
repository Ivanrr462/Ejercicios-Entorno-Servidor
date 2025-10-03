<?php
/*
---
title: Ejercicio 2: Listado de personas
desc: Uso de array bidimensional para almacenar personas y mostrarlas
tags: [array, bidimensional]
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

    $datos = array('fede'=>['nombre'=>'Fede', 'altura'=>193,'email'=>'fede@correo.com'],
    'ana'=>['nombre'=>'Ana', 'altura'=>165,'email'=>'ana@correo.com'], 
    'luis'=>['nombre'=>'Luis', 'altura'=>172,'email'=>'luis@correo.com'] );

    

    ?>

    <h1>Listado de personas</h1>
    <table border="1">
        <tr>
            <td>Nombre</td>
            <td>Altura</td>
            <td>Email</td>
        </tr>
        <tr>
            <td>Ana</td>
            <td><?=$datos['fede']['altura']?></td>
            <td><?=$datos['fede']['email']?></td>
        </tr>
        <tr>
            <td>Luis</td>
            <td><?=$datos['ana']['altura']?></td>
            <td><?=$datos['ana']['email']?></td>
        </tr>
        <tr>
            <td>Marta</td>
            <td><?=$datos['luis']['altura']?></td>
            <td><?=$datos['luis']['email']?></td>
        </tr>
    </table>
</body>

</html>