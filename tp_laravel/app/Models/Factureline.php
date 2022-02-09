<?php 

namespace App\Models;

class FactureLine
{
    public function __construct(){}

    public function strategieVoiture($voiture){
        if($voiture='Opel'){
            $voitureOpel = new StrategieOpel();
            return $voitureOpel->getTva();
        }
        else {
            $voitureRenault = new StrategieRenault();
            return $voitureRenault->getTva();
        }
    }
}