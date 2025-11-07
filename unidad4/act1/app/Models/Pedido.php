<?php

namespace Pedido;

use DetalleInterface\DetalleInterface;
use Cliente\Cliente;
use ProductoDigital\ProductoDigital;
use ProductoFisico\ProductoFisico;
use Producto\Producto;

class Pedido implements DetalleInterface {
    private Cliente $cliente;
    private array $producto = [];

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function agregarProducto(Producto $p) {
        $this->producto[] = $p;
    }

    public function mostrarDetalle() : void
    {
        echo "<h2>Pedido de {$this->cliente}</h2>";
        
        $total = 0;

        foreach($this->producto as $productos){
            $productos->mostrarResumen();
            $total+=$productos->getPrecio();
        }

        echo "<strong>Total: $total €</strong>";
    }
}