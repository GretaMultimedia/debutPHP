<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session 3</title>
</head>

<body>
    
Bonjour <?= $_SESSION['nom'];?> tu as <?= $_SESSION['age']?>.
    
    
<?php
    
  unset($_SESSION['nom']);  

  session_destroy();
?>

    
</body>
</html>
