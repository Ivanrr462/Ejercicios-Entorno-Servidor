<?php
/*
---
title: Ejercicio 3: Listado de M o F
desc: Uso de array aleatorio para mostrar el sexo y luego recorrerlo para calcular cuantos elementos
tags: [array, aleatorio, foreach]
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

    $sexo = array();
    for ($i = 0; $i < 5; $i++){
        $decision = random_int(1,2);
        if ($decision === 1){
            array_push($sexo, 'M');
        } else {
            array_push($sexo, 'F');
        }
    }

    $resultado = array_count_values($sexo);

    ?>

    <h1>Listado de personas</h1>
    <table border="1">
        <tr>
            <td>#</td>
            <td>Sexo</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?=$sexo[0]?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?=$sexo[1]?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?=$sexo[2]?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?=$sexo[3]?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?=$sexo[4]?></td>
        </tr>
    </table>

    <?=print_r($resultado)?>
</body>

</html>