<?php
/*
---
title: Ejercicio 1: Gestión de pedidos.
desc: Crear un sistema de gestión de pedidos que permita a los usuarios realizar pedidos de productos físicos y digitales.
tags: [pedidos, productos, gestion]
code: https://github.com/usuario/repo/blob/main/unidad1/ej2.php
---
*/


require_once __DIR__ . "/app/Models/Cliente.php";
require_once __DIR__ . '/app/Interfaces/DetalleInterface.php';
require_once __DIR__ . "/app/Models/Producto.php";
require_once __DIR__ . "/app/Models/Pedido.php";
require_once __DIR__ . "/app/Models/ProductoFisico.php";
require_once __DIR__ . "/app/Models/ProductoDigital.php";

use Cliente\Cliente;
use ProductoFisico\ProductoFisico;
use ProductoDigital\ProductoDigital;
use Pedido\Pedido;

$c1 = new Cliente("Ana Lopez", "ana@example.com");
$c2 = new Cliente("Carlos Lopez", "carlos@example.com");


$p1 = new ProductoDigital("GAME42", "79.99", "10");
$p2 = new ProductoFisico("TV123", "499.99", "10");
$p3 = new ProductoDigital("EBOOK456", "9.99", "2");
$p4 = new ProductoFisico("MV558", "1099.99", "2");


$pe1 = new Pedido($c1);
$pe1->agregarProducto($p1);
$pe1->agregarProducto($p4);

$pe2 = new Pedido($c2);
$pe2->agregarProducto($p2);
$pe2->agregarProducto($p3);
$pe2->agregarProducto($p4);

?>
<!DOCTYPE html>
<html lang="es" data-theme="light">

<head>
  <meta charset="UTF-8">
  <title>Resumen de pedidos</title>
  <!-- Cargar Pico.css desde CDN -->
  <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>

<body>
  <main class="container">
    <h1>🛒 Resumen de pedidos</h1>

    <?php
      echo "<article>";
      $pe1->mostrarDetalle();
      echo "</article><br>";

      echo "<article>";
      $pe2->mostrarDetalle();
      echo "</article>";
    ?>

  </main>
</body>

</html>