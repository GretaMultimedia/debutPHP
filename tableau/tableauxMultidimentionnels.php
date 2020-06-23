<?php


$listeDeCourses=array(

    "fruits"=>array(
        "pommes"=>5,
        "poires"=>6,
        "fraises"=>12,
        "framboises"=>53
        
    ),    
    "legumes"=>array(
        "courgettes"=>5,
        "carottes"=>6,
        "pommes de terre"=>12
        
    )


);


$listeDeCourses["fromage"]["brie"]=1;
$listeDeCourses["fromage"]["Saint Nectaire"]=3;
$listeDeCourses["legumes"]["navet"]=2;

//echo "j'ai ".$listeDeCourses["legumes"]["carottes"]." carottes<br>\n    "; 




foreach ($listeDeCourses as $categorie=>$articles){
    
    echo "<h3>$categorie</h3>";
        echo "<ul>";
            foreach ($articles as $art=>$qte){
                
                echo "<li>$qte $art</li>";   
            }
    
        echo "</ul>";
        
    
    
}








