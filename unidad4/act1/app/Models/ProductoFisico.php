<?php

namespace ProductoFisico;
use Producto\Producto;

class ProductoFisico extends Producto {
    private int $peso;

    public function __construct(string $codigo, float $precio, int $peso)
        {
            parent::__construct($codigo, $precio);
            $this->peso=$peso;
        }

    public function getTamanoArchivo() : int {
        return $this->peso;
    }

    public function mostrarResumen() {
        echo "📦 Producto físico {$this->getCodigo()} - $this->precio € ( $this->peso Kg )<br><br>";
    }
}