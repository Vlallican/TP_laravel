<?php 

namespace App\Models;

class Facture
{
    private $prix = 0;

    public function getPrix(){
        return $this->prix;
    }

    public function addToFacture($nom){
        $this->prix += $nom->prix;
    }
}