<?php

//Getters et Setters

class Ordinateur{
	private $_format;
	private $_prix;
	private $_taille;


    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->_format;
    }

    /**
     * @param mixed $_format
     *
     * @return self
     */
    public function setFormat($_format)
    {
        $this->_format = $_format;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->_prix;
    }

    /**
     * @param mixed $_prix
     *
     * @return self
     */
    public function setPrix($_prix)
    {
        $this->_prix = $_prix;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->_taille;
    }

    /**
     * @param mixed $_taille
     *
     * @return self
     */
    public function setTaille($_taille)
    {
        $this->_taille = $_taille;

        return $this;
    }
}



$surface_book = new Ordinateur();
$surface_book->setFormat('13.5 pouces');
$surface_book->setTaille('ordinateur portable');
$surface_book->setPrix('1500€');

echo $surface_book->getPrix().''.$surface_book->getFormat();

$macbook = new Ordinateur();
$macbook->setFormat('15 pouces');
$macbook->setTaille('ordinateur portable');
$macbook->setPrix('2500€');

echo $macbook->getFormat();
echo $macbook->getPrix().'<br>';


// Héritage

class Etre_vivant {

    public $type;

    public function respirer() {
        return 'Je respire<br>';
    }

    public function description() {
        return 'Je suis un etre vivant de type '.$this->type.'<br>';
    }
}

class Humain extends Etre_vivant {

    // On ajoute un attribut spécifique à la classe Chien
    public $genre;

    public function description() {
        parent::description(); // On exécute la méthode description de la classe parente

        return 'Je suis un etre vivant du genre '.$this->genre.'<br>'; // On ajoute un comportement spécifique à la méthode description
    }

    // On ajoute une méthode spécifique à la classe Chien
    public function boire() {
        return "Je bois";
    }
}



$Humain = new Etre_vivant();
$Humain->genre = 'Humain';
echo $Humain->description();
echo $Humain->genre;


class A {
    var $name = 'a';
}
class B extends A {
    public function showName() {
        echo $this->name;
    }
}

$b = new B();
$b->showName();







