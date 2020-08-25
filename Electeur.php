<?php
class electeur extends personne{

    private $bureauVote;
    private $vote;


  public function __construct($nom, $prenom, $bureauVote, $vote){
      Parent::__construct($nom, $prenom);
      $this->bureauVote = $bureauVote;
      $this->bote = $vote;
  }



  public function getBureauVote(){
    return $this->bureauVote;
 }   
 public function setBureauVote($bureauVote){
     $this->bureauVote = $bureauVote;
 }
 public function getVote(){
    return $this->vote;
 }   
 public function setVote($vote){
     $this->vote = $vote;
 }

 public function boolVote(){
     if($this->getVote){
         return true;
     }else {
         return false;
     }
 }
 
 public function isVote(){
     if($this->getVote){
         echo ' A voté!';
     }else {
         echo 'N\'a pas voté!'  ;   }
 }

}