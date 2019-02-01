<?php

class AcctSetterManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_acctSetter($acctset, $gm, $tm) {
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM account_setter WHERE astname = '" .$acctset->name() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO account_setter SET  gmid = :gmid, astcode = :code, astname = :name, astintrt = :intrate, asttype = :type, astminamt = :balance, astfee = :transFee, astdate = :date ') or die(mysql_error());
            $q-> bindValue(':type', $acctset->type());
            $q-> bindValue(':name', $acctset->name());
            $q-> bindValue(':code', $acctset->code());
            $q-> bindValue(':intrate', $acctset->intrate());
            $q-> bindValue(':balance', $acctset->balance());
            $q-> bindValue(':transFee', $acctset->transFee());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
            
            echo"<script language='javascript'>alert('Account Type Inserted Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Redondance!')</script>";
        }
        
    }
    
    
    
    
    function listAcctSetter() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT * From account_setter ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["asttype"] . "</td> <td>" . $rec["astname"] . "</td><td>" . $rec["astintrt"] . "</td><td>" . $rec["astminamt"] . "</td><td>" . $rec["astfee"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/AcctSetterVIeW/editacctsetter') . "&idr=" . base64_encode($rec["astid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0/>
                        </a>
                 <a href='#' onclick=del_id_accsetter('" . $rec["astid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0/> 
                    </a>
                  </td>
               </tr> ";
        }
    }
  

    
    public function update_acctSetter($acctset, $gm, $tm) {
      // print "How";
       // print_r($region);
        $q = $this->_db->prepare('UPDATE account_setter SET  gmid = :gmid, astcode = :code, astname = :name, astintrt = :intrate, asttype = :type, astminamt = :balance, astfee = :transFee, astdate = :date WHERE astid = :astid ');
//        print_r($regn); print ("19");
            $q-> bindValue(':astid', $acctset->astid());
            $q-> bindValue(':type', $acctset->type());
            $q-> bindValue(':name', $acctset->name());
            $q-> bindValue(':code', $acctset->code());
            $q-> bindValue(':intrate', $acctset->intrate());
            $q-> bindValue(':balance', $acctset->balance());
            $q-> bindValue(':transFee', $acctset->transFee());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
        echo "<script language = 'javascript'> alert ('Account Type Updated !!')</script>";
        
    }   
    
    
 }
