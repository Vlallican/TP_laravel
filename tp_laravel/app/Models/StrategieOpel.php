<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrategieOpel
{
    private $TVA = 0.2;

    public function __construct()
    {      
    }

    public function getTva() 
    {
        return $this->TVA;
    }
}