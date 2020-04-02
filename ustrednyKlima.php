<?php

// abstraktni trida ktera se neda instancovat a implementuje interface
abstract class ustrednyKlima implements iustrednyKlima{
    
  protected $napetiKlima; // atribut ktery je pristupny jen ve tride a tridach dedicich
  
  /**
   * funkce pro ziskani hodnoty atributu implementovana z interfacu
   * @return int
   */
    function getNapetiKlima():int {
      return $this->napetiKlima;
  }

  /**
   * fuknce ktera nastavi hodnotu atributu implementovana z interfacu
   * @param int $napetiKlima
   * @return int
   */
  function setNapetiKlima(int $napetiKlima):int {
      $this->napetiKlima = $napetiKlima;
  }




}