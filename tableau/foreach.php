<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table{
         border-collapse: collapse;
        }
        td{
         border:1px solid black;
        }
    </style>
</head>

<body>
    
<table>
    
    <tr>
        <td>Nom :</td>
        <td>CRECY</td>
    </tr>
    <tr>
        <td>Prénom :</td>
        <td>Jérôme</td>
    </tr>

</table>    
    
    

<?php
    
    $contact=array(
            "nom"=>"CRECY",
            "prenom"=>"Jérôme",
            "tel"=>"06.67.89.32.12",
            "mail"=>"jcrecy@gmail.com"
            );
    
    echo "<table>";
    foreach ($contact as $propriete=>$val){
        echo "
            <tr>
                <td>$propriete :</td>
                <td>$val</td>
            </tr>";

        
    }
    echo "</table>";
?>

    
</body>
</html>
