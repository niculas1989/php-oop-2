<?php
require_once __DIR__ . '/Product.php';

class SelectedProduct extends Product
{
    public $color;
    public $price;
    public $animal; //# (per che tipologia di animale serve)
    public $type;

    public function __construct($name, $brand, $amount, $color, $price, $animal, $type)
    {
        parent::__construct($name, $brand, $amount);
        $this->setColor($color);
        $this->setPrice($price);
        $this->setAnimal($animal);
        $this->setType($type);
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}
