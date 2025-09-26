<?php
    /*
---
title: Ejercicio 7: Formulario usuario
desc: Uso del operador terniario para formulario de usuario
tags: [basico, operadores, terniario]
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
    <?php

    echo ($usuario ?? null) === null
        ? "Debes introducir un usuario"
        : "Bienvenido " . $usuario;

    ?>
</body>

</html>