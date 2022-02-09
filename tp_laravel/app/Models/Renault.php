<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renault Extends Voiture
{
    public $nom;
    public $prix;

    function __construct(){
        $this->nom = 'Renault';
        $this->prix = 2000;
    }
}