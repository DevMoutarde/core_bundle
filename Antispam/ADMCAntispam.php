<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ADMC\CoreBundle\Antispam;

class ADMCAntispam{
    
    private $longueur;
    
    public function __construct($text){
        $this->longueur = $text;
}
    
    public function isSpam($text){
        
        return strlen($text) < $this->longueur;
    }
}