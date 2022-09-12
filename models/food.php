<?php

require_once __DIR__ . '/product.php';

class food extends product
{
    public $ingredients;
    public $weight;

    public function __construct($name, $price, $brand, $ingredients, $weight)
    {
        parent::__construct($name, $price, $brand);
        $this->ingredients = $ingredients;
        $this->weight = $weight;
    }
}