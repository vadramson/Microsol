<?php

class BonusManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_Bonus($bonus, $gm, $tm){
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM bonuses WHERE bn_beneficiary = '" .$bonus->bn_beneficiary() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO bonuses SET empid = :gmid, bn_code = :bn_code, bn_reason = :bn_reason, bn_amt = :bn_amt, bn_beneficiary = :bn_beneficiary, bn_date = :date ') or die(mysql_error());
            $q-> bindValue(':gmid', $gm->gmid());
            $q-> bindValue(':bn_code', $bonus->bn_code());
            $q-> bindValue(':bn_reason', $bonus->bn_reason());
            $q-> bindValue(':bn_amt', $bonus->bn_amt());
            $q-> bindValue(':bn_beneficiary', $bonus->bn_beneficiary());
            $q-> bindValue(':date', $tm->date());            
            $q->execute();
            echo "boymmm";
            echo"<script language='javascript'>alert('Bonus Inserted Successfully !')</script>";
        } else{
               $id = $reqt["bnid"];
               $amt = $reqt["bn_amt"];
               $ori = $bonus->bn_amt();
               $newamt = $amt + $ori;
//               echo $newamt;
               
        $this->_db->query("UPDATE bonuses SET bn_amt = '" .$newamt ." ' WHERE bnid = '".$id."' ") or die(mysql_error());
//            echo "$newamt";
            echo"<script language='javascript'>alert('Employee's Bonuse Updated!')</script>";
        }
        
    }
    
    
    public function insert_Bonus1($bonus, $gm, $tm){
         echo "boy";
        $resul = $this->_db->query("SELECT * FROM bonuses WHERE bn_code = '" .$bonus->bn_code() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO bonuses SET empid = :gmid, bn_code = :bn_code, bn_reason = :bn_reason, bn_amt = :bn_amt, bn_beneficiary = :bn_beneficiary, bn_date = :date ') or die(mysql_error());
            $q-> bindValue(':gmid', $gm->gmid());
            $q-> bindValue(':bn_code', $bonus->bn_code());
            $q-> bindValue(':bn_reason', $bonus->bn_reason());
            $q-> bindValue(':bn_amt', $bonus->bn_amt());
            $q-> bindValue(':bn_beneficiary', $bonus->bn_beneficiary());
            $q-> bindValue(':date', $tm->date());            
            $q->execute();
            echo "boymmm";
            echo"<script language='javascript'>alert('Bonus Inserted Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Unexpected Error Occured, Try again!')</script>";
        }
        
    }
    
    
    
    
    
   
    function listBonus() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());          
        $resul = $this->_db->query("SELECT * From bonuses ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["bn_code"] . "</td> <td>" . $rec["bn_reason"] . "</td><td>" . $rec["bn_amt"] . "</td><td>" . $rec["bn_beneficiary"] . "</td><td>" . $rec["bn_date"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/BonusVIeW/editbonus') . "&idr=" . base64_encode($rec["bnid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0  data-toggle = tooltip data-placement = top title =  Edit_Information  />
                        </a>                 
                  </td>
               </tr> ";
        }
    }
  

    
    public function update_Bonuse($bonuse) {
      // print "How";
       // print_r($region);
        $q = $this->_db->prepare(" UPDATE bonuses SET bn_amt = :bn_amt WHERE bnid = :bnid ");
//         print ("19");
            $q-> bindValue(':bnid', $bonuse->bnid());
            $q-> bindValue(':bn_amt', $bonuse->bn_amt());            
            $q->execute();
        echo "<script language = 'javascript'> alert ('Bonus Updated !!')</script>";
        
    }   
    
    
 }
