<h1>Exercice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).On admet que l’URL de la page Wikipédia de la capitale adopte la forme:https://fr.wikipedia.org/wiki/Le tableau passé en argument sera le suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

    <?php

   // DECLARATION DE VARIABLES

    $capitales = array(
    "ALLEMAGNE" => "Berlin",
    "FRANCE" => "Paris",
    "ITALIE" => "Rome",
    "USA" => "Washington",
    "Espagne" => "Madrid"
);





// Fucntion qui permettre de cree un tableau

function afficherTableau ($array){
    echo "<table border=1><th>Pays</th><th>Ville</th><th>Lien wiki</th>";
    $lien = "<a href = https://fr.wikipedia.org/wiki/>Lien</a>";
    foreach ($array as $key=>$value){
        
        echo "<tr><td>$key</td><td>$value</td><td>$lien</td></tr>";
    }
    echo "</table>";

   
}

// affichage tableau

afficherTableau ($capitales);
?>