<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FactoryController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function factory(){
        $a = Factory::fabricationVoiture('Renault');
        $b = Factory::fabricationVoiture('Opel');


        return view("factory", ["a" => $a ,"b" => $b]);
    }
}