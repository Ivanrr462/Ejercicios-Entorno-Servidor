<?php
/*
---
title: Ejercicio 8: Dados Azar
desc: Uso de for para sacar dados al azar y mostrar el valor mas pequeño
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

    $tirada = random_int(1, 6);
    $dados = array();
    $minimo = 7;
    echo "<p>$tirada dados</p>";
    for ($i = 0; $i < $tirada; $i++) {
        $numero = random_int(1, 6);
        echo "<img src='img/$numero.svg'>";
        if ($minimo > $numero) {
            $minimo = $numero;
        }
    }
    echo "<p>El valos más pequeño obtenido es $minimo</p>"

    ?>
</body>

</html>