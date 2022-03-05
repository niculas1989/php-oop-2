<?php

require_once __DIR__ . '/data/includes/Account.php';
require_once __DIR__ . '/data/includes/SelectedProduct.php';
require_once __DIR__ . '/data/includes/Cart.php';


$account = new Account('Nicolas', 'Maranzano', 32, 'Credit Card');
var_dump($account);

$my_card = new Card('Maestro', 123456789, 22, 1000);
var_dump($my_card);

$account->setAddress('Italia', 'Palermo', 'Via degli arei', '90100');
var_dump($account);
