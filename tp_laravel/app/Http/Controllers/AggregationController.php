<?php

namespace App\Http\Controllers;

use App\Models\Facade;
use App\Models\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AggregationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function aggregation(){


        $aggregation = Factory::fabricationVoiture('Renault');
        $facade =Facade::commander('PSA');

        $iterateur=$facade;
        return ["Aggregation", ["aggregation" => $iterateur]];
         

    }
}