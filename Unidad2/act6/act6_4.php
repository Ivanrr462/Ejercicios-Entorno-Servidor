<?php
/*
---
title: Ejercicio 4: Partes de un email y enmascarado del usuario
desc: Separa usuario y dominio con strpos+substr; enmascara el usuario dejando visible primera y última letra.
tags: [explode, str_repeat]
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

    $cadena = "ivan@prueba.com";
    
    $cadena_separada = explode("@", $cadena);

    echo "<b>Correo: </b>" . $cadena . "<br>";
    echo "<b>Usuario: </b>" . $cadena_separada[0] . "<br>";
    echo "<b>Dominio: </b>" . $cadena_separada[1] . "<br>";

    $longitud = strlen($cadena_separada[0]);
    $nombre = $cadena_separada[0];

    if (!($longitud < 3)){
        $primera = substr($nombre, 0, 1);
        $ultima = substr($nombre, -1);
        $asteriscos = str_repeat("*", $longitud - 2);
        $nombre_asteriscos = $primera . $asteriscos . $ultima;
    }

    echo "<b>Usuario enmascarado: </b>" . $nombre_asteriscos;

    ?>

</body>

</html>