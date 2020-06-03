<?php
/*
    Commentaire
    multiligne
*/

//Récupération des infos du formulaire

$nom=$_POST["nom"];         //recupération du nom
$prenom=$_POST["prenom"];   //recupération du prénom
$age=$_POST["age"];         //recupération de l'age


//Definition du status
if ($age<=12){
    $status = "enfant";   
}
elseif($age < 18){
    $status = "ado";
}
elseif($age<70){
    $status = "adulte";
}
else {
    $status = "vieux";   
}


echo "Bonjour $prenom $nom.<br>Vous êtes un $status.";