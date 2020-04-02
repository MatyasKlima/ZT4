<?php

// interface ve kterem jsou predem dane funkce ktere musi class implementovat
interface iustrednyKlima {
    function getNapetiKlima(); //funkce ktera se musi implementovat
    
    
    /**
     * funkce ktera se musi implementovat
     * @param int $napetiKlima
     * @return int
     */
    function setNapetiKlima(int $napetiKlima):int; 
}