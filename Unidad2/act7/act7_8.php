<?php
/*
---
title: Ejercicio 8: División con valor por defecto y control de errores
desc: Implementa dividir(num, divisor) con manejo de división por cero.
tags: [parametros-por-defecto, manejo-errores, tipos dobles]
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

    function dividir(float $dividendo, float $divisor = 4)
    {
        if ($divisor != 0.00) {
            $division = $dividendo / $divisor;
            return $division;
        } else {
            $division = "Error. El divisor debe ser distinto de 0";
            return $division;
        }
    }


    echo "La división de 3 entre 4 es: " . dividir(3, 4) . "<br>";

    echo "La división de 6 entre 0 es: " . dividir(6, 0) . "<br>";

    echo "La división de 6 entre 4 (valor por defecto) es: " . dividir(6) . "<br>";
    ?>
</body>

</html>