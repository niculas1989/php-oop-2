<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Account.php';

//| proviamo ad immaginare un carrello in cui arriva il prodotto selezionato.
//| Effettuare il check se l'utente è registrato o meno per eventuale sconto.

class Cart
{
    protected $product;

    public function __construct($product)
    {
        $this->setProduct($product);
    }

    /**
     * Get the value of product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }
}
