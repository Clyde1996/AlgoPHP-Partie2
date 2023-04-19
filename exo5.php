<h1>Exercice 5</h1>
<p>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.</p>

<?php

  // DECLARATION DE VARIABLES

   $nomsInput = array ("Nom", "Prénom", "Ville");
   


   function afficherInput($nomsInput) {
    foreach ($nomsInput as $nom) {
      echo "<label for='$nom'>$nom:</label>";
      echo "<input type='text' id='$nom' nom='$nom'><br>";
    }
   }

   
   afficherInput ($nomsInput);




?>