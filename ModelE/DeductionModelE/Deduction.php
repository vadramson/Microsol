<?php

class Deduction{
    private $ductid;
    private $ductcode;
    private $ductreason;
    private $ductamt;
    private $ductbeneficiary;
    
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function ductid() {
        return $this->ductid;
    }
    
    public function ductcode() {
        return $this->ductcode;
    }
 
    public function ductreason() {
        return $this->ductreason;
    }
    
    public function ductamt() {
        return $this->ductamt;
    }
    
    public function ductbeneficiary() {
        return $this->ductbeneficiary;
    }
    
    public function setDuctcode($ductcode) {
        if (is_string($ductcode)){
            $this->ductcode = $ductcode;
        }
    }

    public function setDuctreason($ductreason) {
        if (is_string($ductreason)) {
            $this->ductreason = $ductreason;
        }
    }
    
    public function setDuctamt($ductamt) {
        if (is_string($ductamt)) {
            $this->ductamt = $ductamt;
        }
    }
    
    public function setDuctbeneficiary($ductbeneficiary) {
        if (is_string($ductbeneficiary)) {
            $this->ductbeneficiary = $ductbeneficiary;
        }
    }
    
    

    public function hydrate(array $donnees) {
        if (isset($donnees['ductid'])) {
            $this->ductid = ($donnees['ductid']);
        }

        if (isset($donnees['ductcode'])) {
            $this->setDuctcode($donnees['ductcode']);
        }

        if (isset($donnees['ductreason'])) {
            $this->setDuctreason($donnees['ductreason']);
        }
        
        if (isset($donnees['ductamt'])) {
            $this->setDuctamt($donnees['ductamt']);
        } 
        
        if (isset($donnees['ductbeneficiary'])) {
            $this->setDuctbeneficiary($donnees['ductbeneficiary']);
        }
        
        
        
    }
    
    
}

class GmDe{

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

class TimeDe{
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