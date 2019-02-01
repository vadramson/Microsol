<?php

class CurrencyManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function exchange($curency) {
         echo "boy";
        $resul = $this->_db->query("SELECT * FROM currency WHERE exchcode = '" .$curency->exchcode() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO currency SET  empid = :empid, cycode = :cycode, dop = :dop, ramount = :ramount, gamount = :gamount, cusname = :cusname, nic = :nic, exchcode = :exchcode, phone = :phone ') or die(mysql_error());
            $q-> bindValue(':empid', $curency->empid());
            $q-> bindValue(':cycode', $curency->cycode());
            $q-> bindValue(':dop', $curency->dop());
            $q-> bindValue(':ramount', $curency->ramount());
            $q-> bindValue(':gamount', $curency->gamount());
            $q-> bindValue(':cusname', $curency->cusname());
            $q-> bindValue(':nic', $curency->nic());
            $q-> bindValue(':exchcode', $curency->exchcode());    
            $q-> bindValue(':phone', $curency->phone());
            $q->execute();
            
     
            echo"<script language='javascript'>alert('Transaction Successfull !')</script>";
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
    
    
  
    
   function listExchanges() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT * FROM currency ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["exchcode"]. "</td> <td>" . $rec["ramount"] . "</td><td>" . $rec["gamount"] . "</td><td>" . $rec["cusname"] . "</td><td>" . $rec["phone"] . "</td><td>" . $rec["dop"] . "</td>
                   <td> 
                 <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/CurrencyEXVIeW/printexchangeHistory_pdf') . "&idr=" . base64_encode($rec["cyid"]) . " target = blank>   
                       <img src=../VIeW/images/print.png width = 36px hight = 36px border=0 data-toggle = tooltip data-placement = top title = Print />
                        </a>        
                  </td>
               </tr> ";
        }
    }
    
    
    
   function listDeniedTravelOrders() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT * FROM travel_order WHERE approval = 'Denied' ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["trempcode"]. "</td> <td>" . $rec["trvsdate"] . "</td><td>" . $rec["trvedate"] . "</td><td>" . $rec["destination"] . "</td><td>" . $rec["trvname"] . "</td>
                   <td> 
                 <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/TravelVIeW/printtravel_pdf') . "&idr=" . base64_encode($rec["trvid"]) . " target = blank>   
                       <img src=../VIeW/images/breifcase.png width = 36px hight = 36px border=0 data-toggle = tooltip data-placement = top title = View />
                        </a>
                  <a href='#' onclick=approve_employee('" . $rec["trvid"] . "')> <img src=../VIeW/images/check1.png width = 25px border=0 data-toggle = tooltip data-placement = top title = Approve  /> 
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
    
    
    
    
    
    
    Public function Print_exchangeHitory($history) {
        
        $resul = $this->_db->query("SELECT * FROM  currency WHERE cyid = '" . $history->cyid() . "' ") or die(mysql_error());    
        $resul->bindValue(':cyid', $history->cyid());
        $resul->execute();        
        $rec = $resul->fetch();
        $emp = $rec["empid"];
        $tra = $rec["cycode"]; 

        $current = $this->_db->query("SELECT cscode FROM cy_seter WHERE csid = '".$tra."' ") or die(mysql_error());
        $reqt = $current->fetch();
        $cy = $reqt["cscode"];

        $broker = $this->_db->query("SELECT prsid, bchid FROM employee WHERE empid = '".$emp."' ") or die(mysql_error());
        $brok = $broker->fetch();
        $brk = $brok["prsid"];
        $bid = $brok["bchid"];

        $person = $this->_db->query("SELECT fname, lname, bname FROM person, branch WHERE prsid = '".$brk."' AND bchid = '".$bid."' ") or die(mysql_error());
        $pers = $person->fetch();
        $fn = $pers["fname"];
        $ln = $pers["lname"];
        $bn = $pers["bname"];
//        echo 'print';
//        print_r($resul);
   ?>     
        <!--/*  PDF starts here */-->
        
         <page backtop=".5mm" backbottom=".5mm" backleft=".5mm" backright="5mm" >
            
        <table style="width: 100%;border: none; background-color: peachpuff; ">
            <tr style="height: 5mm" >
                <td style="width: 40%;  font-size: 6pt; font-weight: bold;">
                    <h5 style="text-align: center; "><?php echo "GERMANIA FANION MICROFINANCE"; ?></h5>
                    <h6> <span style="line-height: 0.5pt; margin-left: 5mm;">   <?php echo "TATSA Business Center "; ?><?php echo strtoupper("Bamenda"); ?></span><br>
                      <span style="line-height: 0.5pt; margin-left: 2mm;">  P.O BOX <?php echo "1635 Bamenda"?>
                          TEL: <?php echo "678583312"; ?></span></h6>
                </td>
                <td style="width: 25%; text-align: center; font-size: 6.5pt; font-weight: bold;">
                    <img src="../VIeW/images/logo.png" alt="logo" style="height: 7mm; border-radius: 6mm;"><br>
                    <p> Save Regularly Borrow Wisely and Repay Promtlly.</p>
                </td>
                <td style="width: 35%; text-align: center; font-size: 7pt; font-weight: bold;">
                    <h5>Time : <span style="text-decoration: none;"> <?php echo $rec["dop"]; ?> </span> </h5>                    
                    <h5>Reff N<sup>o</sup> <span style="text-decoration: underline;"> <?php echo $rec["exchcode"]; ?> </span></h5>
                </td><br> 
            </tr></table>
<!--        </table><br>
        
        &nbsp;&nbsp;&nbsp; _____________________________________________________________-->
             <div style="width: 100%; background-color: peachpuff; ">
                <div style="width: 67%; border: 2px; text-align: left; padding-top: -33m;">
                    <p> <strong> <span style=" margin-left: 2mm;"> Customer's Name :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["cusname"]; ?></span> </p>                     
                    <p> <strong> <span style=" margin-left: 1mm;"> Phone Number :</span> </strong> <span style="font-family: Arial; font-size: 10pt;;"> <?php echo $rec["phone"]; ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> Foreign :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["ramount"]." ".$cy  ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> Local:</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["gamount"]." F CFA"?></span> </p>                  
                    <!--<p> <strong> <span style=" margin-left: 1mm;"> Employee ____________ :</span> </strong> <span style="font-family: Arial; font-size: 10pt; font-weight: bold;"> HRM _______________ Manager ____________</span> </p>--> 
                </div><br><br><p> <strong> <span style=" background-color: peachpuff; margin-left: 1mm;"> Broker ____________ &nbsp; </span> </strong> <span style="font-family: Arial; font-size: 8pt; font-weight: bold;"> Customer _______________ &nbsp;&nbsp;Manager ______________</span> </p>  
                <div style="margin-left: 90mm; margin-top: -55mm; text-align: center; float: right; height: 40mm; background-color: peachpuff;">
                    <br>  <img src="../VIeW/images/logo.png" alt="logo" ><br><br>
                    <strong> Broker </strong> <br>  <?php echo $fn.' '. $ln;?><br><br>
                    <strong> Branch </strong> <br> <?php echo $bn;?>
                           <!--<img src="../VIeW/images/logo.png" alt="logo" >-->
                </div>
             </div>
            
<br><br>&nbsp;&nbsp;&nbsp; _____________________________________________________________<br><br>

        <table style="width: 100%;border: none; overflow: hidden;">
            <tr style="height: 5mm" >
                <td style="width: 40%;  font-size: 6pt; font-weight: bold;">
                    <h5 style="text-align: center; "><?php echo "GERMANIA FANION MICROFINANCE"; ?></h5>
                    <h6> <span style="line-height: 0.5pt; margin-left: 5mm;">   <?php echo "TATSA Business Center "; ?><?php echo strtoupper("Bamenda"); ?></span><br>
                      <span style="line-height: 0.5pt; margin-left: 2mm;">  P.O BOX <?php echo "1635 Bamenda"?>
                          TEL: <?php echo "678583312"; ?></span></h6>
                </td>
                <td style="width: 30%; text-align: center; font-size: 6.5pt; font-weight: bold;">
                    <img src="../VIeW/images/logo.png" alt="logo" style="height: 7mm; border-radius: 6mm;"><br>
                    <p> Save Regularly Borrow Wisely and Repay Promtlly.</p>
                </td>
                <td style="width: 35%; text-align: center; font-size: 7pt; font-weight: bold;">
                    <h5>Time : <span style="text-decoration: none;"> <?php echo $rec["dop"]; ?> </span> </h5>
                    <h5>Reff N<sup>o</sup> <span style="text-decoration: underline;"> <?php echo $rec["exchcode"];?> </span> </h5>
                </td>
            </tr></table>
             <div style="margin-left: 90mm; margin-bottom: -65mm; text-align: center; float: right; height: 40mm; background-color: peachpuff;">
                           <br>  <img src="../VIeW/images/logo.png" alt="logo" ><br><br>
                           <strong> Broker </strong> <br>  <?php echo $fn.' '. $ln;?><br><br>
                           <strong> Branch </strong> <br> <?php echo $bn;?>
                </div>
            <div style="width: 100%;  ">
<!--                <div style="margin-left: 80mm; margin-top: 30mm; text-align: left; float: right; height: 40mm; background-color: yellowgreen;">
                            ;,;';'
                </div>-->
                <div style="width: 67%; background-color: peachpuff; text-align: left;  margin-top: 2mm; border: 2px;">
                    <p> <strong> <span style=" margin-left: 2mm;"> Customer's Name :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["cusname"]; ?></span> </p>                     
                    <p> <strong> <span style=" margin-left: 1mm;"> Phone Number :</span> </strong> <span style="font-family: Arial; font-size: 10pt;;"> <?php echo $rec["phone"]; ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> Foreign :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["ramount"]." ".$cy  ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> Local:</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["gamount"]." F CFA"?></span> </p>                  
                    <!--<p> <strong> <span style=" margin-left: 1mm;"> Broker :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["trvedate"] ?></span> </p>--> 
                    <!--<p> <strong> <span style=" margin-left: 1mm;"> Employee ____________ :</span> </strong> <span style="font-family: Arial; font-size: 10pt; font-weight: bold;"> HRM _______________ Manager ____________</span> </p>--> 
                </div><br><br><p> <strong> <span style=" margin-left: 1mm; background-color: peachpuff; "> Broker ____________ &nbsp; </span> </strong> <span style="font-family: Arial; font-size: 8pt; font-weight: bold;"> Customer _______________ &nbsp;&nbsp;Manager ______________</span> </p>  
                
             </div>
        
        </page>
        
        
    <?php    
    }
    
 }
