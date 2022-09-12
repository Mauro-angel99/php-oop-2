<?php

class product
{
    public $name;
    public $price;
    public $brand;


    public function __construct($name, $price, $brand)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setBrand($brand);
    }

    public function getName()
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getPrice($currency = '€')
    {
        if($this->price) return $currency . $this->price;
        return 'n.d.';
    }

    public function setPrice($price)
    {
        if(!is_numeric($price) || $price < 0) return;
        $this->price = $price;
    }

    public function getBrand()
    {
        $this->brand = $brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

}