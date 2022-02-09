<?php

namespace App\Models;

class Observeur {

    protected $count=0;
    
    public function __construct(){}

    public function increment(){
        return $this->count++;
    }

    public function envoyer(){
        return $this->count;
    }
 
}
   
  ?>