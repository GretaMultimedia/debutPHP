<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    
    <style>

        form table{
            margin:auto;
            border:1ps solid grey;
        }
        tr:last-of-type td {
            text-align :right;
        }
        h1{
            text-align: center;
        }
        
        p.erreur{
         color:crimson;
         text-align: center;
        }
        
    </style>
    
</head>

<body>
    
    <h1>Connexion</h1>
    
    <form action="connexion.php" method="POST">
        <table>
            <tr>
                <td>Identifiant</td>
                <td><input type="text" name="login"></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" name="mdp"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Se connecter</button></td>
            </tr>
        
        </table>                                                                           
                                         
    </form>
    
<?php
  if (!empty($_SESSION['msg'])){
    echo "<p class=\"erreur\">{$_SESSION['msg']}</p>";
    unset($_SESSION['msg']);
  }
    
?>
    
    
</body>
</html>
