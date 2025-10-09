<?php
/*
---
title: Ejercicio 10: Tirada y ordenacion de Dados
desc: Uso de array que genera entre 2 y 7 dados con valores entre 1 y 6; y luego ordena los dados
tags: [array, sort, foreach]
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

    $tirada = random_int(2, 7);
    $dados = array();
    echo "<p>Tirada de $tirada dados</p>";
    for ($i = 0; $i < $tirada; $i++) {
        $numero = random_int(1, 6);
        $dados[] = $numero;
        echo "<img src='img/$numero.svg'>";
    }

    echo "<p>Tirada ordenada</p>";
    sort($dados);
    foreach ($dados as $dado){
        echo "<img src='img/$dado.svg'>";
    }

    ?>

</body>

</html>