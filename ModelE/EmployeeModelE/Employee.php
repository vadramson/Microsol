<?php

class Employee{
    private $psrid;
    private $pcode;
    private $fname;
    private $lname;
    private $dob;
    private $pob;
    private $sex;
    private $addres;
    private $phone;
    private $email;
    private $nic;
    private $pic;
 
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function psrid() {
        return $this->psrid;
    }
      
     public function fname() {
        return $this->fname;
    }
    
    public function lname() {
        return $this->lname;
    }
    
    public function pcode() {
        return $this->pcode ;
    } 
    
    public function dob() {
        return $this->dob;
    }
    
    public function pob() {
        return $this->pob;
    }
    
    public function sex() {
        return $this->sex;
    }
    
    public function addres() {
        return $this->addres;
    }
    
    public function phone() {
        return $this->phone;
    }
    
    public function email() {
        return $this->email;
    }
    
    public function nic() {
        return $this->nic;
    }
    
    public function pic() {
        return $this->pic;
    }
    
    public function setFname($fname) {
        if (is_string($fname)){
            $this->fname = $fname;
        }
    }
    
    public function setLname($lname) {
        if (is_string($lname)){
            $this->lname = $lname;
        }
    }

    public function setPcode($pcode) {
        if (is_string($pcode)) {
            $this->pcode = $pcode;
        }
    }
    
    public function setDob($dob) {
        if (is_string($dob)) {
            $this->dob = $dob;
        }
    }
    
    public function setPob($pob) {
        if (is_string($pob)) {
            $this->pob = $pob;
        }
    }
    
    public function setSex($sex) {
        if (is_string($sex)) {
            $this->sex = $sex;
        }
    }
    
    public function setAddres($addres) {
        if (is_string($addres)){
            $this->addres = $addres;
        }
    }
    
    public function setPhone($phone) {
        if (is_string($phone)){
            $this->phone = $phone;
        }
    }
    
    public function setEmail($email) {
        if (is_string($email)){
            $this->email = $email;
        }
    }
    
    public function setNic($nic) {
        if (is_string($nic)){
            $this->nic = $nic;
        }
    }
    
    public function setPic($pic) {
        if (is_string($pic)){
            $this->pic = $pic;
        }
    }


    public function hydrate(array $donnees) {
        if (isset($donnees['psrid'])) {
            $this->psrid = ($donnees['psrid']);
                          }

        if (isset($donnees['pcode'])) {
            $this->setPcode($donnees['pcode']);
        }
                          
        if (isset($donnees['fname'])) {
            $this->setFname($donnees['fname']);
        }

        if (isset($donnees['lname'])) {
            $this->setLname($donnees['lname']);
        }
        
        if (isset($donnees['dob'])) {
            $this->setDob($donnees['dob']);
        }
        
        if (isset($donnees['pob'])) {
            $this->setPob($donnees['pob']);
        } 
        
        if (isset($donnees['sex'])) {
            $this->setSex($donnees['sex']);
        }
        
        if (isset($donnees['addres'])) {
            $this->setAddres($donnees['addres']);
        }
        
        if (isset($donnees['phone'])) {
            $this->setPhone($donnees['phone']);
        }
        
        if (isset($donnees['email'])) {
            $this->setEmail($donnees['email']);
        }
        
        if (isset($donnees['nic'])) {
            $this->setNic($donnees['nic']);
        }
        
        if (isset($donnees['pic'])) {
            $this->setPic($donnees['pic']);
        }
    }
    
    
}



class GmE{

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

class Times{
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