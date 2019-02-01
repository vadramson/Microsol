<?php

class LsManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_LsSetter($lsset, $gm, $tm) {
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM loan_setter WHERE lsname = '" .$lsset->name() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO loan_setter SET  gmid = :gmid, lscode = :code, lsname = :name, lsintrt = :intrate, lstype = :type, lsminamt = :balance, lsdate = :date ') or die(mysql_error());
            $q-> bindValue(':type', $lsset->type());
            $q-> bindValue(':name', $lsset->name());
            $q-> bindValue(':code', $lsset->code());
            $q-> bindValue(':intrate', $lsset->intrate());
            $q-> bindValue(':balance', $lsset->balance());
//            $q-> bindValue(':transFee', $acctset->transFee());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
            
            echo"<script language='javascript'>alert('Loan Type Inserted Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Redondance!')</script>";
        }
        
    }
    
    
    
    
    function listLsSetter() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT * From loan_setter ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["lstype"] . "</td> <td>" . $rec["lsname"] . "</td><td>" . $rec["lsintrt"] . "</td><td>" . $rec["lsminamt"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/LoanSetterVIeW/editloansetter') . "&idr=" . base64_encode($rec["lsid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0/>
                        </a>
                 <a href='#' onclick=del_id_loanSetter('" . $rec["lsid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0/> 
                    </a>
                  </td>
               </tr> ";
        }
    }
  

    
    public function update_LsSetter($lsseter, $gm, $tm) {
      // print "How";
       // print_r($region);
        $q = $this->_db->prepare('UPDATE loan_setter SET  gmid = :gmid, lscode = :code, lsname = :name, lsintrt = :intrate, lstype = :type, lsminamt = :balance, lsdate = :date  WHERE lsid = :lsid ');
//        print_r($regn); print ("19");
            $q-> bindValue(':lsid', $lsseter->lsid());
            $q-> bindValue(':type', $lsseter->type());
            $q-> bindValue(':name', $lsseter->name());
            $q-> bindValue(':code', $lsseter->code());
            $q-> bindValue(':intrate', $lsseter->intrate());
            $q-> bindValue(':balance', $lsseter->balance());
//            $q-> bindValue(':transFee', $acctset->transFee());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
        echo "<script language = 'javascript'> alert ('Loan Type Updated !!')</script>";
        
    }   
    
    
 }
