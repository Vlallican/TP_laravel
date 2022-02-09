<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory
{
    public static function fabricationVoiture($marque){
        if($marque=='Renault'){
            return new Renault();
        }
        elseif($marque=='Opel'){
            return new Opel();
        }
        return "ok";
    }

}