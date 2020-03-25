<?php
include 'iustrednyKlima.php'; // inkludovani interface
include 'ustrednyKlima.php'; // inkludovani abstraktni tridy
include 'ustrednaKlima.php'; // inkludovani dedici tridy


$napetiKlima = 20; // nastavime napeti
$newKlima = new ustrednaKlima(); // instance tridy ustrednaKlima
var_dump($newKlima::TYPE); //  var dump konstanty TYPE
$newKlima->setNapetiKlima($napetiKlima);  // nastaveni atributu pomoci instacniho pristupu k fuknci
var_dump($newKlima->getNapetiKlima());    // vypsani atributu ve var dump instancnim zpusobem