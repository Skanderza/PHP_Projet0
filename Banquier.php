<?php

class Banquier{
    private $nom;
    private $prenom;
    private $grade;
    private $adresse;


    public function __construct($nom, $prenom, $grade, $adresse){
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setGrade($grade);
    $this->setAdresse($adresse);
}
//destructeur pour arreter le constructeur et libérer la memoire
public function __destruct() {
    print "<br/><br/>Destruction de " . __CLASS__ . "<br/>";
}

  //getter et setter
  public function setNom($nom){
    $this->nom = $nom;
} 
public function getNom(){
    return $this->nom;
}

public function setPrenom($prenom){
    $this->prenom = $prenom;
} 
public function getPrenom(){
    return $this->prenom;
}

public function setGrade($grade){
    $this->grade = $grade;
} 
public function getGrade(){
    return $this->grade;
}

public function setAdresse($adresse){
    $this->adresse = $adresse;
} 
public function getAdresse(){
    return $this->adresse;
}
}
?>