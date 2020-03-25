<?php

// abstraktni trida ktera se neda instancovat a implementuje interface
abstract class ustrednyKlima implements iustrednyKlima{
  protected $napetiKlima; // atribut ktery je pristupny jen ve tride a tridach dedicich
  
  //funkce pro ziskani hodnoty atributu implementovana z interfacu
    function getNapetiKlima() {
      return $this->napetiKlima;
  }

  //fuknce ktera nastavi hodnotu atributu implementovana z interfacu
  function setNapetiKlima($napetiKlima) {
      $this->napetiKlima = $napetiKlima;
  }




}