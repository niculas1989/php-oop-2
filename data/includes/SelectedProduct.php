<?php
require_once __DIR__ . '/Product.php';

class SelectedProduct extends Product
{
    public $color;
    public $type;
    public $material;
    public $height;
    public $width;

    public function __construct($name, $price, $code, $brand, $quantity, $description, $animal, $color, $type, $material, $height, $width)
    {
        parent::__construct($name, $price, $code, $brand, $quantity, $description, $animal);
        $this->setColor($color);
        $this->setType($type);
        $this->setMaterial($material);
        $this->setHeight($height);
        $this->setWidth($width);
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}
