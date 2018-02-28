<?php

class Voiture{
	public $couleur;
	public $motorisation;
	public $prix;
	public $vitesse;

	public function afficheCouleur() {
		return'je suis une voiture '.$this->couleur.'<br>';
	}

	public function avancer(){
		return "Je peux rouler à ".$this->vitesse.'<br>';
	}

	public function affiche_motorisation(){
		return "ma motorisation est du ".$this->motorisation."<br>";
	}
	public function affiche_prix(){
		return "je coute ".$this->prix;
	}

}

$Voiture = new Voiture();
$Voiture->couleur ='bleu';
$Voiture->vitesse ="250 km/h";
$Voiture->motorisation = 'Diesel';
$Voiture->prix ="15 000";

echo $Voiture->afficheCouleur();
echo $Voiture->avancer();
echo $Voiture->affiche_motorisation();
echo $Voiture->affiche_prix().' €';


/*class Livre {
public $author;
public $title;
public $content;

public function searchWord($word){
$word_position = str_pos($this->content,$word);
if($word_position !== false){
return "Le livre contient le mot ".$word." à la position ".$word_position;
} else {
return "Le livre ne contient pas le mot ".$word;
}
}

}
$Livre->title="Glacial";
$Livre->content="Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spéci";


//recherche mot
echo $Livre->searchWord('imprimerie');
echo '<br>';
echo $Livre->searchWord('tatayoyo');*/


/*$Voiture->prix ='15 000 euros';
$Voiture->motorisation = 'Diesel';
$Voiture->vitesse ='220 km/h';

echo'je suis une voiture '.$Voiture->couleur.'. ';
echo$Voiture->avancer();
echo' et ';
echo$Voiture->freiner().'<br>';
echo'Je coûte ';
echo$Voiture->prix.'. ';*/
