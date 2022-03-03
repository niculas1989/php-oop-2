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
    protected $first_name;
    protected $last_name;
    protected $age;
    protected $card;
    protected $logged;

    public function __construct($first_name, $last_name, $age, $card, $logged)
    {
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setAge($age);
        $this->setCard($card);
        $this->setLogged($logged);
    }
}
