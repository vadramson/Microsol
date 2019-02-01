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


class AssEt{
    private $cyid;
    private $empid;
    private $cycode;
    private $dop;
    private $ramount;
    private $gamount;
    private $cusname;
    private $nic;
    private $exchcode;
    private $phone;
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function cyid() {
        return $this->cyid;
    }
    
     public function empid() {
        return $this->empid;
    }
    
    public function cycode() {
        return $this->cycode;
    }
    
    public function dop() {
        return $this->dop;
    }
    
    public function ramount() {
        return $this->ramount;
    } 
    
    public function gamount() {
        return $this->gamount ;
    } 
    
    public function cusname() {
        return $this->cusname ;
    } 
    public function nic() {
        return $this->nic ;
    } 
    
    public function exchcode() {
        return $this->exchcode ;
    } 
    
    public function phone() {
        return $this->phone ;
    } 
    
    
    
    public function setCycode($cycode) {
        if (is_string($cycode)) {
            $this->cycode = $cycode;
        }
    }
    
    public function setDop($dop) {
        if (is_string($dop)){
            $this->dop = $dop;
        }
    }
    
    public function setRamount($ramount) {
        if (is_string($ramount)){
            $this->ramount = $ramount;
        }
    }
    
    public function setGamount($gamount) {
        if (is_string($gamount)){
            $this->gamount = $gamount;
        }
    }
    
    public function setCusname($cusname) {
        if (is_string($cusname)){
            $this->cusname = $cusname;
        }
    }
    
    public function setNic($nic) {
        if (is_string($nic)){
            $this->nic = $nic;
        }
    }
    
    public function setExchcode($exchcode) {
        if (is_string($exchcode)){
            $this->exchcode = $exchcode;
        }
    }
    
    public function setPhone($phone) {
        if (is_string($phone)){
            $this->phone = $phone;
        }
    }
    
    
    
    public function hydrate(array $donnees) {
        if (isset($donnees['cyid'])) {
            $this->cyid = ($donnees['cyid']);
                          }
                          
        if (isset($donnees['empid'])) {
            $this->empid = ($donnees['empid']);
                          }
                          
        if (isset($donnees['cycode'])) {
            $this->setCycode($donnees['cycode']);
                          }
     
        if (isset($donnees['dop'])) {
            $this->setDop($donnees['dop']);
                          }                  
                          
        if (isset($donnees['ramount'])) {
            $this->setRamount($donnees['ramount']);
        }
                          
        if (isset($donnees['gamount'])) {
            $this->setGamount($donnees['gamount']);
        }
        
        if (isset($donnees['cusname'])) {
            $this->setCusname($donnees['cusname']);
        }
        
        if (isset($donnees['nic'])) {
            $this->setNic($donnees['nic']);
        }
        
        if (isset($donnees['exchcode'])) {
            $this->setExchcode($donnees['exchcode']);
        }
        
        if (isset($donnees['phone'])) {
            $this->setPhone($donnees['phone']);
        }

         
    }
    
    
}





class Asst{
    private $sasid;
    private $empid;
    private $ascode;
    private $dop;
    private $asname;
    private $asamount;
    private $name;
    private $nic;
    private $phone;
    private $transcode;
    
    
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    
    public function sasid() {
        return $this->sasid;
    }
    
     public function empid() {
        return $this->empid;
    }
    
    public function ascode() {
        return $this->ascode;
    }
    
    public function dop() {
        return $this->dop;
    }
    
    public function asname() {
        return $this->asname;
    } 
    
    public function asamount() {
        return $this->asamount ;
    } 
    
    public function name() {
        return $this->name ;
    } 
    public function nic() {
        return $this->nic ;
    } 
   
    public function phone() {
        return $this->phone ;
    } 
    
    public function transcode() {
        return $this->transcode ;
    }
    
    
    public function setAscode($ascode) {
        if (is_string($ascode)) {
            $this->ascode = $ascode;
        }
    }
    
    public function setDop($dop) {
        if (is_string($dop)){
            $this->dop = $dop;
        }
    }
    
    public function setAsname($asname) {
        if (is_string($asname)){
            $this->asname = $asname;
        }
    }
    
    public function setAsamount($asamount) {
        if (is_string($asamount)){
            $this->asamount = $asamount;
        }
    }
    
    public function setName($name) {
        if (is_string($name)){
            $this->name = $name;
        }
    }
    
    public function setNic($nic) {
        if (is_string($nic)){
            $this->nic = $nic;
        }
    }
    
    public function setPhone($phone) {
        if (is_string($phone)){
            $this->phone = $phone;
        }
    }
    
    public function setTranscode($transcode) {
        if (is_string($transcode)){
            $this->transcode = $transcode;
        }
    }
    
   
    public function hydrate(array $donnees) {
        if (isset($donnees['sasid'])) {
            $this->sasid = ($donnees['sasid']);
                          }
                          
        if (isset($donnees['empid'])) {
            $this->empid = ($donnees['empid']);
                          }
                          
        if (isset($donnees['ascode'])) {
            $this->setAscode($donnees['ascode']);
                          }
     
        if (isset($donnees['dop'])) {
            $this->setDop($donnees['dop']);
                          }                  
                          
        if (isset($donnees['asname'])) {
            $this->setAsname($donnees['asname']);
        }
                          
        if (isset($donnees['asamount'])) {
            $this->setAsamount($donnees['asamount']);
        }
        
        if (isset($donnees['name'])) {
            $this->setName($donnees['name']);
        }
        
        if (isset($donnees['nic'])) {
            $this->setNic($donnees['nic']);
        }
        
        if (isset($donnees['phone'])) {
            $this->setPhone($donnees['phone']);
        }
        
        if (isset($donnees['transcode'])) {
            $this->setTranscode($donnees['transcode']);
        }
      
    }
    
    
}





class TimeAgEvf{
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