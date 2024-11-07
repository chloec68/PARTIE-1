<h1>Exercice 4</h1>

<h2>Résultat</h2>
<!-- La phrase "Engage le jeu que je le gagne" est palindrome -->

<?php

$phrase = "Engage le jeu que je le gagne";

function palindrome($string){
// to lower case
$reversed = strrev($string);
$lowerCaseCopy = strtolower($reversed);
$lowerCaseOriginal = strtolower($string);

// // deleting spaces
$noSpaceOriginal = str_replace(" ","",$lowerCaseOriginal);
$noSpaceCopy = str_replace(" ","",$lowerCaseCopy);

    if($noSpaceCopy == $noSpaceOriginal){
        return "$string est un palindrome";
    }else{
       return "$string n'est pas un palindrome";
    };
};

echo palindrome($phrase)."<br>";

echo palindrome("Je suis grande")."<br>";

// Pourquoi ça ne marche pas avec la fonction native trim?
