<h1>Exercice 1</h1>
<p>Créer une fonction personnalisée convertirMajRouge()   permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge. Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);</p>

<?php

function convertirMajRouge($texte) {

    $myTexte = strtoupper($texte); //Lettres en Majuscule
    
    echo "<p style='color:red;'>$myTexte</p>"; // affichage en rouge
}

$texte ="Mon texte en parametres";

convertirMajRouge($texte);


















?>