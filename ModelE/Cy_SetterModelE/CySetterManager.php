<?php

class CySetterManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_currency($town, $gm, $tm) {
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM cy_seter WHERE csname = '" .$town->csname() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO cy_seter SET gmid = :gmid, cscode = :code, csname = :name, doc = :date ') or die(mysql_error());
            $q-> bindValue(':code', $town->cscode());
            $q-> bindValue(':name', $town->csname());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
            
            echo"<script language='javascript'>alert('Currency Inserted Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Redondance!')</script>";
        }
        
    }
    
    
    
    
    function listCurrency() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT * From cy_seter ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["csid"] . "</td> <td>" . $rec["csname"] . "</td><td>" . $rec["cscode"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/CurrencyVIeW/editcurrency') . "&idr=" . base64_encode($rec["csid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0/>
                        </a>
                 <a href='#' onclick=del_id_currency('" . $rec["csid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0/> 
                    </a>
                  </td>
               </tr> ";
        }
    }
  

    
    public function update_Currency($town, $gm, $tm) {
      // print "How";
       // print_r($region);
        $q = $this->_db->prepare('UPDATE cy_seter SET gmid = :gmid, cscode = :code, csname = :name, doc = :date WHERE csid = :csid ');
        print_r($regn); print ("19");
            $q-> bindValue(':csid', $town->csid());
            $q-> bindValue(':code', $town->cscode());
            $q-> bindValue(':name', $town->csname());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
        echo "<script language = 'javascript'> alert ('Currency Updated !!')</script>";
        
    }   
    
    
 }
