<?php
    require "lib/cercles.lib.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cercles</title>
    
    <style>
        .erreur{
            color:red;
        }
    </style>
</head>

<body>
    <header>
    <h1>Les cercles</h1>
    
        
    </header>
    <main>
<?php
        
    function exit_on_error($msg=null){
        if(is_null($msg)){
            $msg="Un erreur est survenue.";       
        }
         echo "<div class=\"erreur\">$msg</div>";   
        echo "</main></body></html>";
        exit();
    }
        
        
    $formdebut=filter_input(INPUT_POST,"debut");
    $formfin=filter_input(INPUT_POST,"fin");
?>
        
        <section id="formulaire">
            
            <form method="POST">
                <p><label>Début : </label><input type="text" name="debut" value="<?php echo $formdebut; ?>"></p>
                <p><label>Fin : </label><input type="text" name="fin" value="<?= $formfin ?>"></p>
                <p><button type="submit">Afficher</button></p>
            </form>
        </section>

<?php
     if(empty($_POST)){
        echo "</main></body></html>";
        exit();  
    }
    
    
    $debut=filter_input(INPUT_POST,"debut",FILTER_VALIDATE_INT);
    if ($debut===false){
        exit_on_error("Le debut n'est pas un nombre entier.");
    }
      
    $fin=filter_input(INPUT_POST,"fin",FILTER_VALIDATE_INT);
    if ($fin===false){
        exit_on_error("La fin n'est pas un nombre entier.");
    }
    
    if ($debut>$fin){
        exit_on_error("Le début ne peut être supérieur à la valeur de fin.");   
    }
                                               
   
        
        
?>    
        <section id="resultat">
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
                    
    for ($r=$debut;$r<=$fin;$r++){                
                    
       echo"             
                    <tr>
                        <td>$r</td>
                        <td>".cercle_diametre($r)."</td>
                        <td>".cercle_perimetre($r)."</td>
                        <td>".cercle_aire($r)."</td>
                    </tr>
        ";        
    }
?>                
                </tbody>
            
            
            </table>
            
        </section>
    
    
    </main>
    
</body>
</html>
