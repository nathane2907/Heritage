<?php

class Immeuble extends Batiment
{
    private bool $ascenseur;
    private bool $garage;
    private int $nbAppartement;

    public function Immeuble(String $unNom, int $uneSuperficie, String $unType, int $unNbEtage,bool $unAscenseur = false, bool $unAppartement = false)
    {
       $nom = $unNom;
       $superficie = $uneSuperficie;
       $type = $unType;
       $nbEtage = $unNbEtage;
       $ascenseur = $unAscenseur;
       $nbAppartement = $unAppartement;
    }

    public function getNbAppartement() {
        return $nbAppartement;
        }
    
    public function getAscenseur(){
        return $unAscenseur;
    }

    public function getGarage(){
        return $garage;
    }

    public function setGarage(){
        return $garage;
    }
}
?>