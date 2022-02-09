<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrategieRenault
{
    private $TVA = 0.1;

    public function __construct()
    {
        
    }

    public function getTva() 
    {
        return $this->TVA;
    }
}