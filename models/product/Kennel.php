<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    private $height;
    private $length;
    private $width;


    public function __construct($name, $price, $brand, $height, $length, $width)
    {
        parent::__construct($name, $price, $brand);
        $this->setHeight($height);
        $this->setLength($length);
        $this->setWidth($width);

    }

    public function getHeight($unit_of_measure = 'cm')
    {
        if($this->height) return $this->height . $unit_of_measure;
        return 'n.d.';
    }

    public function setHeight($height)
    {
        if(!is_numeric($height) || $height < 0) return;
        $this->height = $height;
    }

    public function getLength($unit_of_measure = 'cm')
    {
        if($this->length) return $this->length . $unit_of_measure;
        return 'n.d.';
    }

    public function setLength($length)
    {
        if(!is_numeric($length) || $length < 0) return;
        $this->length = $length;
    }

    public function getWidth($unit_of_measure = 'cm')
    {
        if($this->width) return $this->width . $unit_of_measure;
        return 'n.d.';
    }

    public function setWidth($width)
    {
        if(!is_numeric($width) || $width < 0) return;
        $this->width = $width;
    }

   
}