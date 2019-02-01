<?php

class CreateBankAccount{
    
    private $id;
    private $rel;
    private $bran;
    private $person;
    private $cuscode;
    private $txcode;
    private $cphone;
    private $proff;
    private $nkname;
    private $nkphone;
    private $stat;
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function id() {
        return $this->id;
    }
    
     public function rel() {
        return $this->rel;
    }
    
    public function person() {
        return $this->person;
    }
    
    public function bran() {
        return $this->bran;
    }
    
    public function cuscode() {
        return $this->cuscode ;
    } 
    
    public function txcode() {
        return $this->txcode ;
    }
    
    public function cphone() {
        return $this->cphone ;
    }
    public function proff() {
        return $this->proff ;
    }
    public function nkname() {
        return $this->nkname ;
    }
    public function nkphone() {
        return $this->nkphone ;
    }
    public function stat() {
        return $this->stat ;
    } 
    
    
    
    public function setRel($rel) {
        if (is_string($rel)) {
            $this->rel = $rel;
        }
    }
    
    public function setCuscode($cuscode) {
        if (is_string($cuscode)){
            $this->cuscode = $cuscode;
        }
    }
    
    public function setTxcode($txcode) {
        if (is_string($txcode)) {
            $this->txcode = $txcode;
        }
    }
    
    public function setCphone($cphone) {
        if (is_string($cphone)){
            $this->cphone = $cphone;
        }
    }
    
    public function setProff($proff) {
        if (is_string($proff)) {
            $this->proff = $proff;
        }
    }
    
    public function setNkname($nkname) {
        if (is_string($nkname)){
            $this->nkname = $nkname;
        }
    }
    
    public function setNkphone($nkphone) {
        if (is_string($nkphone)) {
            $this->nkphone = $nkphone;
        }
    }
    
    public function setStat($stat) {
        if (is_string($stat)){
            $this->stat = $stat;
        }
    }
    
    public function hydrate(array $donnees) {
        if (isset($donnees['id'])) {
            $this->id = ($donnees['id']);
        }
        if (isset($donnees['bran'])) {
            $this->bran = ($donnees['bran']);
                          }
        
        if (isset($donnees['person'])) {
            $this->person = ($donnees['person']);
                          }                  
                          
        if (isset($donnees['rel'])) {
            $this->setRel($donnees['rel']);
        }
                          
        if (isset($donnees['cuscode'])) {
            $this->setCuscode($donnees['cuscode']);
        }
        if (isset($donnees['txcode'])) {
            $this->setTxcode($donnees['txcode']);
        }
                          
        if (isset($donnees['cphone'])) {
            $this->setCphone($donnees['cphone']);
        }
        if (isset($donnees['proff'])) {
            $this->setProff($donnees['proff']);
        }
                          
        if (isset($donnees['nkname'])) {
            $this->setNkname($donnees['nkname']);
        }
        if (isset($donnees['nkphone'])) {
            $this->setNkphone($donnees['nkphone']);
        }
                          
        if (isset($donnees['stat'])) {
            $this->setStat($donnees['stat']);
        }

         
    }
    
    
}




class Bacct{
    private $bkaid;
    private $cusid;
    private $acctnum;
    private $acctbalance;
    private $accttype;
    private $acctintrate;
    private $status;
    private $cusphone;
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function bkaid() {
        return $this->bkaid;
    }
    
     public function cusid() {
        return $this->cusid;
    }
    
    public function acctnum() {
        return $this->acctnum;
    }
    
    public function acctbalance() {
        return $this->acctbalance ;
    } 
 
    public function accttype() {
        return $this->accttype;
    }
    
    public function acctintrate() {
        return $this->acctintrate;
    }
    
    public function cusphone() {
        return $this->cusphone;
    }
    
     public function status() {
        return $this->status;
    }
    
    public function setAcctnum($acctnum) {
        if (is_string($acctnum)){
            $this->acctnum = $acctnum;
        }
    }

    public function setAcctbalance($acctbalance) {
        if (is_string($acctbalance)) {
            $this->acctbalance = $acctbalance;
        }
    }
    
    public function setCusphone($cusphone) {
        if (is_string($cusphone)){
            $this->cusphone = $cusphone;
        }
    }
    public function setStatus($status) {
        if (is_string($status)){
            $this->status = $status;
        }
    }
   
    public function hydrate(array $donnees) {
        if (isset($donnees['bkaid'])) {
            $this->bkaid = ($donnees['bkaid']);
                          }
        
        if (isset($donnees['cusid'])) {
            $this->cusid = ($donnees['cusid']);
        }
                          
        if (isset($donnees['acctnum'])) {
            $this->setAcctnum($donnees['acctnum']);
        }

        if (isset($donnees['acctbalance'])) {
            $this->setAcctbalance($donnees['acctbalance']);
        }
        
        if (isset($donnees['accttype'])) {
            $this->accttype = ($donnees['accttype']);
        }
        
        if (isset($donnees['acctintrate'])) {
            $this->acctintrate = ($donnees['acctintrate']);
        } 
        
        if (isset($donnees['cusphone'])) {
            $this->setCusphone($donnees['cusphone']);
        }
        
        if (isset($donnees['status'])) {
            $this->setStatus($donnees['status']);
        }
       
    }
    
    
}




class GmCust{

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



class TimeBkacct{
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