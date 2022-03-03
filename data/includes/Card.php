<?php
require_once __DIR__ . '/Account.php';
/* 
3 - una classe che ha le seguenti caratteristiche
) Card {
    $circuit;
    $code;
    $expiration_date; (verificare che non sia scaduta)
    $card_name;
} 
*/

class Card extends Account
{
    private $circuit;
    private $code;
    private $expiration_date;
    private $card_name;
}
