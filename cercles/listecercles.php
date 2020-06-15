<?php
require "cercles.lib.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cercles</title>
    
    <style>
        table{
            margin:auto;  
             border-collapse: collapse;
        }
        th,td{
            border:1px solid black;  
        }
        
        tbody tr:nth-of-type(odd){
            background-color: burlywood;   
        }
    
    </style>
</head>

<body>
<?php    
 $debut=filter_input(INPUT_POST,"debut",FILTER_VALIDATE_INT);      
    
    if ($debut===false){
        echo "Vous devez saisir une valeur de debut numerique";
        echo "</body>
        </html>";
        exit();     
    }
            
            
    $fin=filter_input(INPUT_POST,"fin",FILTER_VALIDATE_INT);
    
    if ($fin===false){
        echo "Vous devez saisir une valeur de fin numerique";
        echo "</body>
        </html>";
        exit();     
    }
    
    if ($debut>$fin){
         echo "Le debut ne peut être supérieur à la fin.";
        echo "</body>
        </html>";
        exit();
    }
?>     
    
    
    <table>
        <thead>
        <tr>
            <th>Rayon</th>
            <th>Diamètre</th>
            <th>Périmètre</th>
            <th>Surface</th>
        </tr>
        </thead>
        <tbody>
<?php  
   
            
            
    for ($rayon=$debut;$rayon<=$fin;$rayon++){
    
      $diametre=cercle_diametre($rayon);
      $perimetre=cercle_perimetre($rayon);
      $surface=cercle_aire($rayon);
        
      echo"      
            <tr>
                <td>$rayon</td>
                <td>$diametre</td>
                <td>$perimetre</td>
                <td>$surface</td>
            </tr>
           "; 
    }
            
?>        
        
        </tbody>
    
    
    
    </table>
    
    
    
</body>
</html>
