<?php

class Product
{
    protected $id;
    protected $name;
    protected $price;
    protected $brand;


    public function __construct($name, $price, $brand)
    {
        $this->setId();
        $this->setName($name);
        $this->setPrice($price);
        $this->setBrand($brand);
    }

    public function getId()
    {
        $this->id = $id;
    }

    public function setId()
    {
        $this->id = uniqid();
    }

    public function getName()
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getPrice()
    {
        $this->price = $price;
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