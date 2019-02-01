<?php

class ConAccount{
    private $conacctid;
    private $conacctnum;
    private $conacctbalance;
    private $conaccttype;
    private $conacctstatus;
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function conacctid() {
        return $this->conacctid;
    }
 
    public function conacctnum() {
        return $this->conacctnum;
    }
    
    public function conacctbalance() {
        return $this->conacctbalance ;
    } 
    
    public function conaccttype() {
        return $this->conaccttype;
    }
    
    public function conacctstatus() {
        return $this->conacctstatus;
    }
 
    public function setConacctnum($conacctnum) {
        if (is_string($conacctnum)){
            $this->conacctnum = $conacctnum;
        }
    }

    public function setConacctbalance($conacctbalance) {
        if (is_string($conacctbalance)) {
            $this->conacctbalance = $conacctbalance;
        }
    }
    
    public function setConaccttype($conaccttype) {
        if (is_string($conaccttype)){
            $this->conaccttype = $conaccttype;
        }
    }
    
    public function setConacctstatus($conacctstatus) {
        if (is_string($conacctstatus)){
            $this->conacctstatus = $conacctstatus;
        }
    }
   
    public function hydrate(array $donnees) {
        if (isset($donnees['conacctid'])) {
            $this->conacctid = ($donnees['conacctid']);
                          }
 
        if (isset($donnees['conacctnum'])) {
            $this->setConacctnum($donnees['conacctnum']);
        }

        if (isset($donnees['conacctbalance'])) {
            $this->setConacctbalance($donnees['conacctbalance']);
        }
        
        if (isset($donnees['conaccttype'])) {
            $this->setConaccttype($donnees['conaccttype']);
        }
        
        if (isset($donnees['conacctstatus'])) {
            $this->setConacctstatus($donnees['conacctstatus']);
        }
        
    }
    
    
}

class GmConAcct{

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

class TimeConAcct{
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