<?php
/*
---
title: Ejercicio 6: Minisitio Web
desc: Dividir sitio en varios ficheros ( header.php, footer.php,..)
tags: [require]
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
    require 'header.php';
    ?>
    <p>Bienvenido a la página principal de mi mini sitio.</p>
    <?php
    require 'footer.php';
    ?>
</body>

</html>