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
    public $price;
    public $code;
    public $brand;
    public int $quantity;
    public $description;
    public $animal;

    public function __construct($name, $code, $brand, $quantity, $description, $animal, $price)
    {
        $this->setName($name);
        $this->setCode($code);
        $this->setBrand($brand);
        $this->setQuantity($quantity);
        $this->setDescription($description);
        $this->setAnimal($animal);
        $this->setPrice($price);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
