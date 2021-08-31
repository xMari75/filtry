<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produkt
 *
 * @author Mari
 */
class Produkt {
    private $jmeno;
    private $vyrobce;
    private $cena;
    
    public $vlastnosti = [];
    
    public function __construct($jmeno, $vyrobce, $cena) {
        $this->jmeno = $jmeno;
        $this->vyrobce = $vyrobce;
        $this->cena = $cena;
    }
    
    public function PridejVlastnost($nazev, $hodnota) {
        $vlastnost = new Vlastnost($nazev, $hodnota);
        $this->vlastnosti[] = $vlastnost;
    }
    

    public function VypisVlastnosti() {
        $result = '';
        foreach ($this->vlastnosti as $item) {
            $result .= $item;
        }
        return $result;
    }
        
    public function __toString() {
        return "$this->jmeno - $this->vyrobce - $this->cena <br />". $this->VypisVlastnosti().'<hr>';
    }
}
