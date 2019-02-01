<?php

class CySetter{
    private $csid;
    private $csname;
    private $cscode;
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function csid() {
        return $this->csid;
    }
    
    public function csname() {
        return $this->csname;
    }
    
    public function cscode() {
        return $this->cscode ;
    }  
    
    public function setCsame($csname) {
        if (is_string($csname)){
            $this->csname = $csname;
        }
    }

    public function setCscode($cscode) {
        if (is_string($cscode)) {
            $this->cscode = $cscode;
        }
    }
    
    

    public function hydrate(array $donnees) {
        if (isset($donnees['csid'])) {
            $this->csid = ($donnees['csid']);
                          }

        if (isset($donnees['csname'])) {
            $this->setCsame($donnees['csname']);
        }

        if (isset($donnees['cscode'])) {
            $this->setCscode($donnees['cscode']);
        }
        
         
        
        
        
    }
    
    
}

class Gmcy{

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

class Timecy{
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