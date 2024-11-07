<h1>Exercice 10</h1>

<h2>Résultat</h2>

<!--
Montant à payer : 152€
Montant versé : 200 €
Reste à payer : 48 €
***************************************************
Rendue de monnaie :
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €
-->

<?php

$sommeDue=152;
$sommeVersee=200;
$reste=$sommeVersee-$sommeDue;

$nbBillet10 =0;
$nbBillet5 = 0;
$nbPiece2 = 0;


 while($reste>=10){
   $reste -= 10 ;
    $nbBillet10 ++ ;
   
};

if($reste>=5){
    $reste = $reste-5;
    $nbBillet5 ++ ;
};

while($reste>=2){
    $reste = $reste-2;
    $nbPiece2++;
};

echo $nbBillet10." billets de 10 € - ".$nbBillet5." billets de 5 € - ".$nbPiece2." pièce de 2€ - ".$reste." pièce de 1€";










