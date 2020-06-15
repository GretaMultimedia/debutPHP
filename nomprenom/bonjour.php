<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bonjour</title>
</head>

<body>
   
<?php
    require "lib/helpers.lib.php";
    $prenom=filter_input(INPUT_POST,"prenom");
    $prenom=format_prenom($prenom);
    
    $nom=filter_input(INPUT_POST,"nom");
    $nom=format_nom($nom);
    echo "Bonjour $nom $prenom";
    
?>    
    
</body>
</html>
