<?php
/*
---
title: Ejercicio 1: Uso de sesiones para votaciones
desc: Implementa un sistema de votación simple utilizando sesiones para almacenar los votos. Muestra los resultados con barras de progreso.
tags: [votacion, sesiones, progreso]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/

session_start();

$opcionA = $_SESSION['votosA'];
$opcionB = $_SESSION['votosB'];

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
    <style>
        .container {
            max-width: 600px;
            margin-top: 2rem;
            border: solid 3px black;
            padding: 10px;
            box-shadow: 10px 10px 10px gray;
            border-radius: 5%;
        }

        meter {
            width: 100%;
            height: 3rem;
        }

        h1 {
            text-align: center;
            color: chocolate;
        }

        h2 {
            color: chocolate;
        }
    </style>
</head>

<body>
    <main class="container">
        <h1>Votación</h1>
        <b>Opción A: </b> <?= $opcionA ?> votos -- <b>Opción B: </b> <?= $opcionB ?> votos
        <br>

        <form action="votar.php" method="post" class="grid">
            <input type="submit" name="opcion" value="A"></input>
            <input type="submit" name="opcion" value="B"></input>
            <input type="submit" name="opcion" value="RESET" class="secondary"></input>
        </form>

        <h2>Resultados</h2>

        <p>
            <label for="mA">Opción A</label>
            <meter id="mA" min="0" max="20" value="<?= $opcionA ?>"></meter>
        </p>

        <p>
            <label for="mB">Opción B</label>
            <meter id="mB" min="0" max="20" value="<?= $opcionB ?>"></meter>
        </p>

        <p class="muted">Escala máxima: 20 votos</p>
    </main>
</body>

</html>