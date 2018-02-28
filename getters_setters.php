<?php

class Animal {

    private $_race;
    private $_color;

    public function setRace($race) {
        if (strlen($race) > 50) {
            // On peut lancer une erreur "La race ne doit pas dépasser 50 caractères"
            return false;
        }
        $this->_race = $race;
    }

    public function getRace() {
        return ucfirst($this->_race);
    }

    public function setColor($color) {
        $this->_color = $color;
    }

    public function getColor() {
        return $this->_color;
    }
}

$chien = new Animal();
$chien->_race = 'caniche'; // Erreur fatale car la proprieté _race est private
$chien->setRace('caniche'); // Affecte la valeur 'caniche' à la proprieté _race
$chien->setColor('blanc'); // Affecte la valeur 'blanc' à la proprieté _color

echo $chien->getRace().' '.$chien->getColor(); // Affiche Caniche blanc