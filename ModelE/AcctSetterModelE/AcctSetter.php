<?php

class AcctSetter{
    private $astid;
    private $type;
    private $name;
    private $code;
    private $intrate;
    private $balance;
    private $transFee;
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function astid() {
        return $this->astid;
    }
    
     public function type() {
        return $this->type;
    }
    
    public function name() {
        return $this->name;
    }
    
    public function code() {
        return $this->code ;
    } 
    
    public function intrate() {
        return $this->intrate;
    }
    
    public function transFee() {
        return $this->transFee;
    }
    
    public function balance() {
        return $this->balance;
    }
    
    public function setType($type) {
        if (is_string($type)){
            $this->type = $type;
        }
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
    
    public function setIntrate($intrate) {
        if (is_string($intrate)){
            $this->intrate = $intrate;
        }
    }
    
    public function setBalance($balance) {
        if (is_string($balance)){
            $this->balance = $balance;
        }
    }
    
    public function setTransFee($transFee) {
        if (is_string($transFee)){
            $this->transFee = $transFee;
        }
    }
    

    public function hydrate(array $donnees) {
        if (isset($donnees['astid'])) {
            $this->astid = ($donnees['astid']);
                          }
        
        if (isset($donnees['type'])) {
            $this->setType($donnees['type']);
        }
                          
        if (isset($donnees['name'])) {
            $this->setName($donnees['name']);
        }

        if (isset($donnees['code'])) {
            $this->setCode($donnees['code']);
        }
        
        if (isset($donnees['intrate'])) {
            $this->setIntrate($donnees['intrate']);
        }
        
        if (isset($donnees['balance'])) {
            $this->setBalance($donnees['balance']);
        } 
        
        if (isset($donnees['transFee'])) {
            $this->setTransFee($donnees['transFee']);
        }
        
        
        
    }
    
    
}

class GmAs{

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

class TimeAs{
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