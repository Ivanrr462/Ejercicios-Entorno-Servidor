<?php

namespace Producto;

abstract class Producto
{
    private string $codigo;
    protected float $precio;

    public function __construct(string $codigo, float $precio)
    {
        $this->codigo = $codigo;
        $this->precio = $precio;
    }

    public function setPrecio(float $precio)
    {
        $this->precio = $precio;
    }

    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function getCodigo(): string
    {
        return $this->codigo;
    }

    abstract public function mostrarResumen();
}
