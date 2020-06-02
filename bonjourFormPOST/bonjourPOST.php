<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
        html{
            font-family:lato;
        }
        h1{
            text-align:center;
        }
        
        main{
            padding:2em;
        }
        form{
            display:table;
            border-spacing: 3px;
            margin:auto;
        }
        form p{
            display:table-row;
            caption-side: bottom;
        }
        
        form label, form input{
            display:table-cell;
            
        }
        form label::after{
            content:":";
        }
        form p:last-of-type{
            display:table-caption;
            margin-top:5px;
            text-align:right;
        }   
    
        footer{
            border-top:1px solid grey;
            text-align:right;
            font-size:0.8rem;
        }
        
    </style>
    
</head>

<body>
    <header>
        <h1>Bonjour</h1>
    </header>
    <main>
<?php        
        echo "bonjour {$_POST['prenom']} {$_POST['nom']}";
        
?>        
    </main>
    <footer>
        <p>&copy; GRETA 2020</p>
    </footer>
</body>
</html>