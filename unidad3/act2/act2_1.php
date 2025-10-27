<?php
/*
---
title: Ejercicio 1: Formulario Web y Cookies
desc: Modifica el color de fondo de una página web usando un formulario y cookies.
tags: [formulario, cookies, color]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/errores.log');

$color = "white";
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("cookiecolor", $_POST['color'], time() + (3600 * 24));
} else if ($_COOKIE["cookiecolor"]) {
    $color = $_COOKIE["cookiecolor"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css" />
</head>
<body style="background-color: <?= $color; ?>;">
    <main class="container">
        <form action="" method="post">
            <h1>Selecciona un color de fondo</h1>
             <select name="color">
                <option value="white">Blanco</option>
                <option value="red">Rojo</option>
                <option value="green">Verde</option>
                <option value="blue">Azul</option>
                <option value="black">Negro</option>
            </select>
            <input type="submit" value="Cambiar color">
            <p>El color elegido se guardará en una cookie durante 24 horas 🍪</p>
        </form>
    </main>
</body>
</html>