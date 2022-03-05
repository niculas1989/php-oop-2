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
    protected bool $logged;

    public function __construct($first_name, $last_name, $age, $card, $logged = false)
    {
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setAge($age);
        $this->setCard($card);
        $this->isLogged($logged);
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

    public function isLogged()
    {
        if (!$this->logged) return false;
        else return true;
    }

    public function setDiscount($logged)
    {
        return ($logged) ? true : false;
    }
}
