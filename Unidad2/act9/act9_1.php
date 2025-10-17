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
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 0);
    ini_set('log_errors', 1);
    ini_set('error_log', __DIR__ . '/app.log');

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
        trigger_error("❌ Error crítico: No se pudo abrir para añadir contenido.", E_ALL);
    }

    $fecha = date("Y-m-d H:i:s");
    $linea = sprintf("[%s] %s\n", $fecha, $comentario);
    fwrite($fh, $linea);
    
    fclose($fh);

    $fa = fopen($fichero, "r");

    if ($fa === false) {
        trigger_error("❌ Error crítico: No se pudo abrir para visualizar el contenido.", E_ALL);
    }

    $comentario = [];
    $contador = 0;

    try {
        if (filesize($fichero) === 0) {
            throw new Exception("🚨 Error: No hay comentarios todavía");
        } else {
            while (($linea = fgets($fa)) !== false) {
                $texto = htmlspecialchars(trim($linea));
                $comentario[] = "<li>$texto</li>";
                $contador++;
                $ultimo_comentario = $texto;
            }
        }
    } catch (Exception $e) {
        $comentario[] = $e->getMessage();
        trigger_error("🚨 Error: No hay comentarios todavía", E_ALL);
    }

    


    echo "<h1>📝 Gestor de Comentarios (sin BD)</h1>";

    echo "<b>Total de comentarios guardados: </b>$contador<br>";
    echo "<b>Último comentario añadido: </b>$ultimo_comentario<br>";

    echo "<h2>Historial</h2>";

    echo "<ul>";
    foreach ($comentario as $historial) {
        echo $historial;
    }
    echo "</ul>";

    fclose($fa);

    ?>

</body>

</html>