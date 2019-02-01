<?php

class DepartmentManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_department($dpt, $gm, $tm) {
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM department WHERE dname = '" .$dpt->name() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO department SET gmid = :gmid, dcode = :code, dname = :name, doc = :date, stdsalary = :salary ') or die(mysql_error());
            $q-> bindValue(':code', $dpt->code());
            $q-> bindValue(':name', $dpt->name());
            $q-> bindValue(':salary', $dpt->salary());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
//            $q-> bindValue(':twnid', $tid->twnid());
            $q->execute();
            
            echo"<script language='javascript'>alert('Department Inserted Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Redondance!')</script>";
        }
        
    }
    
    
    
    
    function listDepartment() {
       
//        $resul = $this->_db->query("SELECT ville.idville as idville, ville.libellev as libellev, region.libeller as idregion FROM ville INNER JOIN region ON ville.idregion = region.idregion ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT * From department ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["dptid"] . "</td> <td>" . $rec["dname"] . "</td><td>" . $rec["dcode"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/DptVIeW/editdpt') . "&idr=" . base64_encode($rec["dptid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0/>
                        </a>
                 <a href='#' onclick=del_id_department('" . $rec["dptid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0/> 
                    </a>
                  </td>
               </tr> ";
        }
    }
  

    
    public function update_department($dpt, $gm, $tm) {
      // print "How";
       // print_r($region);
        $q = $this->_db->prepare('UPDATE department SET gmid = :gmid, dcode = :code, dname = :name, doc = :date, stdsalary = :salary WHERE dptid = :dptid ');
//        print_r($regn); print ("19");
            $q-> bindValue(':dptid', $dpt->dptid());
            $q-> bindValue(':code', $dpt->code());
            $q-> bindValue(':name', $dpt->name());
            $q-> bindValue(':salary', $dpt->salary());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
        echo "<script language = 'javascript'> alert ('Department Updated !!')</script>";
        
    }   
    
    
 }
