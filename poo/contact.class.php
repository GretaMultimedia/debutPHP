<?php
class Contact{
 
    public $nom;
    public $prenom;
    public $email;
    
    public function __construct($n=null,$p=null,$e=null){
        
        $this->nom=$n;
        $this->prenom=$p;
        $this->email=$e;
        
        
        
        
    }
    
    public function saluer(){
        echo "Bonjour $this->prenom $this->nom!";   
    }
    
}