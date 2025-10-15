<?php
/*
---
title: Ejercicio 2: Array aleatorio (rango y tamaño)
desc: Genera un array de tamaño dado con enteros aleatorios entre un mínimo y un máximo y lo muestra.
tags: [array, aleatorio, funciones]
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
    function arrayAleatorio(int $tam, int $min, int $max): array
    {
        $resultado = [];

        for ($i = 0; $i < $tam; $i++) {
            $resultado[] = random_int($min, $max);
        }

        return $resultado;
    }

    $datos = arrayAleatorio(5, 1, 10);
    print_r($datos);

    ?>
</body>

</html>