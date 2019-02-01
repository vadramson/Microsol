<?php

class Department{
    private $dptid;
    private $name;
    private $code;
    private $salary;
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function dptid() {
        return $this->dptid;
    }
    
    public function name() {
        return $this->name;
    }
    
    public function code() {
        return $this->code ;
    }  
    
     public function salary() {
        return $this->salary ;
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
    
     public function setSalary($salary) {
        if (is_string($salary)) {
            $this->salary = $salary;
        }
    }
    
    

    public function hydrate(array $donnees) {
        if (isset($donnees['dptid'])) {
            $this->dptid = ($donnees['dptid']);
                          }

        if (isset($donnees['name'])) {
            $this->setName($donnees['name']);
        }

        if (isset($donnees['code'])) {
            $this->setCode($donnees['code']);
        }
        
        if (isset($donnees['salary'])) {
            $this->setSalary($donnees['salary']);
        }
        
         
        
        
        
    }
    
    
}

class Gmd{

    private $gmid; 
  

    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    public function gmid() {
        return $this->gmid;
    }
    
//    public function twnid() {
//        return $this->twnid;
//    }
////    public function setTwnid($twnid) {
////        if (is_string($twnid)) {
////            $this->twnid = $twnid;
////        }
////    }
//    public function setGmid($gmid) {
//        if (is_string($gmid)) {
//            $this->gmid = $gmid;
//        }
//    }
//    
       
    
    public function hydrate(array $donnees) {
        if (isset($donnees['gmid'])) {
            $this->gmid= ($donnees['gmid']);
                          }
                          
//        if (isset($donnees['twnid'])) {
//            $this->twnid= ($donnees['twnid']);
//                          }
        
        
    }
    
}

class Timed{
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

//class Townid{
//
//    private $twnid;
//
//    public function __construct(array $donnees) {
//        $this->hydrate($donnees);
//    }
//
//    public function twnid() {
//        return $this->twnid;
//    }
//
//     public function hydrate(array $donnees) {
//          if (isset($donnees['twnid'])) {
//            $this->twnid= ($donnees['twnid']);
//                          }
//     }
//   
//}

?>