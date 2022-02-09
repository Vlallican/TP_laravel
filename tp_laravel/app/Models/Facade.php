<?php 

namespace App\Models;


class Facade
{

    public static function commander($nomConcess){
        $newCar = Factory::fabricationVoiture('Renault');
        $newCar2 = Factory::fabricationVoiture('Opel');

        $concession = new Concession($nomConcess);

        $concession->addCarToGarage($newCar);
        $concession->addCarToGarage($newCar2);
        //dd($concession);
        $facture = new Facture();

        $facture->addToFacture($newCar);
        $facture->addToFacture($newCar2);
        //dd($facture);
        $recap = ['voiture1'=> $newCar,'voiture2' =>$newCar2, 'concession' => $concession->getGarage(), 'facture'=> $facture->getPrix()];

        return json_encode($recap);
    }

}