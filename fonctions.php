<?php

function bonjour($nom=null){
    
    if (is_null($nom)){
        echo "Bonjour tout le monde<br>";   
    }
    else{
        echo "Bonjour $nom!<br>";    
    }
    
}

bonjour("Laura");
bonjour("Amandine");

bonjour("Nicolas");
bonjour("Jean-luc");
bonjour();




