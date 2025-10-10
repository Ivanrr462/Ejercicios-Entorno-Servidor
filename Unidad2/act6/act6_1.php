<?php
/*
---
title: Ejercicio 1: Longitud de comentario (SMS 160)
desc: Mide la longitud del texto y muestra cuántos caracteres faltan o sobran respecto a 160.
tags: [strlen]
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

    $comentario = "Este es un comentario de ejemplo para comprobar cuántos caracteres tiene y si cabe en un SMS.";
    $sms = 160;

    echo "<h2>Comentario</h2>";

    echo $comentario;
    echo "<br>";
    $longitud_mensaje = strlen($comentario);
    $faltante = $longitud_mensaje - $sms;

    echo "Longitud: " . $longitud_mensaje . " caracteres";
    echo "<br>";
    if ($longitud_mensaje < $sms) {
        $faltan = $sms - $longitud_mensaje;
        echo "Faltan $faltan caracteres para completar un SMS.<br>";
    } elseif ($longitud_mensaje > $sms) {
        $sobran = $longitud_mensaje - $sms;
        echo "Te has pasado por $sobran caracteres del límite de un SMS.<br>";
    } else {
        echo "¡Perfecto! El comentario tiene exactamente 160 caracteres.<br>";
    }
    ?>

</body>

</html>