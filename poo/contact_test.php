<?php

require 'contact.class.php';

$monContact=new Contact();

echo "mon contact s'appelle : ".$monContact->prenom.".";

$monContact->prenom="Jules";

echo "<br>mon contact s'appelle : ".$monContact->prenom.".<br>";

$monContact->saluer();



echo "<hr>";

$nico=new Contact("Matrat","Nicolas","nicolas@matrat.com");
$nico->saluer();


