<?php

require('cercle.class.php');


$c=new Cercle(5);



$c->setRayon(5);
$c->agrandir();


echo "Le rayon de C est de : " . $c->getRayon().".";
echo "<br>son aire est de ".$c->aire().".";
echo "<br>son perimetre est de ".$c->perimetre().".";
echo "<br>son diametre est de ".$c->diametre().".";

