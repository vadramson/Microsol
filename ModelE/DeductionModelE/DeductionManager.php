<?php

class DeductionManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_Deductions($deduct, $gm, $tm){
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM deductions WHERE ductbeneficiary = '" .$deduct->ductbeneficiary() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO deductions SET empid = :gmid, ductcode = :ductcode, ductreason = :ductreason, ductamt = :ductamt, ductbeneficiary = :ductbeneficiary, ductdate = :date ') or die(mysql_error());
            $q-> bindValue(':gmid', $gm->gmid());
            $q-> bindValue(':ductcode', $deduct->ductcode());
            $q-> bindValue(':ductreason', $deduct->ductreason());
            $q-> bindValue(':ductamt', $deduct->ductamt());
            $q-> bindValue(':ductbeneficiary', $deduct->ductbeneficiary());
            $q-> bindValue(':date', $tm->date());            
            $q->execute();
//            echo "boymmm";
            echo"<script language='javascript'>alert('Deduction Performed Successfully !')</script>";
        } else{
               $id = $reqt["ductid"];
               $amt = $reqt["ductamt"];
               $ori = $deduct->ductamt();
               $newamt = $amt + $ori;
//               echo $newamt;
               
        $this->_db->query("UPDATE deductions SET ductamt = '" .$newamt ." ' WHERE ductid = '".$id."' ") or die(mysql_error());
//            echo "$newamt";
            echo"<script language='javascript'>alert('Employee's Deduction Updated!')</script>";
        }
        
    }
  
    
    function listDeduction() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());          
        $resul = $this->_db->query("SELECT * From deductions ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["ductcode"] . "</td> <td>" . $rec["ductreason"] . "</td><td>" . $rec["ductamt"] ."  F CFA". "</td><td>" . $rec["ductbeneficiary"] . "</td><td>" . $rec["ductdate"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/DeductionVIeW/editdeduction') . "&idr=" . base64_encode($rec["ductid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0  data-toggle = tooltip data-placement = top title =  Edit_Information  />
                        </a>                 
                  </td>
               </tr> ";
        }
    }
  

    
    public function update_Deduction($deduction) {
      // print "How";
       // print_r($region);
        $q = $this->_db->prepare(" UPDATE deductions SET ductamt = :ductamt WHERE ductid = :ductid ");
//         print ("19");
            $q-> bindValue(':ductid', $deduction->ductid());
            $q-> bindValue(':ductamt', $deduction->ductamt());            
            $q->execute();
        echo "<script language = 'javascript'> alert ('Deduction Updated !!')</script>";
        
    }   
    
    
 }
