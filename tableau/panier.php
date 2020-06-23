<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>

<body>
    <?php
    $panier=array(
        "pommes"=>5,
        "poires"=>6,
        "fraises"=>12,
        "framboises"=>53
    );
    
    
    $somme=0;
    
    foreach($panier as $fruit=>$nbfruit){
     
        echo "j'ai $nbfruit $fruit dans mon panier<br>";
        if ($fruits != "poires"){
            $somme+=$nbfruit;
        }
    }
    
    
    echo "<br>j'ai  $somme fruits dans mon panier sans compter les poires";
    
    
    
    
    
    
    
    
    ?>
    
    
    
    
</body>
</html>
