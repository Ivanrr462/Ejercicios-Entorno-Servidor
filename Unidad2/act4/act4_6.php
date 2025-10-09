<?php
/*
---
title: Ejercicio 6: Rotación de un Array
desc: Uso de array para rotar el array moviendo el ultimo elemento a la primera posición.
tags: [array, array_pop, array_unshift]
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

    $valores = [];

    for ($i = 0; $i < 10; $i++){
        $valores[] = random_int(1, 100);
    }

    $valoresRotados = $valores;
    $ultimo = array_pop($valoresRotados);
    array_unshift($valoresRotados, $ultimo);

    echo "Array original: ". implode(', ', $valores);
    echo "<br>";
    echo "Array rotado: " . implode(', ', $valoresRotados);

    ?>

</body>

</html>