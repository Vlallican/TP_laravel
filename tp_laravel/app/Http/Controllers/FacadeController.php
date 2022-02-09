<?php

namespace App\Http\Controllers;

use App\Models\Facade;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FacadeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function facade(){
        $facade =Facade::commander('PSA');
        $facade =Facade::commander('PSA');


        return view("facade", ["facade" => $facade]);
    }
}