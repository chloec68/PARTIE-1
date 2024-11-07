<h1>Exercice 13</h1>

<h2>Résultat</h2>

<!--
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9
Sa moyenne générale est donc de : 11.22
-->
<?php

$notes = [10,12,8,19,3,16,11,13,9];

function calculerMoyenne($notes){
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;
}
//conversion array $notes en string
$notesString = implode(", ",$notes);

//affichage
echo "Les notes obtenues par l'élève sont : ".$notesString."<br>";
echo "Sa moyenne générale est donc de : ".calculerMoyenne($notes);


