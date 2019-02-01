<?php

class ConAccountManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_conacct($conacct, $gm, $tm) {
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM con_account WHERE cactnum = '" .$conacct->conacctnum() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO con_account SET  gmid = :gmid, cactnum = :conacctnum, cactblance = :conacctbalance, cacttype = :conaccttype, status = :conacctstatus, Doc = :date ') or die(mysql_error());
            $q-> bindValue(':conacctnum', $conacct->conacctnum());
            $q-> bindValue(':conacctbalance', $conacct->conacctbalance());
            $q-> bindValue(':conaccttype', $conacct->conaccttype());
            $q-> bindValue(':conacctstatus', $conacct->conacctstatus());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
            
            echo"<script language='javascript'>alert('Control Account Created Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Redondance!')</script>";
        }
        
    }
    
    
    
    
    function listConacct() {
        $resul = $this->_db->query("SELECT * From con_account ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["cacttype"] . "</td> <td>" . $rec["cactnum"] . "</td><td>" . $rec["cactblance"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/ConAcct_VIeW/editconAcct') . "&idr=" . base64_encode($rec["cactid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0 data-toggle = tooltip data-placement = top title = " .'Edit_Account'. " />
                        </a>
                  </td>
               </tr> ";
        }
    }
    
    function listActiveConacct() {
        $resul = $this->_db->query("SELECT * From con_account WHERE status = 'Active' ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["cacttype"] . "</td> <td>" . $rec["cactnum"] . "</td><td>" . $rec["cactblance"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/ConAcct_VIeW/editconAcct') . "&idr=" . base64_encode($rec["cactid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0 data-toggle = tooltip data-placement = top title = " .'Edit_Account'. " />
                        </a>
                       <a href='#' onclick=diactivate_conacct('" . $rec["cactid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0 data-toggle = tooltip data-placement = top title = " .'Diactivate_Account'."  /> 
                    </a>
                  </td>
               </tr> ";
        }
    }
    
    
    function listDesableConacct() {
        $resul = $this->_db->query("SELECT * From con_account WHERE status = 'Deactivated' ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["cacttype"] . "</td> <td>" . $rec["cactnum"] . "</td><td>" . $rec["cactblance"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/ConAcct_VIeW/editconAcct') . "&idr=" . base64_encode($rec["cactid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0 data-toggle = tooltip data-placement = top title = " .'Edit_Account'." />
                        </a>
                       <a href='#' onclick=activate_conacct('" . $rec["cactid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0 data-toggle = tooltip data-placement = top title = " .'Activate_Account'."  /> 
                    </a>
                  </td>
               </tr> ";
        }
    }
    
  

    
    public function Update_conacct($conacct, $gm, $tm) {
      // print "How";
       // print_r($region);
        $q = $this->_db->prepare("UPDATE con_account SET  gmid = :gmid,  cacttype = :conaccttype, Doc = :date WHERE cactid = :conacctid " ) or die(mysql_error());
//        print_r($regn); print ("19");
            $q-> bindValue(':conacctid', $conacct->conacctid());
            $q-> bindValue(':conaccttype', $conacct->conaccttype());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
        echo "<script language = 'javascript'> alert ('Control Account Updated !!')</script>";
        
    }   
    
    
 }
