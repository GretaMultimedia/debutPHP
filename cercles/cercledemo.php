<?php
require("cercles.lib.php");
//include("cercles.lib.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cercles</title>
</head>

<body>
    
    Un cercle 34cm de rayon a une aire de : <?= cercle_aire(34) ?> cm<sup>2</sup>
    <br>
    Un cercle 34cm de rayon a un périmètre de : <?= cercle_perimetre(34) ?> cm
    <br>
    Un cercle 34cm de rayon a un diamètre de : <?= cercle_diametre(34) ?> cm
    
 
</body>
</html>
