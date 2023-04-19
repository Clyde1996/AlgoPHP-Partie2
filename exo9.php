<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<?php

function genererCheckbox($elements) {
    // Parcours des éléments du tableau
    foreach ($elements as $element => $pidhi) {
      // Vérification si la case est cochée ou non
      $koqe = ($pidhi == true) ? 'checked' : '';
  
      // Génération de la case à cocher
      echo '<input type="checkbox" name="'.$element.'" '.$koqe.'>' .$element.'<br>';
    }
  }

  // Tableau associatif contenant 3 éléments
$elements = array(
    'Masculin' => false,
    'Féminin' => false,
    'Autre' => true
  );
  
  // Appel de la fonction genererCheckbox()
  genererCheckbox($elements);
?>