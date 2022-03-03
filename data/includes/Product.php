<?php

/*
2 - una classe che ha le seguenti caratteristiche
) Product {
    $name;
    $brand;
    $amount;
}

2a - una classe, figlia della 2, che ha le caratteristiche del padre con in più le seguenti:
) SelectedProduct {
    $color;
    $price;
    $animal; (per che animale serve)
    $type; (può essere corto, lungo, a strozzo ..)
}
*/

//! Inizzializzo la classe Product
class Product
{
    public $name;
    public $brand;
    public $amount;

    public function __construct($name, $brand, $amount)
    {
        $this->setName($name);
        $this->setBrand($brand);
        $this->setAmount($amount);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}

//! Inizzializzo la casse SelectedProduct - figlia di Product.
// TODO per adesso la scrivo qui, poi vedo di spostarla in un file esterno per importarla. Step by step.
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

    public function getPrice()
    {
        return $this->price;
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

    public function getType()
    {
        return $this->type;
    }
}
