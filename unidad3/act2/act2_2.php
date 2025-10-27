<?php
/*
---
title: Ejercicio 1: Formulario Web y Cookies
desc: Implementa un banner de cookies que permita aceptar o borrar cookies usando un formulario.
tags: [formulario, cookies, banner]
---
*/

error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/errores.log');

$borrar = "
<form method='post'>
    <button type='submit' name='borrar' value='1'>Borrar Cookies</button>
</form>";

$aceptar = "
<article>
    <header>
        <strong>Política de Cookies</strong>
    </header>
    <p>
        Usamos cookies para mejorar tu experiencia.
        Al continuar aceptas nuestra
        <a href='#' target='_blank' rel='noopener'>Política de Cookies</a>.
    </p>
    <div>
        <form method='post'>
            <button type='submit' name='aceptar' value='1'>Aceptar cookies</button>
        </form>
    </div>
</article>";

if (isset($_POST['aceptar'])) {
    setcookie("cookies_aceptadas", "creada", time() + (3600 * 24 * 365));
    header("Location: " . $_SERVER['PHP_SELF']); 
} else if (isset($_POST['borrar'])) {
    setcookie("cookies_aceptadas", "borrada", time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Cookies</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>

<body>
    <main class="container">
        <article>
            <h1>Bienvenido</h1>
            <p>Contenido de tu página principal...</p>
        </article>

        <div class="cookie-banner">
            <?php
            if (isset($_COOKIE['cookies_aceptadas'])) {
                echo $borrar;
            } else {
                echo $aceptar;
            }
            ?>
        </div>
    </main>
</body>

</html>
