<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Singleton;

class SingletonController extends Controller
{

    public function show()
    {
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();
        return view('singleton', ['a' => $a, 'b' => $b]);
    }

}