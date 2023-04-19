<?php

/*
    string : chaîne de caractères (ex. "Salut !")
    int : entier (ex. 7)
    float : décimal (ex. 3.14)
    bool : booléen (seulement 2 valeurs possibles : true et false (vrai ou faux). ex. true)
*/

class Voiture {
// attributes (attributs) [ce qui compose la classe, les éléments qui la définissent]
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private float $vitesseActuelle;
    private bool $estDemarree;

        // constructor (constructeur) [la "fonction spéciale" (magic method / méthode magique) qui permet d'instancier cette classe, de créer un objet qui sera une instance de cette classe. Elle accepte des arguments]

    public function __construct($marque, $modele, $nbPortes, $vitesseActuelle=0, $estDemarree = false) {
        
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = $vitesseActuelle;
        $this->estDemarree = $estDemarree;
    }

    // Méthode pour démarrer la voiture
    public function demarrer(){
        if ($this->estDemarree) {
            echo "Le vehicule " . $this->marque . " " .  $this->modele . " est déjà demarré<br />";
        } else {
            echo "Le vehicule " . $this->marque . " " . $this->modele . " demarre<br />";
            $this->estDemarree = true;
        }
    }

    // TODO accelerer() : if/else
    
    // Méthode pour accélérer la voiture
    public function accelerer(){
        $deltaVitesse = 30;
        $this->vitesseActuelle += $deltaVitesse;
        
        echo "Le vehicule " . $this->marque . " " . $this->modele . " accélère de " . $deltaVitesse . "km/h<br />";   
    }

    // TODO stopper() : if/else

    // Méthode pour arrêter la voiture
    public function stopper(){
        if ($this->estDemarree) {
        echo "Le vehicule " .  $this->getNomComplet() . " est stoppé<br />";
        }
        else {
            echo "Le vehicule "  . $this->marque . " " . $this->modele . " démarre<br />";
        }
        $this->vitesseActuelle = 0;
        $this->estDemarree = false;
    }

    // TODO : créer une méthode getNomComplet() qui renvoie un string ex. "Peugeot 408" (marque [espace] modèle) et s'en servir partout où il y a "$this->marque . $this->modele" (et l'appeler avec $this->getNomComplet())

    public function getNomComplet(){
        return $this->marque . " " . $this->modele;
    }

    // Accesseurs

    public function getMarque() {
        return $this->marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function getNbPortes() {
        return $this->nbPortes;
    }

    public function getVitesseActuelle() {
        echo "La vitesse du véhicule " . $this->marque . " " . $this->modele . " est de : " .$this->vitesseActuelle . "<br />";
        return $this->vitesseActuelle;
    }

    //Mutateurs

    public function setMarque($marque) {
         $this->marque = $marque;
    }

    public function setModele($marque) {
        $this->modele = $modele;
    }

    public function setNbPortes($marque) {
        $this->nbPortes = $nbPortes;
    }

    public function setVitesseActuelle($marque) {
        $this->vitesseActuelle = $vitesseActuelle;
    }


}

// création des objets = instanciation des objets (des "vrais" objets réels, plus seulement la déclaration/définition de la classe)

$peugeot = new Voiture("Peugeot", "408", "5");
$citroen = new Voiture("Citroen", "C4", "3");

$peugeot->demarrer();
$peugeot->demarrer();
$peugeot->demarrer();
$peugeot->accelerer();
$peugeot->stopper();
$peugeot->getVitesseActuelle();

$citroen->getVitesseActuelle();



?>