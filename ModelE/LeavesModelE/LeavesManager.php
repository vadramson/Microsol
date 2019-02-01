<?php

class LeavesManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_Leaves($travel) {
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM employee WHERE ecode = '" .$travel->trempcode() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt != NULL) {
            
            $q = $this->_db->prepare('INSERT INTO leaves SET  empid = :empid, lvname = :trvname, lvcode= :trvcode, lvstart = :trvsdate, lvend = :trvedate, lstatus = :approval, ecode = :trempcode ') or die(mysql_error());
            $q-> bindValue(':empid', $travel->empid());
            $q-> bindValue(':trvname', $travel->trvname());
            $q-> bindValue(':trvcode', $travel->trvcode());
            $q-> bindValue(':trvsdate', $travel->trvsdate());
            $q-> bindValue(':trvedate', $travel->trvedate());
            $q-> bindValue(':approval', $travel->approval());             
            $q-> bindValue(':trempcode', $travel->trempcode());
                                 
            $q->execute();
            
     
            echo"<script language='javascript'>alert('Request Submited Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Employee Code is Invalid')</script>";
        }
        
    } 
    
    
      public function assign_employee($assign,$tm){
       echo Swii ;
       
       $resul = $this->_db->query("SELECT * FROM employee WHERE ecode = '" .$assign->emcode() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO employee SET  dptid = :dpt, prsid = :person, bchid = :bran, ecode = :emcode, doh = :date, status = :stat ') or die(mysql_error());
            $q-> bindValue(':dpt', $assign->dpt());
            $q-> bindValue(':person', $assign->person());
            $q-> bindValue(':bran', $assign->bran());
            $q-> bindValue(':emcode', $assign->emcode());
            $q-> bindValue(':date', $tm->date());
            $q-> bindValue(':stat', $assign->stat());
            $q->execute();
            
           echo"<script language='javascript'>alert('Employee Assigned Successfully !')</script>";
        } 
        else{
            echo"<script language='javascript'>alert('Unknown Error Occured. Try Again!')</script>";
             }
        }
    
    
        
        
    function listLeaveRequest() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT * FROM leaves WHERE lstatus = 'Pending' ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["ecode"]. "</td> <td>" . $rec["lvstart"] . "</td><td>" . $rec["lvend"] . "</td><td>" . $rec["lvname"] . "</td>
                   <td> 
                 <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/LeavesVIeW/printLeaves_pdf') . "&idr=" . base64_encode($rec["lvid"]) . " target = blank >   
                       <img src=../VIeW/images/breifcase.png width = 36px hight = 36px border=0 data-toggle = tooltip data-placement = top title = View />
                        </a>
                  <a href='#' onclick=approve_leave('" . $rec["lvid"] . "')> <img src=../VIeW/images/check2.png width = 35px border=0 data-toggle = tooltip data-placement = top title = Approve  /> 
                    </a>
                  <a href='#' onclick=reject_leave('" . $rec["lvid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0 data-toggle = tooltip data-placement = top title = Reject  /> 
                    </a>
                  </td>
               </tr> ";
        }
    }
    
   function listAppprovedLeaveRequest() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT * FROM leaves WHERE lstatus = 'Approved' ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["ecode"]. "</td> <td>" . $rec["lvstart"] . "</td><td>" . $rec["lvend"] . "</td><td>" . $rec["lvname"] . "</td>
                   <td> 
                 <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/LeavesVIeW/printLeaves_pdf') . "&idr=" . base64_encode($rec["lvid"]) . " target = blank>   
                       <img src=../VIeW/images/breifcase.png width = 36px hight = 36px border=0 data-toggle = tooltip data-placement = top title = View />
                        </a>
                 
                  <a href='#' onclick=reject_leave('" . $rec["lvid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0 data-toggle = tooltip data-placement = top title = Reject  /> 
                    </a>
                  </td>
               </tr> ";
        }
    }
    
    
    
   function listDeniedLeaveRequest() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT * FROM leaves WHERE lstatus = 'Denied' ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["ecode"]. "</td> <td>" . $rec["lvstart"] . "</td><td>" . $rec["lvend"] . "</td><td>" . $rec["lvname"] . "</td>
                   <td> 
                 <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/LeavesVIeW/printLeaves_pdf') . "&idr=" . base64_encode($rec["lvid"]) . " target = blank>   
                       <img src=../VIeW/images/breifcase.png width = 36px hight = 36px border=0 data-toggle = tooltip data-placement = top title = View />
                        </a>
                  <a href='#' onclick=approve_leave('" . $rec["lvid"] . "')> <img src=../VIeW/images/check2.png width = 35px border=0 data-toggle = tooltip data-placement = top title = Approve  /> 
                    </a>
                  
                  </td>
               </tr> ";
        }
    }
    
    
  
    public function update_personEmployee($employee) {
//       print "How";
//        print_r($assign);
//        print_r($employee);
        $q = $this->_db->prepare('UPDATE person SET  address = :addres WHERE prsid = :prsid ');
//        print_r($regn); print ("19");
        $q-> bindValue(':prsid', $employee->psrid());
        $q-> bindValue(':addres', $employee->addres());
        $q->execute();
//        echo "<script language = 'javascript'> alert ('Person Updated !!')</script>";
        
    } 

    
    public function update_employee($assign) {
//       print "How";
//        print_r($assign);
//        print_r($employee);
        $q = $this->_db->prepare('UPDATE employee SET dptid = :dpt, bchid = :bran WHERE empid = :id ');
//        print_r($regn); print ("19");
        $q-> bindValue(':id', $assign->id());
        $q-> bindValue(':dpt', $assign->dpt());
        $q-> bindValue(':bran', $assign->bran());
           
        $q->execute();
        echo "<script language = 'javascript'> alert ('Profile Updated !!')</script>";
        
    }
    
    
    Public function Print_Leaves($leaves) {
        
        $resul = $this->_db->query("SELECT * FROM  leaves WHERE lvid = '" . $leaves->trvid() . "' ") or die(mysql_error());    
        $resul->bindValue(':trvid', $leaves->trvid());
        $resul->execute();        
        $rec = $resul->fetch();
        $tra = $rec["ecode"];
        
        
        
        $re = $this->_db->query("SELECT prsid FROM  employee WHERE ecode = '".$tra."' ") or die(mysql_error());    
        $rc = $re->fetch();
        $tr = $rc["prsid"];
        
        $pr = $this->_db->query("SELECT * FROM person WHERE prsid = '".$tr."' ") or die(mysql_error());    
        $per = $pr->fetch();
        $name = $per["fname"] . " " . $per["lname"] ;
        
//        echo 'print';
//        print_r($resul);
   ?>     
        <!--/*  PDF starts here */-->
        
        <page backtop=".5mm" backbottom=".5mm" backleft=".5mm" backright="5mm">
            
        <table style="width: 100%;border: none;">
            <tr style="height: 5mm" >
                <td style="width: 40%;  font-size: 6pt; font-weight: bold;">
                    <h5 style="text-align: center; "><?php echo "GERMANIA FANION MICROFINANCE"; ?></h5>
                    <h6> <span style="line-height: 0.5pt; margin-left: 5mm;">   <?php echo "TATSA Business Center"; ?><?php echo strtoupper("Bamenda"); ?></span><br>
                      <span style="line-height: 0.5pt; margin-left: 2mm;">  P.O BOX <?php echo "1635 Bamenda"?>
                          TEL: <?php echo "678583312"; ?></span></h6>
                </td>
                <td style="width: 30%; text-align: center; font-size: 6.5pt; font-weight: bold;">
                    <img src="../VIeW/images/logo.png" alt="logo" style="height: 7mm; border-radius: 6mm;"><br>
                    <p> Save Regularly Borrow Wisely and Repay Promtlly.</p>
                </td>
                <td style="width: 35%; text-align: center; font-size: 7pt; font-weight: bold;">
                    <h5>Leave N<sup>o</sup> <span style="text-decoration: underline;"> <?php echo $rec["lvcode"] ?> </span> </h5>                    
                </td>
            </tr></table>
<!--        </table><br>
        
        &nbsp;&nbsp;&nbsp; _____________________________________________________________-->
             <div style="width: 100%;">
                <div style="width: 70%; text-align: left; padding-top: -33m;">
                    <p> <strong> <span style=" margin-left: 2mm;"> Name :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $name ?></span> </p>                     
                    <p> <strong> <span style=" margin-left: 1mm;"> Type :</span> </strong> <span style="font-family: Arial; font-size: 10pt;;"> <?php echo $rec["lvname"] ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> From :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["lvstart"] ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> To :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["lvend"] ?></span> </p> 
                    <!--<p> <strong> <span style=" margin-left: 1mm;"> Employee ____________ :</span> </strong> <span style="font-family: Arial; font-size: 10pt; font-weight: bold;"> HRM _______________ Manager ____________</span> </p>--> 
                </div><p> <strong> <span style=" margin-left: 1mm;"> Employee ____________ &nbsp; </span> </strong> <span style="font-family: Arial; font-size: 10pt; font-weight: bold;"> HRM _______________ &nbsp;&nbsp;Manager ____________</span> </p>  
                <div style="margin-left: 80mm; margin-top: -55mm; text-align: left; float: right; height: 40mm; background-color: pink;">
                           Photo of Employee
                </div>
             </div>
            
<br><br>&nbsp;&nbsp;&nbsp; _____________________________________________________________<br><br>

        <table style="width: 100%;border: none;">
            <tr style="height: 5mm" >
                <td style="width: 40%;  font-size: 6pt; font-weight: bold;">
                    <h5 style="text-align: center; "><?php echo "GERMANIA FANION MICROFINANCE"; ?></h5>
                    <h6> <span style="line-height: 0.5pt; margin-left: 5mm;">   <?php echo "TATSA Business Center"; ?><?php echo strtoupper("Bamenda"); ?></span><br>
                      <span style="line-height: 0.5pt; margin-left: 2mm;">  P.O BOX <?php echo "1635 Bamenda"?>
                          TEL: <?php echo "678583312"; ?></span></h6>
                </td>
                <td style="width: 30%; text-align: center; font-size: 6.5pt; font-weight: bold;">
                    <img src="../VIeW/images/logo.png" alt="logo" style="height: 7mm; border-radius: 6mm;"><br>
                    <p> Save Regularly Borrow Wisely and Repay Promtlly.</p>
                </td>
                <td style="width: 35%; text-align: center; font-size: 7pt; font-weight: bold;">
                    <h5>Leave N<sup>o</sup> <span style="text-decoration: underline;"> <?php echo $rec["lvcode"] ?> </span> </h5>                    
                </td>
            </tr></table>
             <div style="margin-left: 80mm; margin-bottom: -65mm; text-align: left; float: right; height: 40mm; background-color: pink;">
                           Photo of Employee
                </div>
            <div style="width: 100%;  ">
<!--                <div style="margin-left: 80mm; margin-top: 30mm; text-align: left; float: right; height: 40mm; background-color: yellowgreen;">
                            ;,;';'
                </div>-->
                <div style=" text-align: left; margin-top: 10mm;">
                    <p> <strong> <span style=" margin-left: 2mm;"> Name :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $name ?></span> </p>                    
                    <p> <strong> <span style=" margin-left: 1mm;"> Type :</span> </strong> <span style="font-family: Arial; font-size: 10pt;;"> <?php echo $rec["ecode"] ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> Type :</span> </strong> <span style="font-family: Arial; font-size: 10pt;;"> <?php echo $rec["lvname"] ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> From :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["lvstart"] ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> To :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["lvend"] ?></span> </p> 
                    <!--<p> <strong> <span style=" margin-left: 1mm;"> Employee ____________ :</span> </strong> <span style="font-family: Arial; font-size: 10pt; font-weight: bold;"> HRM _______________ Manager ____________</span> </p>--> 
                </div><p> <strong> <span style=" margin-left: 1mm;"> Employee ____________ &nbsp; </span> </strong> <span style="font-family: Arial; font-size: 10pt; font-weight: bold;"> HRM _______________ &nbsp;&nbsp;Manager ____________</span> </p>  
                
             </div>
        
        </page>
        
        
    <?php    
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 }
