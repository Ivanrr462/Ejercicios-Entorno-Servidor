<?php
/*
---
title: Ejercicio 1: Test
desc: Resultado test
tags: [basico, operadores]
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

        $a = 1;

        "2" == $a; echo "false"; echo "<br>";
        $a == false; echo "false"; echo "<br>";
        $a == 2; echo "false";  echo "<br>";
        --$a == false; echo "true";  echo "<br>";

    ?>
</body>
</html>