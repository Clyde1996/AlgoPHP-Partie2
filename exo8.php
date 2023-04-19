<h1>Exercice 8</h1>
<p><p>

<?php

function repeterImage($url, $nb_fois) {
    // Boucle pour répéter l'image plusieurs fois
    for ($i = 1; $i <= $nb_fois; $i++) {
      // Génération du code HTML pour afficher l'image
      echo '<img src="'.$url.'" alt="Image '.$i.'">';
    }
  }

  // Appel de la fonction repeterImage()
repeterImage('http://my.mobirise.com/data/userpic/764.jpg', 4);

?>