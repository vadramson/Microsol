<?php

class BranchManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_branch($branch, $gm, $tm, $tid) {
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM branch WHERE bname = '" .$branch->name() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO branch SET twnid = :twnid, gmid = :gmid, bcode = :code, bname = :name, doc = :date ') or die(mysql_error());
            $q-> bindValue(':code', $branch->code());
            $q-> bindValue(':name', $branch->name());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q-> bindValue(':twnid', $tid->twnid());
            $q->execute();
            
            echo"<script language='javascript'>alert('Branch Inserted Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Redondance!')</script>";
        }
        
    }
    
    
    
    
    function listBranch() {
       
//        $resul = $this->_db->query("SELECT ville.idville as idville, ville.libellev as libellev, region.libeller as idregion FROM ville INNER JOIN region ON ville.idregion = region.idregion ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT * From branch ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["bchid"] . "</td> <td>" . $rec["bname"] . "</td><td>" . $rec["bcode"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/BranchVIeW/editbranch') . "&idr=" . base64_encode($rec["bchid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0/>
                        </a>
                 <a href='#' onclick=del_id_branch('" . $rec["bchid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0/> 
                    </a>
                  </td>
               </tr> ";
        }
    }
  

    
    public function update_branch($branch, $gm, $tm, $tid) {
      // print "How";
       // print_r($region);
        $q = $this->_db->prepare('UPDATE branch SET twnid = :twnid, gmid = :gmid, bcode = :code, bname = :name, doc = :date WHERE bchid = :bchid ');
//        print_r($regn); print ("19");
            $q-> bindValue(':bchid', $branch->bchid());
            $q-> bindValue(':code', $branch->code());
            $q-> bindValue(':name', $branch->name());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':gmid', $gm->gmid());
            $q-> bindValue(':twnid', $tid->twnid());
            $q->execute();
        echo "<script language = 'javascript'> alert ('Branch Updated !!')</script>";
        
    }   
    
    
 }
