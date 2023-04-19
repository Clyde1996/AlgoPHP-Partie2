<h1>Exercice 14</h1>
    <p>Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec qui hérite(extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques suivantes:Peugeot 408: $v1 = new Voiture("Peugeot","408");BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);</p>
        <p>Peugeot 408: $v1 = new Voiture("Peugeot","408");</p>
            <p>Peugeot 408: $v1 = new Voiture("Peugeot","408");</p>
            <p>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante:</p>
            <p>echo $v1->getInfos()."<br/>";echo $ve1->getInfos()."<br/>";</p>
    <?php

class Voiture {
    // attributes (attributs) [ce qui compose la classe, les éléments qui la définissent]
    
    private string $marque;
    private string $modele;

   // constructor (constructeur) [la "fonction spéciale" (magic method / méthode magique) qui permet d'instancier cette classe, de créer un objet qui sera une instance de cette classe. Elle accepte des arguments]


   public function __construct($marque, $modele){
    $this->marque = $marque;
    $this->modele = $modele;
   }

   public function getInfos(){
    return "Marque: " . $this->marque . "<br />Modèle: " . $this->modele .  "<br />";
   }


}

class VoitureElec extends Voiture {
      // attributes (attributs) [ce qui compose la classe, les éléments qui la définissent]

    private int $autonomie;

     // constructor (constructeur) [la "fonction spéciale" (magic method / méthode magique) qui permet d'instancier cette classe, de créer un objet qui sera une instance de cette classe. Elle accepte des arguments] // c'est le "new" qui demande la création d'une instance de la classe

     public function __construct($marque, $modele, $autonomie){
        parent::__construct($marque, $modele); // appel au constructeur parent (à mettre en 1ère ligne)
        $this->autonomie = $autonomie;
     }

     // autres méthodes

     public function getInfos() {
        return parent::getInfos() . "Autonomie: " . $this->autonomie . " km";
     }
     
     

}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

//$v1->hello();

echo $v1->getInfos();
echo $ve1->getInfos();


    ?>