<?php

class Payroll{
    private $prlid;
    private $prlcode;
    private $empdpt;
    private $deductions;
    private $bonuses;
    private $empcode;
    private $empstdsalary;
    private $cnps;
    private $netsalary;
    
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function prlid() {
        return $this->prlid;
    }
    
    public function prlcode() {
        return $this->prlcode;
    }
 
    public function empdpt() {
        return $this->empdpt;
    }
    
    public function deductions() {
        return $this->deductions;
    }
    
    public function bonuses() {
        return $this->bonuses;
    }
    
    public function empcode() {
        return $this->empcode;
    }
    
    public function empstdsalary() {
        return $this->empstdsalary;
    }
    
    public function cnps() {
        return $this->cnps;
    }
    
    public function netsalary() {
        return $this->netsalary;
    }
    
    public function setPrlcode($prlcode) {
        if (is_string($prlcode)){
            $this->prlcode = $prlcode;
        }
    }

    public function setEmpdpt($empdpt) {
        if (is_string($empdpt)) {
            $this->empdpt = $empdpt;
        }
    }
    
    public function setDeductions($deductions) {
        if (is_string($deductions)) {
            $this->deductions = $deductions;
        }
    }
    
    public function setBonuses($bonuses) {
        if (is_string($bonuses)) {
            $this->bonuses = $bonuses;
        }
    }
    
    public function setEmpcode($empcode) {
        if (is_string($empcode)) {
            $this->empcode = $empcode;
        }
    }
    
    public function setEmpstdsalary($empstdsalary) {
        if (is_string($empstdsalary)) {
            $this->empstdsalary = $empstdsalary;
        }
    }
    
    public function setCnps($cnps) {
        if (is_string($cnps)) {
            $this->cnps = $cnps;
        }
    }
     
    public function setNetsalary($netsalary) {
        if (is_string($netsalary)) {
            $this->netsalary = $netsalary;
        }
    }
    
    

    public function hydrate(array $donnees) {
        if (isset($donnees['prlid'])) {
            $this->prlid = ($donnees['prlid']);
        }

        if (isset($donnees['prlcode'])) {
            $this->setPrlcode($donnees['prlcode']);
        }

        if (isset($donnees['empdpt'])) {
            $this->setEmpdpt($donnees['empdpt']);
        }
        
        if (isset($donnees['deductions'])) {
            $this->setDeductions($donnees['deductions']);
        } 
        
        if (isset($donnees['bonuses'])) {
            $this->setBonuses($donnees['bonuses']);
        }
        
        if (isset($donnees['empcode'])) {
            $this->setEmpcode($donnees['empcode']);
        }
        
        if (isset($donnees['empstdsalary'])) {
            $this->setEmpstdsalary($donnees['empstdsalary']);
        }
        
        if (isset($donnees['cnps'])) {
            $this->setCnps($donnees['cnps']);
        }
               
        if (isset($donnees['netsalary'])) {
            $this->setNetsalary($donnees['netsalary']);
        }
        
        
        
    }
    
    
}

class GmPay{

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

class TimePay{
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