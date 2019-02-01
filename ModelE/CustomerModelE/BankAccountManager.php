<?php

class BaManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
      function assignbka($assign, $tm) {
//        echo Swii ;
       
       $resul = $this->_db->query("SELECT * FROM account WHERE Number = '" .$assign->acctnum() ." ' ") or die(mysql_error());
//       echo Swii2; 
        $reqt = $resul->fetch();
//         echo "boy1";
         
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO account SET  	cusid = :cusid, Number = :acctnum, balance = :acctbalance, type = :accttype, intrate = :acctintrate, status = :status,  Doc = :date ') or die(mysql_error());
            $q-> bindValue(':cusid', $assign->cusid());
            $q-> bindValue(':acctnum', $assign->acctnum());
            $q-> bindValue(':acctbalance', $assign->acctbalance());
            $q-> bindValue(':accttype', $assign->accttype());
            $q-> bindValue(':acctintrate', $assign->acctintrate());
            $q-> bindValue(':status', $assign->status());
            $q-> bindValue(':date', $tm->date());
            $q->execute();
            
            echo"<script language='javascript'>alert('Bank Account Created Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Redondance!')</script>";
        }
        
    }
    
//     function assignbkabk($assign, $tm) {
//        echo Swii ;
//       
//       $resul = $this->_db->query("SELECT * FROM account") or die(mysql_error());
//       echo Swii2; 
//        $reqt = $resul->fetch();
//         echo "boy1";
//         
//        if ($reqt == NULL) {
//            
//            $q = $this->_db->prepare('INSERT INTO account SET  	cusid = :cusid, Number = :acctnum, balance = :acctbalance, type = :accttype, intrate = :acctintrate, status = :status,  Doc = :date ') or die(mysql_error());
//            $q-> bindValue(':cusid', $assign->cusid());
//            $q-> bindValue(':acctnum', $assign->acctnum());
//            $q-> bindValue(':acctbalance', $assign->acctbalance());
//            $q-> bindValue(':accttype', $assign->accttype());
//            $q-> bindValue(':acctintrate', $assign->acctintrate());
//            $q-> bindValue(':status', $assign->status());
//            $q-> bindValue(':date', $tm->date());
//            $q->execute();
//            
//            echo"<script language='javascript'>alert('Bank Account Created Successfully !')</script>";
//        } else{
//            echo"<script language='javascript'>alert('Redondance!')</script>";
//        }
//        
//    }
    
         
    function listCustomer() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
//        $first = $this->_db->query("SELECT customer.cusid AS ccusid, account.cusid AS acusid FROM customer, account ") or die(mysql_error());
//        $fs = $first->fetch();
//        $ccusid = $fs["ccusid"];
//        $acusid = $fs["acusid"];
//        
//        $sec = $this->_db->query("SELECT customer.prsid AS cprsid FROM customer WHERE '" . $ccusid." ' = '" . $acusid." ' ") or die(mysql_error());
//        $cc = $sec->fetch();
//        $cprsid = $cc["cprsid"];        echo $cc["cprsid"];
          $resul = $this->_db->query("SELECT account.Number AS AcctNumber, account.balance AS balance, account.status AS status, account.acctid AS acctid, account_setter.astname AS an FROM account, account_setter WHERE account.type = account_setter.astid") or die(mysql_error());
//          $resul = $this->_db->query("SELECT account.Number AS AcctNumber, account.balance AS balance, account.status AS status, account_setter.astname AS an, person.fname AS fn FROM account, account_setter,person WHERE account.type = account_setter.astid AND person.prsid = '" .$cprsid." ' ") or die(mysql_error());
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["an"] . "</td> <td>" . $rec["AcctNumber"] . "</td><td>" . $rec["balance"] . "</td><td>" . $rec["status"] . "</td>
                   <td><a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/CustomerVIeW/ViewCustomerProfile') . "&idr=" . base64_encode($rec["acctid"]) . ">   
                       <img src=../VIeW/images/User-icon.png width = 25px hight = 25px border=0 data-toggle = tooltip data-placement = top title = Account_Holder />
                        </a> 
                  </td>
               </tr> ";
        }
    }
    
    
    
//    function listCustomer1() {
//       
////        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
//          
////        $resul = $this->_db->query("SELECT  person.fname AS fn, person.lname AS ln, person.phone AS ph, bkaccount.AcctNumber AS ec, bkaccount.bkaid AS bkaid, bkaccount.bkblance AS bn From person, bkaccount WHERE customer.prsid = person.prsid  ") or die(mysql_error());
//          $resul = $this->_db->query("SELECT * FROM account") or die(mysql_error());
//        while ($rec = $resul->fetch()) {
//            
//            <!--<tr>--> 
            //<?php
//
//            echo" 
//                 <td>" . $rec["cusid"] . "</td> <td>" . $rec["AcctNumber"] . "</td><td>" . $rec["status"] . "</td><td>" . $rec["bkbalance"] . "</td><td>" . $rec["bktype"] . "</td><td>" . $rec["bkintrate"] . "</td>
//                   <td><a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/EmployeeVIeW/ViewEmployeeProfile') . "&idr=" . base64_encode($rec["bkaid"]) . ">   
//                       <img src=../VIeW/images/User-icon.png width = 16px hight = 16px border=0 data-toggle = tooltip data-placement = top title = View_Profile />
//                        </a> 
//                 <a href='#' onclick=activate_employee('" . $rec["bkaid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0 data-toggle = tooltip data-placement = top title = Activate_Profile  /> 
//                    </a>
//                  </td>
//               </tr> ";
//        }
//    }
//    
    
    function listActiveCustomer() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT account.Number AS AcctNumber, account.balance AS balance, account.status AS status, account.acctid AS acctid, account_setter.astname AS an FROM account, account_setter WHERE account.type = account_setter.astid AND account.status = 'Active' ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["an"] . "</td> <td>" . $rec["AcctNumber"] . "</td><td>" . $rec["balance"] . "</td><td>" . $rec["status"] . "</td>
                   <td><a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/CustomerVIeW/ViewCustomerProfile') . "&idr=" . base64_encode($rec["acctid"]) . ">   
                       <img src=../VIeW/images/User-icon.png width = 25px hight = 25px border=0 data-toggle = tooltip data-placement = top title = Account_Holder />
                        </a>
                        <a href='#' onclick=deactivate_account('" . $rec["acctid"] . "')> <img src=../VIeW/images/slide_a.png width = 25px hight = 25px border=0 data-toggle = tooltip data-placement = top title = Deactivate_Account  /> 
                    </a>
                  </td>
               </tr> ";
        }
    }
    
    
    
  
   function listDesableEmployee() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT account.Number AS AcctNumber, account.balance AS balance, account.status AS status, account.acctid AS acctid, account_setter.astname AS an FROM account, account_setter WHERE account.type = account_setter.astid AND account.status = 'Deactivated' ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["an"] . "</td> <td>" . $rec["AcctNumber"] . "</td><td>" . $rec["balance"] . "</td><td>" . $rec["status"] . "</td>
                   <td><a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/CustomerVIeW/ViewCustomerProfile') . "&idr=" . base64_encode($rec["acctid"]) . ">   
                       <img src=../VIeW/images/User-icon.png width = 25px hight = 25px border=0 data-toggle = tooltip data-placement = top title = Account_Holder />
                        </a> 
                        <a href='#' onclick=activate_account('" . $rec["acctid"] . "')> <img src=../VIeW/images/check2.png width = px border=0 data-toggle = tooltip data-placement = top title = Activate_Account  /> 
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
    
    
 }
