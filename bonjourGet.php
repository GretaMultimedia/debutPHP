<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Ma première page en php</title>
    
    </head>
    <body>
<?php
/*
url d'interrogation
http://localhost/debutPHP/bonjourGet.php?nom=Paul&prenom=Pierre&age=62

*/
        $nom=$_GET["nom"];
        $prenom=$_GET["prenom"];
        $age=$_GET["age"];
        
        echo "bonjour $prenom $nom dans 3 ans tu auras ".($age + 3)." ans";
        
        
        
        echo "Bonjour {$_GET["prenom"]} {$_GET["nom"]} vous avez {$_GET["age"]} ans.";
        
        
?>        
        
    
    </body>
</html>