<h1>Exercice 8</h1>

<h2>Résultat</h2>

<?php

// TYPE DE BOUCLE 1 
$number = 8;

function tableMultiplication ($number){
    for($i=1; $i<=10; $i++){
        $result = $i * $number;
        $affichage =  $i." x ". $number  ." = "  . $result."."."<br>";
        echo $affichage;
    }
}

 tableMultiplication($number);
echo "<br>";
// A NOTER : Si on sort echo de la boucle, l'affichage n'est pas le bon / raison : présence de HTML 

// TYPE DE BOUCLE 2 

$range = range(1,10);
$number = 8;

foreach($range as $i) { 
    $result = $i*$number;
    echo $i." x 8 = ".$result."<br>"; 
}
echo "<br>";
// OU

foreach(range(1,10) as $i) { 
    $result = $i*$number;
    echo $i." x 8 = ".$result."<br>"; 
}