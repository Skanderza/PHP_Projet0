<?php
class Auteur extends Utilisateurs{

   private $note;
   private  $avis;


   public function __construct($nom, $prenom, $email, $note, $avis){
   

    //Pour recuperer le constructeur de la classe mère Utilisateur on utilise Parent::__construct($nom, $prenom, $email)
 Parent::__construct($nom, $prenom, $email);
    $this->setNote($note);
    $this->setAvis($avis);
  }



   public function getNote(){
    return $this->note;
 }   
 public function setNote($note){
     $this->note = $note;
 }
 public function getAvis(){
    return $this->avis;
 }   
 public function setAvis($avis){
     $this->avis = $avis;
 }

    function seConnecter(){
        echo "Je suis un auteur de votre application, je peux me connecter"." ".$this->nom.' '.$this->getPrenom();
    }



    }



