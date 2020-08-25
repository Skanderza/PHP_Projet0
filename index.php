<?php

require 'Utilisateurs.php'; //on importe la classe Utilisateurs

$utilisateur1 = new Utilisateurs('ZAHI', 'Skan', 'za@gmail.com'); //on crée un objet $utilisateur1 avec l'opérateur new

//Afficher les donnees de l'utilisateur1
echo $utilisateur1->getNom();
echo "<br/>";
echo $utilisateur1->getPrenom();
echo "<br/>";
echo $utilisateur1->getEmail();
echo "<br/>";
$utilisateur1->setNote(15);
echo $utilisateur1->getNote();
echo "<br/>";
$utilisateur1->degreImplication();

require 'auteur.php';
 
$auteur1 = new Auteur('Mozart', 'amadeus', 'amadeus@gmail.com',20, 'good');
$auteur2 = new Auteur('Spinoza', 'baruch', 'spinoza@gmail.com',20, 'good');
echo "<br/>";
echo "<br/>";
echo $auteur1->getNom();
echo "<br/>";
echo $auteur1->seConnecter();
echo "<br/>";
echo $auteur2->getNom();
echo "<br/>";
echo $auteur2->seConnecter();







/*
$utilisateur1->nom = 'ZAHI Skander'; //On donne un nom à notre objet $utilisateur1
echo 'Le nom de l\'utilisateur est: ' .$utilisateur1->nom; //Afficher la valeur donnée à la propriété nom à utilisateur
echo "<br/>";
echo $utilisateur1->seConnecter();
*/

//echo $utilisateur1->recupererAge();

/*
//On affecte des valeurs aux attributs avec les setters
$utilisateur1->setNom('Dupont');
$utilisateur1->setPrenom('Toto');
$utilisateur1->setAge(30);
$utilisateur1->setEmail('dupond@gmail.com');

//On recupére la valeur des attributs avec les getters
echo ' Le nom est '.$utilisateur1->getNom();
echo'<br/>';
echo ' Le prenom est '.$utilisateur1->getPrenom();
echo'<br/>';
echo ' L\'age est '.$utilisateur1->getAge();
echo'<br/>';
echo ' Le mail est'.' '.$utilisateur1->getEmail();

*/



/*

require 'Ville.php';

$ville1 = new Ville('Paris', 75, 'IDF', '2.14 millions');

echo $ville1->getNom();
echo "<br/>";
echo $ville1->getdepartement();
echo "<br/>";
echo $ville1->getRegion();
echo "<br/>";
echo $ville1->getHabitants();


require 'Banquier.php';

$bq1 = new Banquier('Dupond', 'Toto', 'grade1', 'paris');
echo'<br/>';
echo'<br/>';
echo'<br/>';
echo $bq1->getNom();
echo'<br/>';
echo $bq1->getPrenom();
echo'<br/>';
echo $bq1->getGrade();
echo'<br/>';
echo $bq1->getAdresse();

*/

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

require 'Produit.php';


$produit1 = new Produit('P1', 'Produit_1', 100);


//pour utiliser l'attribut static $remise

echo $produit1::getRemise();
echo'<br/>';

echo produit::getRemise();
echo'<br/>';

echo 'le nouveau prix est: '. $produit1->calculerNouveauPrix();
echo'<br/>';

$produit1::setRemise(50);
echo $produit1::getRemise();
echo'<br/>';
echo 'le nouveau prix est: '. $produit1->calculerNouveauPrix();
echo'<br/>';
echo'<br/>';
echo'<br/>';
echo'<br/>';





require 'Vehicule.php';

$vehicule1 = new Vehicule('renault',4);
$vehicule1->setType('bmw');
echo'<br/>';
echo $vehicule1->getType();

require 'Voitures.php';

$voiture1 = new Voitures('renault',4,'Clio', 4);
echo'<br/>';
echo $voiture1->controlVolume();
echo'<br/>';
echo'<br/>';
echo'<br/>';
echo'<br/>';

require 'Personne.php';


require 'Client.php';
$client1 = new Client('DUPOND', 'Toto', 'Paris');
 $client1->getCoordonnee();

require 'Electeur.php';
$electeur1 = new Electeur('DUPONT', 'Tata',1,'vote');

echo $electeur1->isVote();










?>