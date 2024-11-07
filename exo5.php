<h1>Exercice 5</h1>

<h2>Résultat</h2>

<?php

// 1 € = 6,55957 FF
// Donc somme en F / 6.55957 = somme en euros 

function convertisseur($valeurFrancs):float{
    $tauxConversion = 6.55957;
    $valeurEuros = $valeurFrancs/$tauxConversion;
    $result = round($valeurEuros,2);
    return $result;
}

echo convertisseur(20);

