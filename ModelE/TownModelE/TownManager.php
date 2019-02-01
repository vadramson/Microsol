<?php

class TownManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_town($town, $gm, $tm) {
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM town WHERE tname = '" .$town->name() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO town SET gmid = :gmid, tcode = :code, tname = :name, doc = :date ') or die(mysql_error());
            $q-> bindValue(':code', $town->code());
            $q-> bindValue(':name', $town->name());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
            
            echo"<script language='javascript'>alert('Town Inserted Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Redondance!')</script>";
        }
        
    }
    
    
    
    
    function listTown() {
       
        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
//        $resul = $this->_db->query("SELECT * From town ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["tname"] . "</td> <td>" . $rec["tcode"] . "</td><td>" . $rec["nbbranch"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/TownVIeW/edittown') . "&idr=" . base64_encode($rec["twnid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0  data-toggle = tooltip data-placement = top title = Edit_Information />
                        </a>
                 <a href='#' onclick=del_id_town('" . $rec["twnid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0  data-toggle = tooltip data-placement = top title = Delete_Information /> 
                    </a>
                  </td>
               </tr> ";
        }
    }
  

    
    public function update_town($town, $gm, $tm) {
      // print "How";
       // print_r($region);
        $q = $this->_db->prepare('UPDATE town SET gmid = :gmid, tcode = :code, tname = :name, doc = :date WHERE twnid = :idtown ');
//        print_r($regn); print ("19");
            $q-> bindValue(':idtown', $town->idtown());
            $q-> bindValue(':code', $town->code());
            $q-> bindValue(':name', $town->name());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
        echo "<script language = 'javascript'> alert ('Town Updated !!')</script>";
        
    }   
    
    
 }
