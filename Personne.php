<?php

class Personne{
    protected $nom;
    protected $prenom;




public function __construct($nom, $prenom){

    $this->setNom($nom);
    $this->setPrenom($prenom);
}


public function getNom(){
    return $this->nom;
 }   
 public function setNom($nom){
     $this->nom = $nom;
 }
 public function getPrenom(){
    return $this->prenom;
 }   
 public function setPrenom($prenom){
     $this->prenom = $prenom;
 }
}