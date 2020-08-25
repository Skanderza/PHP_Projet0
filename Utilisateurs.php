<?php
class Utilisateurs{
     protected $nom;
     protected $prenom;
     protected $age;
     protected $email;

     private $note;
     const NREF_Basse = 10;
     const NREF_Haute = 15;

public function __construct($nom, $prenom, $email){
      //  echo " Je suis le constructeur et je suis exécuté";

//on met le control puis on rajoute les setters dans le controlleur

      $this->setNom($nom);
      $this->setPrenom($prenom);
      //puisque on a un controle dans setEmail le controlleur fait appel a setEmail
      $this->setEmail($email);
    }


function  degreImplication(){
    if($this->getNote()>=self::NREF_Haute){
        echo  '<font color ="blue">'.'La contribution de cet utilisateur est excellente'."</font>";
    }else if ($this->getNote()>=self::NREF_Basse){
        echo 'La contribution de cet utilisateur est moyenne';
    }else {
        echo '<font color ="red">'.'La contribution de cet utilisateur est insuffissante'."</font>";
    }
}    



     function seConnecter(){
         echo "Je suis un utilisateur de votre application, je peux me connecter";
     }
    function seDeconnecter(){
        echo "Je ne suis pas un utilisateur de votre application, je ne peux pas me connecter";
    }
    public function recupererAge(){ //pour utiliser une propriété qui est en private on passe par la méthode
        return $this->age;
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
//Controle à faire: l'age doit être compris entre 1 et 120
    public function setAge($age){
        if(!is_numeric($age)){
            throw new Exception ("Entrez un nombre");
        }
        else if(  $age<1 || $age>120){
            throw new Exception("l\'age doit être compris entre 1 et 120");
        }
        else{
        $this->age = $age;
    } 
}
    public function getAge(){
        return $this->age;
    }

    public function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
        }else {
            throw new Exception ("Email invalide");
        }
    } 
    public function getemail(){
        return $this->email;
    }

    public function getNote(){
        return $this->note;
     }   
     public function setNote($note){
         $this->note = $note;
     }

}

?>