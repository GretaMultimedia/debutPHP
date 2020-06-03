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
if ($age>=18){
    $status="majeur";   
}
else{
    $status="mineur";   
}


echo "Bonjour $prenom $nom.<br>Vous êtes $status.";