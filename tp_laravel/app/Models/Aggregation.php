<?php 

namespace App\Models;

class Aggregation
{
    public $voiture = [];
    public $iterateur = 0;

    public function __construct($voiture)
    {
        $this->voiture = $voiture;
    }

    public function hasNext()
    {
        return isset($this->voiture[$this->iterateur]);
    }

    public function next()
    {
        return $this->iterateur = $this->iterateur + 1;
    }
}