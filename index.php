<?php

require_once __DIR__ . '/data/includes/Account.php';
require_once __DIR__ . '/data/includes/SelectedProduct.php';
require_once __DIR__ . '/data/includes/Cart.php';

//| provo a creare un nuovo account.
$account = new Account('Nicolas', 'Maranzano', 32, 'Credit Card');
var_dump($account);

//| provo a creare una nuova carta.
$my_card = new Card('Maestro', 123456789, 22, 1000);
var_dump($my_card);

//| setto l'indirizzo dell'account, con annessa "stampa" successiva.
$account->setAddress('Italia', 'Palermo', 'Via degli arei', '90100');
var_dump($account);


$toy = new Product('Pallina', '23', 'giocoPerCani', 3, 'Gioco per cani', 'Cane', 5);

$food = new Product('Crocchette', '2', 'mangiarePerGatto', 3, 'Mangiare per gatto', 'Gatto', 10);

$cart = new Cart();

try {
    $cart->setProducts([$toy, $food]);
    var_dump($cart);
} catch (Exception $e) {
    echo $e->getMessage();
}
