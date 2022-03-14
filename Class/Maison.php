<?php

class Maison extends Batiment implements BatiHome
{
    private bool $garage;
    private bool $chemine;

    public function Maison(String $unNom, int $uneSuperficie, String $unType, int $unNbEtage,bool $unGarage = false, bool $uneChemine = false)
    {
       $nom = $unNom;
       $superficie = $uneSuperficie;
       $type = $unType;
       $nbEtage = $unNbEtage;
       $garage = $unGarage;
       $chemine = $uneChemine;
    }

    public function getGarage() {
        return $garage;
        }
    
    public function getChemine() {
        return $chemine;
        }
}
?>