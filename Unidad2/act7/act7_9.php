<?php
/*
---
title: Ejercicio 9: Contador por referencia
desc: Incrementa un contador de visitas pasando el parámetro por referencia y muestra el total.
tags: [funciones, incremento]
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
   
    function aumentarVisitas(int &$numero){
        $numero += 1;
    }

    $visitas = 0;
    aumentarVisitas($visitas);
    echo "<h2>La pagina aumento en visitas a $visitas</h2>";

    ?>
</body>

</html>