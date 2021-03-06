<?php

/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare
uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.


CONSIGLI DEL GIORNO
Cerchiamo di fare un po' di analisi aiutandoci con qualche schemino (Sulla carta o su draw.io et similia)
Occupiamoci di una classe alla volta, procedendo con le classi via via relazionate tra loro
Non preoccupatevi subito della visibilità: in un primo momento potete lasciare tutto in public e poi man mano ragionare su cosa sia meglio.
Lasciamo perdere la validazione coi type hint: in questa fase ci sporcano il codice rendendo la lettura più difficile. Potrete aggiungerli una volta soddisfatti del lavoro finale!
Non cercate di strafare, concentratevi sulle classi e le loro proprietà metodi, se riuscite a istanziare e far vedere i var_dump in pagina come fatto in classe va più che bene
*/

/*
//! Ho provato ad utilizzare Draw-io, ma non mi viene comodo. Provo a schematizzare qui

1 - una classe che ha le seguenti caratteristiche
) Account {
    $first_name;
    $last_name;
    $age;
    $card; (verificare che non sia scaduta)
    $logged (si aspetto un booleano come risposta)
}

2 - una classe che ha le seguenti caratteristiche
) Product {
    $name;
    $brand;
    $amount;
}

2a - una classe, figlia della 2, che ha le caratteristiche del padre con in più le seguenti:
) SelectedProduct {
    $color;
    $price;
    $animal; (per che animale serve)
    $type; (può essere corto, lungo, a strozzo ..)
}

3 - una classe che ha le seguenti caratteristiche
) Card {
    $name_owner;
    $code;
    $expiration_date; (verificare che non sia scaduta)
    $card_name;
}


