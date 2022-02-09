<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use App\Models\FactureLine;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StrategieController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function strategie(){         
        $renault = Factory::fabricationVoiture('Renault');
        $opel = Factory::fabricationVoiture('Opel');
        
        $factureLineOpel = new FactureLine();
        $factureLineRenault = new FactureLine();

        $factureLineOpel->strategieVoiture($opel);
        $factureLineRenault->strategieVoiture($renault);

        return view('strategie', ['opel' => $factureLineOpel, 'renault' => $factureLineRenault]);
    }
}