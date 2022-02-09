<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opel Extends Voiture
{
    public $nom;
    public $prix;

    function __construct(){
        $this->nom = 'Opel';
        $this->prix = 400;
    }
}