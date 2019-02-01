<?php

class Loan{
    private $lnid;
    private $empid;
    private $lncode;
    private $dop;
    private $lnname;
    private $lnamount;
    private $lnamtapprove;
    private $name;
    private $picid;
    private $applicantpic;
    private $pob;
    private $phone;
    private $colaterapic;
    private $nic;
    private $lnofficer;
    private $status;
 
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function lnid() {
        return $this->lnid;
    }
      
     public function empid() {
        return $this->empid;
    }
    
    public function lncode() {
        return $this->lncode;
    }
    
    public function dop() {
        return $this->dop ;
    } 
    
    public function lnname() {
        return $this->lnname;
    }
    
    public function lnamount() {
        return $this->lnamount;
    }
    
    public function lnamtapprove() {
        return $this->lnamtapprove;
    }
    
    public function name() {
        return $this->name;
    }
    
    public function picid() {
        return $this->picid;
    }
    
    public function applicantpic() {
        return $this->applicantpic;
    }
    
    public function pob() {
        return $this->pob;
    }
    
    public function phone() {
        return $this->phone;
    }
    
    public function colaterapic() {
        return $this->colaterapic;
    }
    
    public function nic() {
        return $this->nic;
    }
    
    public function lnofficer() {
        return $this->lnofficer;
    }
    
    public function status() {
        return $this->status;
    }
    
    
    public function setLncode($lncode) {
        if (is_string($lncode)){
            $this->lncode = $lncode;
        }
    }
    
    public function setDop($dop) {
        if (is_string($dop)){
            $this->dop = $dop;
        }
    }

    public function setLnname($lnname) {
        if (is_string($lnname)) {
            $this->lnname = $lnname;
        }
    }
    
    public function setLnamount($lnamount) {
        if (is_string($lnamount)) {
            $this->lnamount = $lnamount;
        }
    }
    
    public function setLnamtapprove($lnamtapprove) {
        if (is_string($lnamtapprove)) {
            $this->lnamtapprove = $lnamtapprove;
        }
    }
    
    public function setName($name) {
        if (is_string($name)) {
            $this->name = $name;
        }
    }
    
    public function setPicid($picid) {
        if (is_string($picid)){
            $this->picid = $picid;
        }
    }
    
    public function setApplicantpic($applicantpic) {
        if (is_string($applicantpic)){
            $this->applicantpic = $applicantpic;
        }
    }
    
    public function setPob($pob) {
        if (is_string($pob)){
            $this->pob = $pob;
        }
    }
    
    public function setPhone($phone) {
        if (is_string($phone)){
            $this->phone = $phone;
        }
    }
    
    
    public function setColaterapic($colaterapic) {
        if (is_string($colaterapic)){
            $this->colaterapic = $colaterapic;
        }
    }
    
    public function setNic($nic) {
        if (is_string($nic)){
            $this->nic = $nic;
        }
    }
    
    public function setLnofficer($lnofficer) {
        if (is_string($lnofficer)){
            $this->lnofficer = $lnofficer;
        }
    }
    
    public function setStatus($status) {
        if (is_string($status)){
            $this->status = $status;
        }
    }


    public function hydrate(array $donnees) {
        if (isset($donnees['lnid'])) {
            $this->lnid = ($donnees['lnid']);
        }
        
        if (isset($donnees['empid'])) {
            $this->empid = ($donnees['empid']);
        }

        if (isset($donnees['lncode'])) {
            $this->setLncode($donnees['lncode']);
        }
                          
        if (isset($donnees['dop'])) {
            $this->setDop($donnees['dop']);
        }

        if (isset($donnees['Lnname'])) {
            $this->setLnname($donnees['Lnname']);
        }
        
        if (isset($donnees['lnamount'])) {
            $this->setLnamount($donnees['lnamount']);
        }
        
        if (isset($donnees['lnamtapprove'])) {
            $this->setLnamtapprove($donnees['lnamtapprove']);
        } 
        
        if (isset($donnees['name'])) {
            $this->setName($donnees['name']);
        }
        
        if (isset($donnees['picid'])) {
            $this->setPicid($donnees['picid']);
        }
        
        if (isset($donnees['applicantpic'])) {
            $this->setApplicantpic($donnees['applicantpic']);
        }
        
        if (isset($donnees['pob'])) {
            $this->setPob($donnees['pob']);
        }
        
        if (isset($donnees['phone'])) {
            $this->setPhone($donnees['phone']);
        }
        
        if (isset($donnees['colaterapic'])) {
            $this->setColaterapic($donnees['colaterapic']);
        }
        
        if (isset($donnees['nic'])) {
            $this->setNic($donnees['nic']);
        }
        
        if (isset($donnees['lnofficer'])) {
            $this->setLnofficer($donnees['lnofficer']);
        }
        
        if (isset($donnees['status'])) {
            $this->setStatus($donnees['status']);
        }
    }
    
    
}



?>