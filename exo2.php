<h1>Exercice 2</h1>

<h2>Résultat</h2>

<!-- La phrase "Notre formation DL commence aujourd'hui" contient 5 mots. -->

<?php

$phrase = "Notre formation DL commence aujourd'hui";

$nbMots = str_word_count($phrase);
echo "La phrase ".$phrase." contient ". $nbMots." mots"."<br>";
echo "La phrase $phrase contient $nbMots mots <br>";