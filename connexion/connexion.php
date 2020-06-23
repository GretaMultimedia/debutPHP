<?php
session_start();

/*Les identifiants attendus*/
$loginAttendu="jerome";
$mdpAttendu="secret";


/*Les identifiants reçus*/
$loginRecu=filter_input(INPUT_POST,'login');
$mdpRecu=filter_input(INPUT_POST,'mdp');


if ($loginAttendu == $loginRecu && $mdpAttendu==$mdpRecu){

    header("location: https://www.google.com");
}
else{

   $_SESSION["msg"]="Erreur d'authentification";    
    
   header("location: ".$_SERVER['HTTP_REFERER']);
}
