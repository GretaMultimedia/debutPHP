<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moutons</title>
</head>

<body>
    
<?php
    
    //si $_POST['debut'] ou $_POST['fin'] n'est pas numerique sortir (is_numeric)
    
    if (!is_numeric($_POST["debut"]) || !is_numeric($_POST["fin"])){
          
        echo "Vous devez saisir un valeur numerique";
        
        echo "</body></html>";
        
        exit();
        
    }
    
    if ($_POST["fin"]<$_POST["debut"]){
        echo "Vous devez saisir un valeur de fin supérieure à celle du début.";
        echo "</body></html>";
         exit();
    }
    
    
    
    for($nbmout=$_POST['debut'];$nbmout<=$_POST['fin'];$nbmout++){
        
       
       
        if ($nbmout<2){
             $s="";
        }
        else{
             $s="s";
        }
        
        if($nbmout%2==0){
            $couleur="green";   
        }
        else{
            $couleur="red";
        }
        
        

        echo "<span style=\"color:$couleur\">$nbmout mouton$s</span><br>\n";
        
    }
    
?>    
    
</body>
</html>
