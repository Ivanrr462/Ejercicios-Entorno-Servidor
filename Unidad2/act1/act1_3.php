<?php
/*
---
title: Ejercicio 3: Tabla variables
desc: Hacer una tabla que muestre unas variables antes almacenadas.
tags: [basico, tabla]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $nombre = "Iván";
        $primer_apellido = "Rios";
        $segundo_apellido = "Raya";
        $email = "irioray1712@g.educaand.es";
    ?>

    <table border="1">
        <tr>
            <td>Nombre: </td>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <td>Primer Apellido: </td>
            <td><?php echo $primer_apellido; ?></td>
        </tr>
        <tr>
            <td>Segundo Apellido: </td>
            <td><?php echo $segundo_apellido; ?></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><?php echo $email; ?></td>
        </tr>
    </table>
</body>
</html>