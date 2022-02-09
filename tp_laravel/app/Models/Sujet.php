<?php

namespace App\Models;

class Sujet {

    public $tabObserveur=[];

    public function __construct(){}

    public function ajoutObserveur($obs){
        $this->tabObserveur[]=$obs;
    }

    public function supprimerObserveur(){
        unset($this->tabObserveur[1]);
    }
    
    public function notifyOserveur(){
        $observeurTab = $this->tabObserveur;
        foreach($observeurTab as $observeur){
            $observeur->increment();
        }
    }
 
}