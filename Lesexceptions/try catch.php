<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<?php
  
    try{
        
        echo "Message avant l'exception";
        
        throw new Exception("Exception lancée pour la démonstration",405);
        
        echo "Message après l'exception"; 
        
        
        
        
    }
    catch(Exception $e){
        
        echo "<p class=\"erreur\">Une erreure est survenue : ".$e->getMessage()."(".$e->getCode().").</p>";
        
    }
   
    echo " <p>Je m'afficherai toujours</p>";
    
    
?>    
</body>
</html>
