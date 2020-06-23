<?php
session_start();  
 
    
try{    
    $nom=filter_input(INPUT_POST,"nom");
    $prenom=filter_input(INPUT_POST,"prenom");
    $age=filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
    
    
    if (empty($nom)){
        throw new Exception("le nom est vide",1);
    }
  
    
    if (empty($prenom)){
        throw new Exception("le prenom est vide",2);
    }
    
    if ($age===false){
        throw new Exception("Il faut mettre un entier dans le champ age",3);
    }
    
    echo '
        <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tryCatch</title>
</head>

<body>

    ';
        
    echo "Bonjour $nom $prenom vous avez $age ans";
    
    echo '</body>
</html>';
    
}
catch (Exception $ex){
    
   $_SESSION['msg']= $ex->getMessage();
   
   $_SESSION['nom']= $_POST['nom'];
   $_SESSION['prenom']= $_POST['prenom'];
   $_SESSION['age']= $_POST['age'];
   
   header("location: ".$_SERVER["HTTP_REFERER"]);   
   exit();  
}
   


?>    
    
    
    


