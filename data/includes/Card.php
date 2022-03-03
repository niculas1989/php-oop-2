<?php
require_once __DIR__ . '/Account.php';
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

    public function __construct($first_name, $last_name, $age, $card, $circuit, $code, $expiration_date)
    {
        parent::__construct($first_name, $last_name, $age);
        $this->circuit = $circuit;
        $this->code = $code;
        $this->expiration_date = $expiration_date;
    }
}
