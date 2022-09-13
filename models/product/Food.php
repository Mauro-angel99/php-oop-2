<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    private $ingredients;
    private $weight;

    public function __construct($name, $price, $brand, $ingredients, $weight)
    {
        parent::__construct($name, $price, $brand);
        $this->setIngredients($ingredients);
        $this->setWeight($weight);
    }

    public function getIngredients()
    {
        $this->ingredients = $ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getWeight($unit_of_measure = 'kg')
    {
        if($this->weight) return $this->weight . $unit_of_measure;
        return 'n.d.';
    }

    public function setWeight($weight)
    {
        if(!is_numeric($weight) || $weight < 0) return;
        $this->weight = $weight;
    }
}