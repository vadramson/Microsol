<?php

class Bonus{
    private $bnid;
    private $bn_code;
    private $bn_reason;
    private $bn_amt;
    private $bn_beneficiary;
    
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function bnid() {
        return $this->bnid;
    }
    
    public function bn_code() {
        return $this->bn_code;
    }
 
    public function bn_reason() {
        return $this->bn_reason;
    }
    
    public function bn_amt() {
        return $this->bn_amt;
    }
    
    public function bn_beneficiary() {
        return $this->bn_beneficiary;
    }
    
    public function setBn_code($bn_code) {
        if (is_string($bn_code)){
            $this->bn_code = $bn_code;
        }
    }

    public function setBn_reason($bn_reason) {
        if (is_string($bn_reason)) {
            $this->bn_reason = $bn_reason;
        }
    }
    
    public function setBn_amt($bn_amt) {
        if (is_string($bn_amt)) {
            $this->bn_amt = $bn_amt;
        }
    }
    
    public function setBn_beneficiary($bn_beneficiary) {
        if (is_string($bn_beneficiary)) {
            $this->bn_beneficiary = $bn_beneficiary;
        }
    }
    
    

    public function hydrate(array $donnees) {
        if (isset($donnees['bnid'])) {
            $this->bnid = ($donnees['bnid']);
        }

        if (isset($donnees['bn_code'])) {
            $this->setBn_code($donnees['bn_code']);
        }

        if (isset($donnees['bn_reason'])) {
            $this->setBn_reason($donnees['bn_reason']);
        }
        
        if (isset($donnees['bn_amt'])) {
            $this->setBn_amt($donnees['bn_amt']);
        } 
        
        if (isset($donnees['bn_beneficiary'])) {
            $this->setBn_beneficiary($donnees['bn_beneficiary']);
        }
        
        
        
    }
    
    
}

class GmBo{

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

class TimeBo{
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