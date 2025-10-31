<?php

require 'funciones.php';

$numeros = [];
$suma = 0;

for ($i = 0; $i <= 5; $i++) {
    $numero = random_int(1, 100);
    $numeros[$i] = $numero;
    $suma += $numero;
}

sort($numeros);

escribir($numeros);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../pico.min.css">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <main class="container">
        <h1>Números y Categorías</h1>
        <table>
            <th>Numero</th>
            <th>Categoria</th>
            <th>Código</th>
            <?php
            foreach ($numeros as $numero) {
                $categoria = categoria($numero);
                if ($categoria == "alto") $codigo = "al";
                else if ($categoria == "medio") $codigo = "me";
                else if ($categoria == "bajo") $codigo = "ba";
                echo "<tr><td>$numero</td><td class='$categoria'>$categoria</td><td>$codigo-$numero</td></tr>";
            }
            ?>
        </table>

        <h1>Suma total: <?= $suma; ?></h1>
        <?php
        $alto = 0;
        $medio = 0;
        $bajo = 0;
        foreach ($numeros as $numero) {
            $categoria = categoria($numero);
            if ($categoria == "alto") $alto++;
            else if ($categoria == "medio") $medio++;
            else if ($categoria == "bajo") $bajo++;
        }

        echo "<ul><li>Rango bajo: $bajo números</li><li>Rango medio: $medio números</li><li>Rango alto: $alto números</li></ul>"
        ?>
    </main>
</body>

</html>