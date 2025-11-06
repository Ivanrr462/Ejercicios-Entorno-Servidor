<?php

namespace ProductoDigital;
require 'Producto/Producto.php';
use Producto\Producto;

class ProductoDigital extends Producto {
    private int $tamanoArchivo;

    public function __construct(string $codigo, float $precio, int $tamanoArchivo)
        {
            parent::__construct($codigo, $precio);
            $this->tamanoArchivo=$tamanoArchivo;
        }

    public function getTamanoArchivo() : int {
        return $this->tamanoArchivo;
    }

    public function mostrarResumen() {
        return "💾 Producto digital {$this->getCodigo()} - $this->precio() € ( $this->tamanoArchivo() MB)";
    }
}