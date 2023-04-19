<h1>Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<?php


// Cette Function permetre de cree un liste deroulante

function listeDeroulante($options) {
    echo "<select>";
    foreach ($options as $option) {
        echo "<option value='$option'>$option</option>";
    }
    echo "</select>";
}

$emrat = array("Monsieur","Madame","Mademoiselle");
listeDeroulante($emrat);





?>