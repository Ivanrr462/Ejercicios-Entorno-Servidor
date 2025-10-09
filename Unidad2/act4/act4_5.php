<?php
/*
---
title: Ejercicio 5: Listado de productos
desc: Uso de array asociativos para mostrar productos, el precio y el precio con IVA.
tags: [array, asociativo]
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

    $productos = array('Pan' => ['nombre' => 'Pan', 'precio' => 1.20, 'iva' => 1],
     'Leche' => ['nombre' => 'Leche', 'precio' => 0.95, 'iva' => 2], 
     'Libro' => ['nombre' => 'Libro', 'precio' => 12.00, 'iva' => 3], 
     'TV' => ['nombre' => 'TV', 'precio' => 300.00, 'iva' => 4],
     'Zapatos' => ['nombre' => 'Zapatos', 'precio' => 50.00, 'iva' => 4],
     'Camisetas' => ['nombre' => 'Camisetas', 'precio' => 35.00, 'iva' => 4],
     'Videojuego' => ['nombre' => 'Videojuego', 'precio' => 70.00, 'iva' => 3],
     'Coche RC' => ['nombre' => 'Coche RC', 'precio' => 25.00, 'iva' => 3],
     'Papel' => ['nombre' => 'Papel', 'precio' => 3.50, 'iva' => 2],
     'Teclado' => ['nombre' => 'Teclado', 'precio' => 20.00, 'iva' => 3]);
    $iva = array(1 => 0, 2 => 0.04, 3 => 0.1, 4 =>0.21);
    
    ?>

    
    <table border="1">
        <tr>
            <td>Producto</td>
            <td>Sin IVA</td>
            <td>Tipo</td>
            <td>Con IVA</td>
        </tr>
        <tr>
            <td><?=$productos['Pan']['nombre']?></td>
            <td><?=$productos['Pan']['precio']?></td>
            <td><?=$productos['Pan']['iva']?></td>
            <td>
                <?php
                    $precio = $productos['Pan']['precio'];
                    $tipoIva = $productos['Pan']['iva'];
                    $valorIva = $iva[$tipoIva];
                    $precioIva = ($precio * $valorIva) + $precio;
                    printf("%.2f", $precioIva)
                ?>
            </td>
        </tr>
        <tr>
            <td><?=$productos['Leche']['nombre']?></td>
            <td><?=$productos['Leche']['precio']?></td>
            <td><?=$productos['Leche']['iva']?></td>
            <td>
                <?php
                    $precio = $productos['Leche']['precio'];
                    $tipoIva = $productos['Leche']['iva'];
                    $valorIva = $iva[$tipoIva];
                    $precioIva = ($precio * $valorIva) + $precio;
                    printf("%.2f", $precioIva)
                ?>
            </td>
        </tr>
        <tr>
            <td><?=$productos['Libro']['nombre']?></td>
            <td><?=$productos['Libro']['precio']?></td>
            <td><?=$productos['Libro']['iva']?></td>
            <td>
                <?php
                    $precio = $productos['Libro']['precio'];
                    $tipoIva = $productos['Libro']['iva'];
                    $valorIva = $iva[$tipoIva];
                    $precioIva = ($precio * $valorIva) + $precio;
                    printf("%.2f", $precioIva)
                ?>
            </td>
        </tr>
        <tr>
            <td><?=$productos['TV']['nombre']?></td>
            <td><?=$productos['TV']['precio']?></td>
            <td><?=$productos['TV']['iva']?></td>
            <td>
                <?php
                    $precio = $productos['TV']['precio'];
                    $tipoIva = $productos['TV']['iva'];
                    $valorIva = $iva[$tipoIva];
                    $precioIva = ($precio * $valorIva) + $precio;
                    printf("%.2f", $precioIva)
                ?>
            </td>
        </tr>
        <tr>
            <td><?=$productos['Zapatos']['nombre']?></td>
            <td><?=$productos['Zapatos']['precio']?></td>
            <td><?=$productos['Zapatos']['iva']?></td>
            <td>
                <?php
                    $precio = $productos['Zapatos']['precio'];
                    $tipoIva = $productos['Zapatos']['iva'];
                    $valorIva = $iva[$tipoIva];
                    $precioIva = ($precio * $valorIva) + $precio;
                    printf("%.2f", $precioIva)
                ?>
            </td>
        </tr>
        <tr>
            <td><?=$productos['Camisetas']['nombre']?></td>
            <td><?=$productos['Camisetas']['precio']?></td>
            <td><?=$productos['Camisetas']['iva']?></td>
            <td>
                <?php
                    $precio = $productos['Camisetas']['precio'];
                    $tipoIva = $productos['Camisetas']['iva'];
                    $valorIva = $iva[$tipoIva];
                    $precioIva = ($precio * $valorIva) + $precio;
                    printf("%.2f", $precioIva)
                ?>
            </td>
        </tr>
        <tr>
            <td><?=$productos['Videojuego']['nombre']?></td>
            <td><?=$productos['Videojuego']['precio']?></td>
            <td><?=$productos['Videojuego']['iva']?></td>
            <td>
                <?php
                    $precio = $productos['Videojuego']['precio'];
                    $tipoIva = $productos['Videojuego']['iva'];
                    $valorIva = $iva[$tipoIva];
                    $precioIva = ($precio * $valorIva) + $precio;
                    printf("%.2f", $precioIva)
                ?>
            </td>
        </tr>
        <tr>
            <td><?=$productos['Coche RC']['nombre']?></td>
            <td><?=$productos['Coche RC']['precio']?></td>
            <td><?=$productos['Coche RC']['iva']?></td>
            <td>
                <?php
                    $precio = $productos['Coche RC']['precio'];
                    $tipoIva = $productos['Coche RC']['iva'];
                    $valorIva = $iva[$tipoIva];
                    $precioIva = ($precio * $valorIva) + $precio;
                    printf("%.2f", $precioIva)
                ?>
            </td>
        </tr>
        <tr>
            <td><?=$productos['Papel']['nombre']?></td>
            <td><?=$productos['Papel']['precio']?></td>
            <td><?=$productos['Papel']['iva']?></td>
            <td>
                <?php
                    $precio = $productos['Papel']['precio'];
                    $tipoIva = $productos['Papel']['iva'];
                    $valorIva = $iva[$tipoIva];
                    $precioIva = ($precio * $valorIva) + $precio;
                    printf("%.2f", $precioIva)
                ?>
            </td>
        </tr>
        <tr>
            <td><?=$productos['Teclado']['nombre']?></td>
            <td><?=$productos['Teclado']['precio']?></td>
            <td><?=$productos['Teclado']['iva']?></td>
            <td>
                <?php
                    $precio = $productos['Teclado']['precio'];
                    $tipoIva = $productos['Teclado']['iva'];
                    $valorIva = $iva[$tipoIva];
                    $precioIva = ($precio * $valorIva) + $precio;
                    printf("%.2f", $precioIva)
                ?>
            </td>
        </tr>
    </table>

</body>

</html>