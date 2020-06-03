<?php

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$age=$_POST["age"];


echo "Bonjour  $prenom $nom.<br>";

echo "Vous êtes ";

if($age>=18){
    echo "majeur";
}
else{
    echo "mineur";   
}

echo ".";


