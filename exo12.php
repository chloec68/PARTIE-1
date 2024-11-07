<h1>Exercice 12</h1>

<h2>Résultat</h2>

<?php

$prenomLangage = [
    "Marie-Claire" => "ENG",
    "Mickaël" => "FRA",
    "Virgile" =>  "ESP"
];

ksort($prenomLangage);

foreach($prenomLangage as $prenom => $langage){
    switch ($langage){
        case "ENG":
            echo "Hello $prenom <br>";
            break;
        case "FRA":
            echo "Salut $prenom <br>";
            break;
        case "ESP":
            echo "Hola $prenom <br>";
            break;
    };
};






