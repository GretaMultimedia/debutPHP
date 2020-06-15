<?php

function format_prenom($p){
    $prenom=trim($p);
    $prenom=mb_convert_case($prenom,MB_CASE_TITLE,"UTF-8");
    return $prenom;
}

function format_nom($n){
    $nom=trim($n);
    $nom=mb_strtoupper($nom,"UTF-8");
    return $nom;
}