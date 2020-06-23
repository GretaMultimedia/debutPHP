<?php

class Cercle{
      
    private $rayon;
       
    public function __construct($r=null){   
        if (is_null($r)){
            $this->rayon=0;   
        }
        else{
            $this->rayon=$r;    
        }         
    }
    
    
    public function setRayon($r){       
        if (!is_numeric($r)){
            echo "Erreur d'affectation";
            return;
        }     
        $this->rayon=$r;   
    }
    
    public function getRayon(){
        return $this->rayon;   
    }
    
    public function agrandir(){
        $this->rayon++;     
    }
    
    public function aire(){
       $aire=round(M_PI * $this->rayon * $this->rayon,2);
        return $aire;   
    }
    
    public function perimetre(){
        $peri=2*M_PI*$this->rayon;
        $peri=round($peri,2);
        return $peri;
    }
    
    public function diametre(){
        $diam=$this->rayon*2;
        return $diam;
    }
     
}