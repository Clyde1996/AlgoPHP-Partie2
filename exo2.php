<h1>Exercice 2</h1>
<p>Soit le tableau suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p> 

<?php

// DECLARATION DE VARIABLES
$capitales = array(
    "ALLEMAGNE" => "Berlin",
    "FRANCE" => "Paris",
    "ITALIE" => "Rome",
    "USA" => "Washington",
);

// Function qui permettre de cree un tableau
function afficherTableau ($array){
    echo "<table border=1><th>Pays</th><th>Ville</th>";
    foreach ($array as $key=>$value){
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
}

// Affichage Tableau

afficherTableau ($capitales);

?>