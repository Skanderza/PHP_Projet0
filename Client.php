<?php

class Client extends Personne{

    private $adresse ;


public function __construct($nom, $prenom, $adresse){
   
    Parent::__construct($nom, $prenom);
    $this->adresse = $adresse;
}

public function getAdresse(){
    return $this->adresse;
 }   
 public function setAdresse($adresse){
     $this->adresse = $adresse;
 }

public function getCoordonnee(){
   

    echo 'Nom: '.$this->getNom();
    echo'<br/>';
    echo 'Prenom: '.$this->getPrenom();
    echo'<br/>';
    echo 'Adresse: '.$this->getAdresse();
}


}