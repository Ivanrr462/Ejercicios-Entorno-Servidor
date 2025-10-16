<?php
/*
---
title: Ejercicio 1: Control de errores
desc: Muestra información del sistema y gestiona errores de forma controlada.
tags: [errores, excepciones, manejo]
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
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    ini_set('log_errors', 1);
    ini_set('error_log', __DIR__ . '/errores.log');

    $temperatura = random_int(-10, 100);
    $cpuCargada = random_int(0, 150);
    $token = random_int(0, 1);
    if ($token == 0) {
        $token = null;
    } else {
        $token = "OK";
    }

    echo "🌡️ Temperatura: $temperatura";
    echo "<br>";
    echo "🖥️ Carga CPU: $cpuCargada";
    echo "<br>";
    if($token===null){
        echo "🔐 Token: VACIO";
    } else {
        echo "🔐 Token: $token";
    }
    echo "<br>";
    echo "<br>";

    if ($token === null) {
        die ("❌ Error crítico: No hay token de acceso. El servidor no puede arrancar.");
    }

    if ($temperatura < 0 | $temperatura > 20){
        trigger_error("La temperatura no deberia ser mayor a 80 o menor de 0.", E_USER_WARNING);
    }

    try {
        if ($cpuCargada > 100) {
            throw new Exception("🚨 Error: Carga de CPU demasiado alta. No se puede arrancar el servidor.");
        }
        echo "✅ Servidor iniciado correctamente.";
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "<br>";
        echo "🧹 Fin del proceso de arranque.";
    }

    ?>

</body>

</html>