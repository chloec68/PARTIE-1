<h1>Exercice 7</h1>

<h2>Résultat</h2>
<!-- L'enfant qui a 10 ans appartient à la catégorie "Minime" -->

<?php

function quelleCategorie($age){
    if($age>=6 && $age<=7){
        return "L'enfant qui a $age ans appartient à la catégorie Poussin";
    }else if($age>=8 && $age<=9){
        return "L'enfant qui a $age ans appartient à la catégorie Pupille";
    }else if($age>=10 && $age<=11){
        return "L'enfant qui a $age ans appartient à la catégorie Minime";
    }else if($age>=12){
        return "L'enfant qui a $age ans appartient à la catégorie Cadet";
    }else{
        return "Catégorie non-gérée";
    }
}

echo quelleCategorie(20)."<br>";
echo quelleCategorie(10.5)."<br>";
echo quelleCategorie(8.5)."<br>";
echo quelleCategorie(7.5)."<br>";