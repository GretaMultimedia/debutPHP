<?php



function cercle_diametre($rayon){
    $diam=$rayon*2;
    return $diam;
}

function cercle_perimetre($rayon){
    $peri=2*M_PI*$rayon;
    $peri=round($peri,2);
    return $peri;
    
}

function cercle_aire($rayon){
    
    $aire=round(M_PI * $rayon * $rayon,2);
    
    return $aire;
}



