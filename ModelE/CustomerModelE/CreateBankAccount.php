<?php

class CrBk {
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
    
    
    
    
    function getId() {
        return $this->id;
    }

    function getRel() {
        return $this->rel;
    }

    function getBran() {
        return $this->bran;
    }

    function getPerson() {
        return $this->person;
    }

    function getCuscode() {
        return $this->cuscode;
    }

    function getTxcode() {
        return $this->txcode;
    }

    function getCphone() {
        return $this->cphone;
    }

    function getProff() {
        return $this->proff;
    }

    function getNkname() {
        return $this->nkname;
    }

    function getNkphone() {
        return $this->nkphone;
    }

    function getStat() {
        return $this->stat;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRel($rel) {
        $this->rel = $rel;
    }

    function setBran($bran) {
        $this->bran = $bran;
    }

    function setPerson($person) {
        $this->person = $person;
    }

    function setCuscode($cuscode) {
        $this->cuscode = $cuscode;
    }

    function setTxcode($txcode) {
        $this->txcode = $txcode;
    }

    function setCphone($cphone) {
        $this->cphone = $cphone;
    }

    function setProff($proff) {
        $this->proff = $proff;
    }

    function setNkname($nkname) {
        $this->nkname = $nkname;
    }

    function setNkphone($nkphone) {
        $this->nkphone = $nkphone;
    }

    function setStat($stat) {
        $this->stat = $stat;
    }

    
     public function hydrate(array $donnees) {
        if (isset($donnees['id'])) {
            $this->id = ($donnees['id']);
                          }

        if (isset($donnees['rel'])) {
            $this->setRel($donnees['rel']);
        }
        
        if (isset($donnees['bran'])) {
            $this->setBran($donnees['bran']);
        }
        
        if (isset($donnees['person'])) {
            $this->setPerson($donnees['person']);
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