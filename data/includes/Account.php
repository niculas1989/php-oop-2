<?php

require_once __DIR__ . '/Address.php';
require_once __DIR__ . '/Card.php';

/*
1 - una classe che ha le seguenti caratteristiche
) Account {
    $first_name;
    $last_name;
    $age;
    $card; (verificare che non sia scaduta)
} 
*/
class Account
{
    use Address;

    protected string $first_name;
    protected string $last_name;
    protected int $age;
    public $card;
    public $discount;
    protected bool $logged;

    public function __construct($first_name, $last_name, $age, $card, $logged = false)
    {
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setAge($age);
        $this->setCard($card);
        $this->logged = $logged;
        $this->discount = $this->setDiscount();
    }

    private function setDiscount()
    {
        return $this->logged ? $this->discount = 20 : $this->discount = 0;
    }

    private function setCard($card)
    {
        if (!$card instanceof Card) return false;
        $this->card = $card;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    //! Logica per comprare qualcosa:

    public function buyProduct($product)
    {
        if ($this->card->expiration_date < date('Y')) {
            return '<strong>La tua Carta è scaduta! Si prega di inserirne un altra.</strong>';
        } else {
            if ($product->price > $this->card->balance) {
                return '<strong>Transazione rifiutata, fondi non sufficenti.</strong>';
            } else {
                if ($this->discount > 0) {
                    $price = $product->price - $product->price / 100 * $this->discount;
                    $this->card->balance -= $price;
                    return "Transazione approvata, id prodotto: $product->name, Prodotto:" . $product->getName() . ", hai ricevuto uno sconto del $this->discount% ed hai speso $price €";
                } else {
                    $this->card->balance -= $product->price;
                    return "Transazione approvata, id prodotto: $product->name, Prodotto:" . $product->getName() . ",  hai speso $product->price €";
                }
            }
        }
    }

    public function buyProducts($products)
    {
        foreach ($products as $product) {
            $this->buyProduct($product);
        }
    }
}
