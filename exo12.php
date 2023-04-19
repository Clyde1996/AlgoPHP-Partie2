<h1>Exercice 12</h1>
<p>La fonction var_dump($variable)permet d’afficher les informations d’une variable.Soit le tableausuivant : $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>

<?php

// Tableau de valeurs
$tableauValeurs = array(true, "texte", 10, 25.369, array("valeur1", "valeur2"));

// Parcourir le tableau avec une boucle
foreach ($tableauValeurs as $valeur) {
    // Afficher les informations de la variable avec var_dump()
    var_dump($valeur);
    echo "</br>";
}
?>