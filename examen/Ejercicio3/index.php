<?php

$precio = 0;
$stock = 0;
$totalImporte = 0;

$productos =
    [
        ['id' => 1, 'nombre' => 'Portátil HP', 'precio' => 899.99, 'stock' => 5, 'categoria' => 'Informática'],
        ['id' => 2, 'nombre' => 'Mouse Logitech', 'precio' => 25.50, 'stock' => 15, 'categoria' => 'Periféricos'],
        ['id' => 3, 'nombre' => 'Teclado Mecánico', 'precio' => 79.99, 'stock' => 0, 'categoria' => 'Periféricos'],
        ['id' => 4, 'nombre' => 'Monitor Dell 27"', 'precio' => 299.00, 'stock' => 8, 'categoria' => 'Informática'],
        ['id' => 5, 'nombre' => 'Webcam HD', 'precio' => 50, 'stock' => 3, 'categoria' => 'Accesorios']
    ];

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
    <h1>Tienda de informática</h1>
    <table>
        <th>id</th>
        <th>nombre</th>
        <th>precio</th>
        <th>stock</th>
        <th>categoria</th>

        <?php
        if (!empty($_POST)) {
            $categoria = $_POST['categoria'];
            define('OPCIONES1', ['Informática', 'Periféricos', 'Accesorios']);
            if (!empty($categoria)) {
                if (in_array($categoria, OPCIONES1)) {
                    foreach ($productos as $producto) {
                        if ($producto['stock'] <= 3) {
                            $color = "red";
                        } else {
                            $color = '';
                        }
                        if ($producto['categoria'] == $categoria) {
                            echo "<tr><td>" . $producto['id'] . "</td>" .
                                "<td>" . $producto['nombre'] . "</td>" .
                                "<td>" . $producto['precio'] . "</td>" .
                                "<td class='$color'>" . $producto['stock'] . "</td>" .
                                "<td>" . $producto['categoria'] . "</td></tr>";
                            $precio = $producto['precio'];
                            $stock = $producto['stock'];
                            $totalImporte += ($precio * $stock);
                        }
                    }
                }
            }
        } else {
            foreach ($productos as $producto) {
                if ($producto['stock'] <= 3) {
                    $color = "red";
                } else {
                    $color = '';
                }
                echo "<tr><td>" . $producto['id'] . "</td>" .
                    "<td>" . $producto['nombre'] . "</td>" .
                    "<td>" . $producto['precio'] . "</td>" .
                    "<td class='$color'>" . $producto['stock'] . "</td>" .
                    "<td>" . $producto['categoria'] . "</td></tr>";
                $precio = $producto['precio'];
                $stock = $producto['stock'];
                $totalImporte += ($precio * $stock);
            }
        }


        $total = "<h1>Total grupo: " . $totalImporte . "</h1>";
        ?>
    </table>
    <form action="" method="post">
        <label>Filtrar por categorías
            <select name="categoria">
                <option value="">- Selecciona -</option>
                <option value="Informática">Informática</option>
                <option value="Periféricos">Periféricos</option>
                <option value="Accesorios">Accesorios</option>
            </select>
        </label>
        <input type="submit" value="Filtrar">
    </form>

    <?= $total; ?>
</body>

</html>