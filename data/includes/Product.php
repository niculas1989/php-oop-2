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
