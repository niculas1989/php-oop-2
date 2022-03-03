<?php

/*
1 - una classe che ha le seguenti caratteristiche
) Account {
    $first_name;
    $last_name;
    $age;
    $card; (verificare che non sia scaduta)
    $logged (si aspetto un booleano come risposta)
} 
*/

class Account
{
    protected string $first_name;
    protected string $last_name;
    protected int $age;
    protected string $card;
    protected bool $logged;

    public function __construct($first_name, $last_name, $age, $card, $logged = null)
    {
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setAge($age);
        $this->setCard($card);
        $this->setLogged($logged);
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

    public function getCard()
    {
        return $this->card;
    }

    public function setCard($card)
    {
        $this->card = $card;
    }

    protected function setLogged($logged)
    {
        if (!$logged) return false;
        return true;
    }
}

$person = new Account('Nicolas', 'Maranzano', 32, 948349893483);

var_dump($person);
