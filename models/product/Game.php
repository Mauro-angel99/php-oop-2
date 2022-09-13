<?php

require_once __DIR__ . '/Product.php';

class Game extends Product
{
    private $color;

    public function __construct($name, $price, $brand, $color)
    {
        parent::__construct($name, $price, $brand);
        $this->setColor($color);
    }

    public function getColor()
    {
        $this->color = $color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}