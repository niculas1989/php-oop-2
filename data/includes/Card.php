<?php
require_once __DIR__ . '/Account.php';
require_once __DIR__ . '/Adress.php';
/* 
3 - una classe che ha le seguenti caratteristiche
) Card {
    $circuit;
    $code;
    $expiration_date; (verificare che non sia scaduta)
} 
*/

class Card extends Account
{
    private $circuit;
    private $code;
    private $expiration_date;
    private $balance;

    use Address;

    public function __construct($first_name, $last_name, $age, $logged, $circuit, $code, $expiration_date, $balance = 0)
    {
        parent::__construct($first_name, $last_name, $age, $logged);
        $this->setCircuit($circuit);
        $this->setCode($code);
        $this->setExpirationDate($expiration_date);
        $this->setBalance($balance);
    }

    public function setCircuit($circuit)
    {
        $this->circuit = $circuit;
    }

    public function getCircuit()
    {
        return $this->circuit;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setExpirationDate($expiration_date)
    {
        $this->expiration_date = $expiration_date;
    }

    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    /**
     * Get the value of balance
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }
}
