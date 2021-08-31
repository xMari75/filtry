<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vlastnost
 *
 * @author Mari
 */
class Vlastnost {
    private $nazev;
    private $hodnota;
    
    public function __construct($nazev, $hodnota) {
        $this->nazev = $nazev;
        $this->hodnota = $hodnota;
    }
    public function __toString() {
        return $this->nazev . ' - ' . $this->hodnota . '<br />';
    }
}
