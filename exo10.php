<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment,  créer  un  formulaire complet  qui  contient  les  informations  suivantes:  champs  de  texteavec  nom,  prénom,  adresse  e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation: «Développeur Logiciel»,«Designer web», «Intégrateur» ou «Chef de projet».Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>


<?php




//DECLARATION DE VARIABLES
$coordonees = [
    "Nom" => "text",
    "Prenom" => "text",
    "Email" => "email",
    "Ville" => "text"
];

$sexe = [
    "Masculin",
    "Féminin",
    "Autre"
];

$formations = [
    "Développeur web",
    "Designeur web",
    "Développeur Logiciel",
    "Chef de projet"
];

//cette function permettre de cree zone de texte 
//this function can create text zone 
function input(array $array)
{
    $result = " ";
    foreach ($array as $input => $type) {
        $minInput = strtolower($input);
        $result .= "<label for='$minInput'>$input</label><br>
        <input type='$type' name='$minInput' id='$minInput'><br>";
    }
    return $result;
}

//cette function perettre de cree des butons radio
//this function can create radio butons
function radio(array $array)
{
    $result = " ";
    foreach ($array as $radio) {
        $minRadio = strtolower($radio);
        $result .= "<input type='radio' name='sexe' id='$minRadio'>
                    <label for='$minRadio'>$radio</label><br>";
    }
    return $result;
}

//cette function permettre de cree un liste dorulante
//this function can create dropdown list
function dropdown(array $options)
{
    $result = " ";
    $result .= "<select name='formation'>";
    foreach ($options as $option) {
        $result .= "<option value='$option'>$option</option>";
    }
    $result .= "</select><br>";
    return $result;
}



function formulaire(array $coordonees, array $sexe, array $formations)
{
    $result = "<form action='#' method='POST'>";
    $result .= input($coordonees);
    $result .= radio($sexe);
    $result .= dropdown($formations);
    $result .= "<input type='submit' value='Valider'>";
    $result .= "</form>";
    return $result;
}

echo formulaire($coordonees, $sexe, $formations);


?>