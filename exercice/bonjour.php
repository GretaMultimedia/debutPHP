<?php

//Récupération des infos du formulaire

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$age=$_POST["age"];


//Definition du status

if ($age>=18){
    $status="majeur";   
}
else{
    $status="mineur";   
}
