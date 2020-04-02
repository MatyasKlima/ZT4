<?php
declare (strict_types =1);
class a {
    
}
// normalni trida ktera dedi predchozi abstraktni tridu
class ustrednaKlima extends ustrednyKlima{
    
    // konstanta ktera se nastavila a uz se nemeni, pristup k ni je staticky
    const TYPE =2;

   
    
    /**
     * funkce pro ziskani hodnoty atributu
     * @return int
     */
    public function getNapetiKlima():int {
      return $this->napetiKlima;
  }
  
/**
 * @param int $napetiKlima
 * @return int
 */
   public function setNapetiKlima(int $napetiKlima) : int {
      $this->napetiKlima = $napetiKlima;
  }
}