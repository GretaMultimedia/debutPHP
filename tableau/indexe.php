<?php

/*
$mescourses[0]="pain";
$mescourses[1]="fromage";
$mescourses[2]="jambon";
*/

/*
$mescourses[]="pain";
$mescourses[]="fromage";
$mescourses[]="jambon";
$mescourses[10]="yaourts";
$mescourses[4]="poires";
$mescourses[]="carotte";
*/
    
    
$mescourses=array("pain","fromage","jambon",10=>"yaourt",4=>"poires","carotte") ;  

$mescourses[]="biscottes";



echo "le 3ème élément de ma liste est :".$mescourses[2]."<br>";
echo "le 2ème élément de ma liste est :{$mescourses[1]}<br>";



var_dump($mescourses);


