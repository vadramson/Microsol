<?php

class Leaves{
    private $trvid;
    private $empid;
    private $trvcode;
    private $trvsdate;
    private $trvedate;
    private $trvname;    
    private $trempcode;
    private $approval;
    
 
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function trvid() {
        return $this->trvid;
    }
      
     public function empid() {
        return $this->empid;
    }
    
    public function trvcode() {
        return $this->trvcode;
    }
    
    public function trvsdate() {
        return $this->trvsdate ;
    } 
    
    public function trvedate() {
        return $this->trvedate;
    }
    
    public function trvname() {
        return $this->trvname;
    }
      
    public function trempcode() {
        return $this->trempcode;
    }
    
    public function approval() {
        return $this->approval;
    }
    
   
    public function setEmpid($empid) {
        if (is_string($empid)){
            $this->empid = $empid;
        }
    }
    
    public function setTrvcode($trvcode) {
        if (is_string($trvcode)){
            $this->trvcode = $trvcode;
        }
    }

    public function setTrvsdate($trvsdate) {
        if (is_string($trvsdate)) {
            $this->trvsdate = $trvsdate;
        }
    }    
    
    public function setTrvedate($trvedate) {
        if (is_string($trvedate)) {
            $this->trvedate = $trvedate;
        }    
        
    }
    
    public function setTrvname($trvname) {
        if (is_string($trvname)) {
            $this->trvname = $trvname;
        }
    }
    
    public function setTrempcode($trempcode) {
        if (is_string($trempcode)) {
            $this->trempcode= $trempcode;
        }
    }
    
    public function setApproval($approval) {
        if (is_string($approval)){
            $this->approval = $approval;
        }
    }
    
   


    public function hydrate(array $donnees) {
        if (isset($donnees['trvid'])) {
            $this->trvid = ($donnees['trvid']);
                          }

        if (isset($donnees['empid'])) {
            $this->setEmpid($donnees['empid']);
        }
                          
        if (isset($donnees['trvcode'])) {
            $this->setTrvcode($donnees['trvcode']);
        }

        if (isset($donnees['trvsdate'])) {
            $this->setTrvsdate($donnees['trvsdate']);
        }
        
        if (isset($donnees['trvedate'])) {
            $this->setTrvedate($donnees['trvedate']);
        }
        
        if (isset($donnees['trvname'])) {
            $this->setTrvname($donnees['trvname']);
        } 
               
        if (isset($donnees['trempcode'])) {
            $this->setTrempcode($donnees['trempcode']);
        }
        
        if (isset($donnees['approval'])) {
            $this->setApproval($donnees['approval']);
        }
       
    }
    
    
}



?>