<?php

class Produit{
    private $reference;
    private $nom;
    private $prix;

    private static $remise = 20;

    public function __construct($reference, $nom, $prix){
        $this->setReference($reference);
        $this->setPrix($prix);
        $this->setNom($nom);
    }

    public function setReference($reference){
        $this->reference = $reference;
    }

    public function getReference(){
        return $this->reference;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }
   
    public function setPrix($prix){
        $this->prix = $prix;
    }

    public function getPrix(){
        return $this->prix;
    }
    
   
//Permet de recuperer la valeur de l'atribut statique $remise
    public static function getRemise(){
        return self::$remise;//Le mot clé self veut dier la classe courante
    }
//Permet de modifier l'attribut statique remise
    public static function setRemise($remise){
        self::$remise = $remise;
    }
    public function calculerNouveauPrix(){
        return $this->prix * (1-self::$remise/100); 
    }
}