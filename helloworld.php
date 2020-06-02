<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ma première page en php</title>
    
</head>
<body>
<?php
    $prenom="Jérôme";
    $nom="CRECY";
    $age=37;
    
    
    print ("Bonjour tout le monde !<br>Nous somme le :".date("d-m-Y"));
    echo "<br>Bonjour $nom !<br>Nous somme le :".date("d-m-Y"); 
    echo "<br><br>Bonjour $nom !<br>"; 
    echo '<br>Bonjour $nom !<br>';
    
    echo '<br>Bonjour ';
    echo $nom;
    echo '!<br>';
    
    echo '<br><span style="color:red">Bonjour '.$nom.'!<br></span>';
    
    echo "<br><br>$nom vaut $nom!<br>"; 
    
    echo '<br><br>$nom vaut '.$nom.'!<br>';
    
    echo "<br><br>\$nom vaut $nom!<br>"; 
    
    echo "<br>Bonjour <strong>\"$prenom $nom\"</strong> voua avez $age ans!";
    
    echo "<br>Dans 2 ans vous aurez ".($age + 2)." ans.";
    
    echo '<br>j\'habite rue de l\'arbre';
    
    
    
    
?>
    
</body>
</html>