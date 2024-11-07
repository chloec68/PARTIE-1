<h1>Exercice 6</h1>

<h2>Résultat</h2>
<!--
Prix unitaire de l'article : 9.99 €
Quantité : 5
Taux de TVA : 0.2%
Le montant de la facture à régler est de : 59.94 €
-->

<?php



function calculerprixTTC($prixUnitaire,$nbArticles,$tauxTVA):float{
    $prixHT = $prixUnitaire * $nbArticles;
    $tva = $prixHT*$tauxTVA;
    $prixTTC = $prixHT +$tva;
    return $prixTTC;
};

echo calculerprixTTC(9.99,5,0.2);