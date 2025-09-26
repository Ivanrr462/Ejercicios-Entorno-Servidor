/*
---
title: Ejercicio 4: Porcentaje aleatorio
desc: Genera un porcentaje aleatorio y muestralo con el control meter.
tags: [PHP, basico]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $porcentaje = random_int(1, 100);

        echo "<h1>Nivel: $porcentaje%</h1>";

        echo "<meter value='$porcentaje' min='0' max='100'></meter>"
    ?>
</body>
</html>