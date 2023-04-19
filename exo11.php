<h1>Exercicie 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.</p>

<?php 
$input = "28-05-1996";
 function writeDate($inputDate) { 
    $semaine = ["0","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"]; 
    
    $mois = ["0", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    
    $dayOfWeek = $semaine[date('w', strtotime($inputDate))]; 
   
    $month = $mois[date('n', strtotime($inputDate))]; 
   
    $year = date('Y', strtotime($inputDate)); 
    
    $output = $dayOfWeek . " " . date('j', strtotime($inputDate)) . " " . $month . " " . date('Y', strtotime($inputDate));
     
    return $output; } 
     
    echo writeDate($input); 
     ?>