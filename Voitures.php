<?php

class Voitures extends Vehicule{

    private $marque;
    private $volume;

public function __construct($type, $nbPlaces, $marque, $volume){
    Parent::__construct($type, $nbPlaces);
    $this->setMarque($marque);
    $this->setVolume($volume);
}

public function getMarque(){
    return $this->marque;
 }   
 public function setMarque($marque){
     $this->marque = $marque;
 }
 public function getVolume(){
    return $this->volume;
 }   
 public function setVolume($volume){
     $this->volume = $volume;
 }
public function controlVolume(){
 if($this->getVolume() <=1){
     echo 'Demarrage KO';
 }else if($this->getVolume() <=5){
     echo 'Demarrage critique';
 }else {
     echo 'Demarrage ok';
 }
}


}