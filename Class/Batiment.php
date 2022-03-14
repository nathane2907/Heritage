<?php

class Batiment implements BatiStructure
{
    private String $nom;
    private int $superficie;
    private String $type;
    private int $nbEtage;

    public function Batiment(String $unNom, int $uneSuperficie, String $unType, int $unNbEtage)
    {
       $nom = $unNom;
       $superficie = $uneSuperficie;
       $type = $unType;
       $nbEtage = $unNbEtage;
    }

    public function getNom() {
        return $nom;
        }
    
    public function getSuperficie(){
        return $superficie;
    }

    public function getType(){
        return $type;
    }

    public function getNbEtage(){
        return $nbEtage;
    }
}
?>