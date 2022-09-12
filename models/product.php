<?php

class product
{
    public $name;
    public $price;
    public $brand;


    public function __construct($name, $price, $brand)
    {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;

    }

}