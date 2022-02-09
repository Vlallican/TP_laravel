<?php

namespace App\Http\Controllers;

use App\Models\Facade;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CommandController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function command(){
        return view("command");
    }
}