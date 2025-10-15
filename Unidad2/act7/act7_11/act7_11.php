<?php
/*
---
title: Ejercicio 11: Cartas
desc: Generar cartas aleatorias
tags: [funciones, concatenar, imagenes]
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

    function generaMatrizCartasRand(int $n): array
    {
        $palos = ['c', 'd', 'p', 't'];
        $cartas = [];

        for ($i = 0; $i < $n; $i++) {
            $palo = $palos[random_int(0, count($palos) - 1)];
            $numero = random_int(1, 13);
            $cartas[] = $palo . $numero;
        }

        return $cartas;
    }


    $cantidad = random_int(5, 10);
    $filaDeCartas = generaMatrizCartasRand($cantidad);
    ?>

    <?php foreach ($filaDeCartas as $carta): ?>
    <img
        src="cartas/<?php echo $carta; ?>.svg"
        style="width: 100px; height: auto;"
    >
<?php endforeach; ?>
</body>

</html>