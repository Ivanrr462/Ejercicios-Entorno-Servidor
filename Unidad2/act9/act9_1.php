<?php
/*
---
title: Ejercicio 1: Gestión de Comentarios con Ficheros
desc: Controla comentarios sin base de datos, usando ficheros.
tags: [comentarios, ficheros, manejo]
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

    $comentarios = array(
        'Me ha encantado la web',
        'Faltan más imágenes',
        'Buena organización del contenido',
        'Muy útil la información publicada',
        'El diseño es muy claro y sencillo',
        'Sería bueno añadir un buscador',
        'Los colores son agradables',
        'Faltan ejemplos prácticos',
        'La velocidad de carga es buena',
        'La sección de contacto funciona muy bien'   
    );

    $comentario = $comentarios[array_rand($comentarios)];

    $fichero = __DIR__ . "/comentarios.txt";
    $fh = fopen($fichero, "a");

    if ($fh === false) {
        exit("No se pudo abrir para añadir contenido.");
    }

    $fecha = date("Y-m-d H:i:s");
    $linea = sprintf("[%s] %s\n", $fechaHora, $comentario);
    fwrite($fh, $linea);
    fclose($fh);

    $fa = fopen($fichero, "r");

    if ($fh === false) {
        exit("No se pudo abrir para visualizar el contenido.");
    }

    while (($linea = fgets($fa)) !== false) {
        echo htmlspecialchars($linea) . "<br>";
    }

    fclose($fa);

    echo "<h1>📝 Gestor de Comentarios (sin BD)</h1>";
    echo "<b>Total de comentarios guardados: </b>";
    echo "<b>Último comentario añadido: </b>";

    echo "<h2>Historial</h2>";

    echo "<ul>";

    echo "</ul>";

    ?>

</body>

</html>