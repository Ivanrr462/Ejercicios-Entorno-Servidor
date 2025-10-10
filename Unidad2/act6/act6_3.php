<?php
/*
---
title: Ejercicio 3: Resaltar coincidencias en un texto
desc: Busca un término en el texto con strpos y lo rodea con <mark> usando substr para reconstruir.
tags: [str_replace]
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

    $texto = "PHP es fantastico. Con PHP puedes construir sitios dinámicos. PHP mola.";
    $termino = "PHP";

    echo "<b>Texto: </b>" . $texto . "<br>";
    echo "<b>Término: </b>" . $termino . "<br>";

    // Cambia el termino por el valor que queremos meter en el texto.
    $textoResaltado = str_replace($termino, "<mark>$termino</mark>", $texto);

    echo "<b>Resultado: </b>" . $textoResaltado . "<br>";
    
    ?>

</body>

</html>