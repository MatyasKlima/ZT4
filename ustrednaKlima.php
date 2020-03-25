<?php

// normalni trida ktera dedi predchozi abstraktni tridu
class ustrednaKlima extends ustrednyKlima{
    // konstanta ktera se nastavila a uz se nemeni, pristup k ni je staticky
    const TYPE = 2;

   
    //funkce pro ziskani hodnoty atributu
    public function getNapetiKlima() {
      return $this->napetiKlima;
  }
  
//fuknce ktera nastavi hodnotu atributu
   public function setNapetiKlima($napetiKlima) {
      $this->napetiKlima = $napetiKlima;
  }
}