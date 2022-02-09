<?php

namespace App\Http\Controllers;

use App\Models\Observeur;
use App\Models\Sujet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ObserveurController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function observeur(){         

        $observeur1 = new Observeur();
        $observeur2 = new Observeur();
        $sujet = new Sujet();

        $observeur1->increment();
        $observeur2->increment();

        $sujet->ajoutObserveur($observeur1);
        $sujet->notifyOserveur();
        $sujet->ajoutObserveur($observeur2);

        

        $sujet->supprimerObserveur();

        $observeur1->envoyer();
        $observeur2->envoyer();

        return view('observeur', ['observeur1' => $observeur1, 'observeur2' => $observeur2]);
    }
}