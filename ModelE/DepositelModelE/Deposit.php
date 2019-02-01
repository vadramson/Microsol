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



//
//$q-> bindValue(':empid', $curency->empid());
//            $q-> bindValue(':cycode', $curency->cycode());
//            $q-> bindValue(':dop', $curency->dop());
//            $q-> bindValue(':ramount', $curency->ramount());
//            $q-> bindValue(':gamount', $curency->gamount());
//            $q-> bindValue(':cusname', $curency->cusname());
//            $q-> bindValue(':nic', $curency->nic());
//            $q-> bindValue(':exchcode', $curency->exchcode());    
//            $q-> bindValue(':phone', $curency->phone());


class Deposite{
    private $trxid;
    private $cusid;
    private $name;
    private $amount;
    private $bknumber;
    private $trxcode;
    private $trxtype;
    private $trxdate;
   
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function trxid() {
        return $this->trxid;
    }
    
     public function cusid() {
        return $this->cusid;
    }
    
    public function name() {
        return $this->name;
    }
    
    public function amount() {
        return $this->amount;
    }
    
    public function bknumber() {
        return $this->bknumber;
    } 
    
    public function trxcode() {
        return $this->trxcode ;
    } 
    
    public function trxtype() {
        return $this->trxtype;
    } 
    public function trxdate() {
        return $this->trxdate;
    } 
    
   
    
    
    public function setName($name) {
        if (is_string($name)) {
            $this->name = $name;
        }
    }
    
    public function setAmount($amount) {
        if (is_string($amount)){
            $this->amount = $amount;
        }
    }
    
    public function setBknumber($bknumber) {
        if (is_string($bknumber)){
            $this->bknumber = $bknumber;
        }
    }
    
    public function setTrxcode($trxcode) {
        if (is_string($trxcode)){
            $this->trxcode = $trxcode;
        }
    }
    
    public function setTrxtype($trxtype) {
        if (is_string($trxtype)){
            $this->trxtype= $trxtype;
        }
    }
    
    public function setTrxdate($trxdate) {
        if (is_string($trxdate)){
            $this->trxdate = $trxdate;
        }
    }
      
    
    
    public function hydrate(array $donnees) {
        if (isset($donnees['trxid'])) {
            $this->trxid = ($donnees['trxid']);
                          }
                          
        if (isset($donnees['cusid'])) {
            $this->cusid = ($donnees['cusid']);
                          }
                          
        if (isset($donnees['name'])) {
            $this->setName($donnees['name']);
                          }
     
        if (isset($donnees['amount'])) {
            $this->setAmount($donnees['amount']);
                          }                  
                          
        if (isset($donnees['bknumber'])) {
            $this->setBknumber($donnees['bknumber']);
        }
                          
        if (isset($donnees['trxcode'])) {
            $this->setTrxcode($donnees['trxcode']);
        }
        
        if (isset($donnees['trxtype'])) {
            $this->setTrxtype($donnees['trxtype']);
        }
        
        if (isset($donnees['trxdate'])) {
            $this->setTrxdate($donnees['trxdate']);
        }
               
    }
    
    
}



class TimeAgEd{
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