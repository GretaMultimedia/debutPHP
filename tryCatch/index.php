<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tryCatch</title>
</head>

<body>
    
    <h1>Bonjour Dernière</h1>
    
<?php
   
    if (!empty($_SESSION['msg'])){
        echo "<p class=\"alerte\">{$_SESSION['msg']}</p>"; 
        unset($_SESSION['msg']);
    }
    
    
    $nom=$prenom=$age='';
    
    if (!empty($_SESSION['nom'])){
        $nom=$_SESSION['nom']; 
        unset($_SESSION['nom']);
    }
    
    if (!empty($_SESSION['prenom'])){
        $prenom=$_SESSION['prenom']; 
        unset($_SESSION['prenom']);
    }
    
    if (!empty($_SESSION['age'])){
        $age=$_SESSION['age']; 
        unset($_SESSION['age']);
    }
    
?>    
    
    
    <form action="bonjour.php" method="post"> 
            
        <p>nom : <input type="text" name="nom" value="<?=$nom?>"> </p>
        <p>prenom : <input type="text" name="prenom" value="<?=$prenom?>"> </p>
        <p>age : <input type="text" name="age" value="<?=$age?>"> </p>
        
        <p><button>Envoyer</button></p>
    
    </form>
    
    
    
</body>
</html>
