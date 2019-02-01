<?php

//class Assign {
//    
//  
//    private $empide;
//    private $dptide;
//    private $bchide;
//    private $ecodee;
//    private $statuse;
////    private $date;
//    private $prside;
//    
//    
//    public function empide() {
//        return $this->empide;
//    }
//    
//    public function dptide() {
//        return $this->dptide;
//    }
//    
//    public function bchide() {
//        return $this->bchide;
//    }
//    
//    public function ecodee() {
//        return $this->ecodee;
//    }
//    
//    public function statuse() {
//        return $this->statuse;
//    }
//    
////    public function date() {
////        return $this->date ;
////    }
//    
//    public function prside() {
//        return $this->prside;
//    }
//    
//     
//    
////    public function setDptid($dptid) {
////        if (is_string($dptid)){
////            $this->dptid = $dptid;
////        }
////    }
//    
//    public function setEcodee($ecodee) {
//        if (is_string($ecodee)){
//            $this->ecodee = $ecodee;
//        }
//    }
//    
//    
//    public function setStatuse($statuse) {
//        if (is_string($statuse)){
//            $this->statuse = $statuse;
//        }
//    }   
//    
////    public function setDate($date) {
////        if (is_string($date)) {
////            $this->date = $date;
////        }   
////    }
//    
//   
//     public function hydrate(array $donnees) {
//        
//        if (isset($donnees['empide'])) {
//            $this->empide = ($donnees['empide']);
//        } 
//        
//        if (isset($donnees['dptide'])) {
//            $this->dptide = ($donnees['dptide']);
//        }
//        
//        if (isset($donnees['bchide'])) {
//            $this->bchide = ($donnees['bchide']);
//        }
//        
//        if (isset($donnees['ecodee'])) {
//            $this->setEcodee($donnees['ecodee']);
//        }
//        
//        if (isset($donnees['statuse'])) {
//            $this->setStatuse($donnees['statuse']);
//        }
//       
////        if (isset($donnees['date'])) {
////            $this->setDate($donnees['date']);
////        }
//        
//        if (isset($donnees['prside'])) {
//            $this->prside = ($donnees['prside']);
//        }
//         
//     }
//    
//}




class AssEmplo{
    private $id;
    private $dpt;
    private $bran;
    private $person;
    private $emcode;
    private $stat;
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function id() {
        return $this->id;
    }
    
     public function dpt() {
        return $this->dpt;
    }
    
    public function person() {
        return $this->person;
    }
    
    public function bran() {
        return $this->bran;
    }
    
    public function emcode() {
        return $this->emcode ;
    } 
    
    public function stat() {
        return $this->stat ;
    } 
    
    
    
    public function setEmcode($emcode) {
        if (is_string($emcode)) {
            $this->emcode = $emcode;
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
        if (isset($donnees['dpt'])) {
            $this->dpt = ($donnees['dpt']);
                          }
              
        if (isset($donnees['bran'])) {
            $this->bran = ($donnees['bran']);
                          }
        
        if (isset($donnees['person'])) {
            $this->person = ($donnees['person']);
                          }                  
                          
        if (isset($donnees['emcode'])) {
            $this->setEmcode($donnees['emcode']);
        }
                          
        if (isset($donnees['stat'])) {
            $this->setStat($donnees['stat']);
        }

         
    }
    
    
}



class TimeAg{
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