<?php 

namespace App\Models;

class Concession
{

    private $garage = [];

    public $nom;

    public function __construct($nom){
        $this->nom = $nom;
    }

    public function getGarage(){
        return $this->garage;
    }

    public function addCarToGarage($nomCar){
        array_push($this->garage, $nomCar);

        return $this->garage;
    }
}