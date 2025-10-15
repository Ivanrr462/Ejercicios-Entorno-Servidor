<?php
/*
---
title: Ejercicio 7: Llamada dinámica a operaciones
desc: Importa las funciones de la librería y las ejecuta dinámicamente por nombre sobre dos números, mostrando cada resultado.
tags: [require_once, funciones dinamicas]
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
    
    require_once 'act7_6.php';

    $num1 = 40;
    $num2 = 3;

    $suma = sumar($num1, $num2);
    $resta = restar($num1, $num2);
    $mult = multiplicar($num1, $num2);
    $div = dividir($num1, $num2);

    echo "<h2>Las operaciones se hacen con los numeros $num1 y $num2</h2>";
    echo "<ul>";
    echo "<li>Sumar: $suma</li>";
    echo "<li>Restar: $resta</li>";
    echo "<li>Multiplicar: $mult</li>";
    echo "<li>Dividir: ";
    printf("%.2f, $div");
    echo "</li>";
    echo "</ul>";
    ?>
</body>

</html>