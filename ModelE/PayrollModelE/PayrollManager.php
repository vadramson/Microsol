<?php

class PayrollManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_payroll($payroll, $gm, $tm){
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM payroll WHERE empcode = '" .$payroll->empcode() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
        if ($reqt == NULL) {
        
        $d =  $payroll->deductions();
        $b =  $payroll->bonuses();
        $s =  $payroll->empstdsalary();
        $n = ($s + $b) - $d;
        
            $q = $this->_db->prepare("INSERT INTO payroll SET empid = :gmid, prlcode = :prlcode, empdpt = :empdpt, deductions = :deductions, bonuses = :bonuses, empcode = :empcode, empstdsalary = :empstdsalary, cnps = :cnps, netsalary = '" .$n ." ', prldate = :date ") or die(mysql_error());
            $q-> bindValue(':gmid', $gm->gmid());
            $q-> bindValue(':prlcode', $payroll->prlcode());
            $q-> bindValue(':empdpt', $payroll->empdpt());
            $q-> bindValue(':deductions', $payroll->deductions());
            $q-> bindValue(':bonuses', $payroll->bonuses());
            $q-> bindValue(':empcode', $payroll->empcode());
            $q-> bindValue(':empstdsalary', $payroll->empstdsalary());
            $q-> bindValue(':cnps', $payroll->cnps());
//            $q-> bindValue(':netsalary', $payroll->netsalary());            
            $q-> bindValue(':date', $tm->date());            
            $q->execute();
//            echo "boymmm";
            echo"<script language='javascript'>alert('Salary Calculated Successfully !')</script>";  
        } else{
            $id = $reqt["prlid"];
            
                $d =  $payroll->deductions();
                $b =  $payroll->bonuses();
                $s =  $payroll->empstdsalary();
                $n = ($s + $b) - $d;
                
            $q = $this->_db->prepare("UPDATE payroll SET empid = :gmid, prlcode = :prlcode, empdpt = :empdpt, deductions = :deductions, bonuses = :bonuses, empcode = :empcode, empstdsalary = :empstdsalary, cnps = :cnps, netsalary = '" .$n ." ', prldate = :date WHERE prlid = '" .$id ." '  ") or die(mysql_error());
            $q-> bindValue(':gmid', $gm->gmid());
            $q-> bindValue(':prlcode', $payroll->prlcode());
            $q-> bindValue(':empdpt', $payroll->empdpt());
            $q-> bindValue(':deductions', $payroll->deductions());
            $q-> bindValue(':bonuses', $payroll->bonuses());
            $q-> bindValue(':empcode', $payroll->empcode());
            $q-> bindValue(':empstdsalary', $payroll->empstdsalary());
            $q-> bindValue(':cnps', $payroll->cnps());
//            $q-> bindValue(':netsalary', $payroll->netsalary()); 
//            echo"<script language='javascript'>alert('Employee's Payroll1 Updated!')</script>";
            $q-> bindValue(':date', $tm->date());            
            $q->execute();
            
            echo"<script language='javascript'>alert('Employee's Payroll Updated!')</script>";
        }
    }
    
    
    
    public function insert_payrollvv($payroll, $gm, $tm){
//         echo "boy";
        $d =  $payroll->deductions();
        $b =  $payroll->bonuses();
        $s =  $payroll->empstdsalary();
        $n = ($s + $b) - $d;
        
            $q = $this->_db->prepare("INSERT INTO payroll SET empid = :gmid, prlcode = :prlcode, empdpt = :empdpt, deductions = :deductions, bonuses = :bonuses, empcode = :empcode, empstdsalary = :empstdsalary, cnps = :cnps, netsalary = '" .$n ." ', prldate = :date ") or die(mysql_error());
            $q-> bindValue(':gmid', $gm->gmid());
            $q-> bindValue(':prlcode', $payroll->prlcode());
            $q-> bindValue(':empdpt', $payroll->empdpt());
            $q-> bindValue(':deductions', $payroll->deductions());
            $q-> bindValue(':bonuses', $payroll->bonuses());
            $q-> bindValue(':empcode', $payroll->empcode());
            $q-> bindValue(':empstdsalary', $payroll->empstdsalary());
            $q-> bindValue(':cnps', $payroll->cnps());
//            $q-> bindValue(':netsalary', $payroll->netsalary());            
            $q-> bindValue(':date', $tm->date());            
            $q->execute();
//            echo "boymmm";
            echo"<script language='javascript'>alert('Salary Calculated Successfully !')</script>";       
    }
    
   
  
    
    function listPayroll() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());          
        $resul = $this->_db->query("SELECT * From payroll ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["empcode"] . "</td> <td>" . $rec["empdpt"] . "</td><td>" . $rec["deductions"] ."  F CFA". "</td><td>" . $rec["bonuses"] . "</td><td>" . $rec["empstdsalary"] . "</td><td>" . $rec["netsalary"] . "</td><td>" . $rec["prldate"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/PayrollVIeW/printPayroll_pdf') . "&idr=" . base64_encode($rec["prlid"]) . " target = blank>   
                       <img src=../VIeW/images/print_1.png border=0 width = 32px height = 25px data-toggle = tooltip data-placement = top title =  Print  />
                        </a>                 
                  </td>
               </tr> ";
        }
    }
  

    
   function Print_Payroll($payroll) {
        
        $resul = $this->_db->query("SELECT * FROM payroll ") or die(mysql_error());
        
        
        $resul->bindValue(':prlid', $payroll->prlid());
        $resul->execute();
        
//          $resul = $this->_db->query("SELECT region.*, count(ville.idregion) AS nbville FROM region LEFT JOIN ville ON region.idregion=ville.idregion GROUP BY idregion");
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                  <td>" . $rec["empcode"] . "</td><td>" . $rec["deductions"] ."  F CFA". "</td><td>" . $rec["bonuses"] . "</td><td>" . $rec["empstdsalary"] . "</td><td>" . $rec["netsalary"] . "</td><td>" . $rec["prldate"] . "</td>
                   
             
               </tr> ";
        }
    }   
    
    
 }
