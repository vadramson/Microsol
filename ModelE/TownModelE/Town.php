<?php

class Town{
    private $idtown;
    private $name;
    private $code;
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function idtown() {
        return $this->idtown;
    }
    
    public function name() {
        return $this->name;
    }
    
    public function code() {
        return $this->code ;
    }  
    
    public function setName($name) {
        if (is_string($name)){
            $this->name = $name;
        }
    }

    public function setCode($code) {
        if (is_string($code)) {
            $this->code = $code;
        }
    }
    
    

    public function hydrate(array $donnees) {
        if (isset($donnees['idtown'])) {
            $this->idtown = ($donnees['idtown']);
                          }

        if (isset($donnees['name'])) {
            $this->setName($donnees['name']);
        }

        if (isset($donnees['code'])) {
            $this->setCode($donnees['code']);
        }
        
         
        
        
        
    }
    
    
}

class Gm{

    private $gmid;

    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    public function gmid() {
        return $this->gmid;
    }
    
       
    
    public function hydrate(array $donnees) {
        if (isset($donnees['gmid'])) {
            $this->gmid= ($donnees['gmid']);
                          }
        
        
    }
    
}

class Time{
    private $date;
    

    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    
    public function date() {
        return $this->date ;
    }
    
         public function setDate($date) {
        if (is_string($date)) {
            $this->date = $date;
        }
        
       
        
    }
    
    public function hydrate(array $donnees) {
        if (isset($donnees['date'])) {
            $this->setDate($donnees['date']);
        }
    }
    
}

?>