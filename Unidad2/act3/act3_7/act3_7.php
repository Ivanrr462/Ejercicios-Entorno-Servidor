<?php
/*
---
title: Ejercicio 7: Dados Parejas
desc: Uso de for para saber si dos dados son pareja.
tags: [bucles, for]
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

    $numero1 = random_int(1, 6);
    $numero2 = random_int(1, 6);
    $suma = $numero1 + $numero2;
    echo "<center>";
    echo "<img src='img/$numero1.svg'><img src='img/$numero2.svg'>";
    echo "<br>";
    if ($numero1 == $numero2){
        echo "Ha sacado una pareja de $numero1";
    } else {
        echo "No ha sacado pareja";
    }
    echo "</center>"

    ?>
</body>

</html>