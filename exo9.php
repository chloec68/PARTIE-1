<h1>Exercice 9</h1>

<h2>Résultat</h2>
<!-- Age : 32 
Sexe : F 
La personne est imposable.  -->

<?php

//Solution 1 / Sans tableau de données 
 $age;
 $sexe;

function imposabilite($age,$sexe){

    if($sexe=="F" && $age>=18 &&$age<=35){
        $result = "La personne est imposable";
    }else if($sexe=="H" && $age>=20){
        $result = "La personne est imposable";
    }else{
        $result = "La personne n'est pas imposable";
    };

    return $result;
};

echo imposabilite(19,"F")."<br>";
echo imposabilite(8,"H")."<br>";

// Solution 2 / Avec un tableau de données 

$person1=[9,"H"];
$person2=[19,"F"];

function imposabilite2($person){

    if($person[1]=="F" && $person[0]>=18 && $person[0]<=35){
        $result = "La personne est imposable";
    }else if($person[1]="H" && $person[0]>=20){
        $result = "La personne est imposable";
    }else{
        $result = "La personne n'est pas imposable";
    };

    return $result;
};
echo imposabilite2($person1)."<br>";
echo imposabilite2($person2);