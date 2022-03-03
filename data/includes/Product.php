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

class Product
{
    public $name;
    public $brand;
    public $amount;

    public function __construct($name, $brand, $amount)
    {
        $this->setName($name);
        $this->brand = $brand;
        $this->amount = $amount;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
