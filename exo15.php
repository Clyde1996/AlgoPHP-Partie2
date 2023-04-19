<h1>Exercice 15</h1>
<p>En  utilisant  les  ressources  de  la  page http://php.net/manual/fr/book.filter.php,  vérifier  si  une adresse e-mail a le bon format.</p>

<?php

    // Adresse e-mail à vérifier
    $email1 = "elan@elan-formation.fr";
    $email2 = "contact@elanest";

    // Fonction de validation d'adresse e-mail
function validateEmail($email) {
    // Filtrer l'adresse e-mail avec FILTER_VALIDATE_EMAIL
    $filtered_email = filter_var($email, FILTER_VALIDATE_EMAIL);

    // Vérifier si l'adresse e-mail est valide ou non
    if ($filtered_email === false) {
        return "L'adresse e-mail $email est invalide.";
    } else {
        return "L'adresse e-mail $email est une adresse e-mail valide.";
    }
}

// Appel de la fonction de validation pour les deux adresses e-mail
echo validateEmail($email1) . "</br>";
echo validateEmail($email2) . "</br>";
?>