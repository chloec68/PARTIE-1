<h1>Exercice 11</h1>

<h2>Résultat</h2>

<!--
Il y a 4 marques de voitures dans le tableau :
Peugeot
Renault
BMW
Mercedes
-->

<?php

$array=["Peugeot","Renault","BMW","Mercedes"];

echo "Il y a ".count($array)." marques de voitures dans le tableau :"."<br>";

for($i=0 ; $i<count($array) ; $i++){
    $result = $array[$i]."<br>";
    echo $result;
};

