<?php

class CustomerManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_person($employee) {
         echo "boy";
        $resul = $this->_db->query("SELECT * FROM person WHERE phone = '" .$employee->phone() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
         echo "boy1";
        if ($reqt == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO person SET  pcode = :pcode, fname = :fname, lname = :lname, dob = :dob, plcob = :pob, sex = :sex, address = :addres, phone = :phone, email = :email, nic = :nic, pic = :pic ') or die(mysql_error());
            $q-> bindValue(':pcode', $employee->pcode());
            $q-> bindValue(':fname', $employee->fname());
            $q-> bindValue(':lname', $employee->lname());
            $q-> bindValue(':dob', $employee->dob());
            $q-> bindValue(':pob', $employee->pob());
            $q-> bindValue(':sex', $employee->sex());
            $q-> bindValue(':addres', $employee->addres());
            $q-> bindValue(':phone', $employee->phone());
            $q-> bindValue(':email', $employee->email());
            $q-> bindValue(':nic', $employee->nic());
            $q-> bindValue(':pic', $employee->pic());
//            $q-> bindValue(':date', $tm->date());
//            $q-> bindValue(':gmid', $gm->gmid());
            $q->execute();
            
            echo"<script language='javascript'>alert('Person Inserted Successfully !')</script>";
        } else{
            echo"<script language='javascript'>alert('Redondance!')</script>";
        }
        
    } 
    
    
      public function create_BkAccount($assign,$tm,$gm){
       
       
        $resul = $this->_db->query("SELECT * FROM customer WHERE ccode = '" .$assign->cuscode() ."' ") or die(mysql_error());
        $reqt = $resul->fetch();
        
        if ($reqt == NULL) {
            
            $resul1 = $this->_db->query("SELECT * FROM customer WHERE  prsid = '" .$assign->person() ." ' ") or die(mysql_error());
            $reqts = $resul1->fetch();
             
            if ($reqts == NULL) {
            
            $q = $this->_db->prepare('INSERT INTO customer SET  prsid = :person, trxid = :txcode, ccode = :cuscode, branch = :bran, Profession = :proff, Nk_name = :nkname, Nk_contact = :nkphone, Relationship = :rel, Account_Officer = :gmid, Status = :stat, Doc = :date ') or die(mysql_error());
            $q-> bindValue(':person', $assign->person());
            $q-> bindValue(':txcode', $assign->txcode());
            $q-> bindValue(':cuscode', $assign->cuscode());
            $q-> bindValue(':bran', $assign->bran());
            $q-> bindValue(':proff', $assign->proff());
            $q-> bindValue(':nkname', $assign->nkname());
            $q-> bindValue(':nkphone', $assign->nkphone());
            $q-> bindValue(':rel', $assign->rel());
            $q-> bindValue(':gmid', $gm->gmid());
            $q-> bindValue(':stat', $assign->stat());
            $q-> bindValue(':date', $tm->date());
            $q->execute();
            
           echo"<script language='javascript'>alert('Bank Details Registered Successfully !')</script>";
        } 
        else{
            echo"<script language='javascript'>alert('Bank Account Details Exist Already!')</script>";
             }
        } else{
            echo"<script language='javascript'>alert('Unknown Error Occured. Try Again!')</script>";
             }
        }
        
        
        
        
//        public function assign_bankAccount($bkacct,$tm) {
////         echo $bkacct->acctnum() . "boy12s";
//        $resul = $this->_db->query("SELECT * FROM customer WHERE cusid = '" .$bkacct->cusid() ."' ") or die(mysql_error());
//        $reqt = $resul->fetch();
//         echo "boy14";
//        if ($reqt == NULL) {
//            
//            $q = $this->_db->prepare('INSERT INTO bkaccount SET  cusid = :cusid, AcctNumber = :acctnum,  bkblance = :acctbalance, bktype = :accttype, bkintrate = :acctintrate, Doc = :date ') or die(mysql_error());
//            $q-> bindValue(':cusid', $bkacct->cusid());
//            $q-> bindValue(':acctnum', $bkacct->acctnum());
//            $q-> bindValue(':acctbalance', $bkacct->acctbalance());
//            $q-> bindValue(':accttype', $bkacct->accttype());
//            $q-> bindValue(':acctintrate', $bkacct->acctintrate());
//            $q-> bindValue(':date', $tm->date());
//            $q->execute();
//            
//            echo"<script language='javascript'>alert('Bank Account Created Successfully !')</script>";
//        } else{
//            echo"<script language='javascript'>alert('Redondance!')</script>";
//        }
//        
//    }
//       
        
        
        
    
    
        
        
    function listCustomer() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT  person.fname AS fn, person.lname AS ln, person.phone AS ph, bkaccount.AcctNumber AS ec, bkaccount.bkaid AS bkaid, bkaccount.bkblance AS bn From person, bkaccount WHERE customer.prsid = person.prsid  ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["fn"] . "</td> <td>" . $rec["ln"] . "</td><td>" . $rec["ph"] . "</td><td>" . $rec["ec"] . "</td><td>" . $rec["bn"] . "</td>
                   <td> 
                 <a href='#' onclick=activate_employee('" . $rec["bkaid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0 data-toggle = tooltip data-placement = top title = Activate_Profile  /> 
                    </a>
                  </td>
               </tr> ";
        }
    }
    
    
    function listActiveEmployee() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT  person.fname AS fn, person.lname AS ln, person.phone AS ph, employee.ecode AS ec, employee.empid AS empid, branch.bname AS bn From person, employee, branch WHERE employee.bchid = branch.bchid and person.prsid = employee.prsid and employee.status = '".Active."'  ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["fn"] . "</td> <td>" . $rec["ln"] . "</td><td>" . $rec["ph"] . "</td><td>" . $rec["ec"] . "</td><td>" . $rec["bn"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/EmployeeVIeW/ViewEmployeeProfile') . "&idr=" . base64_encode($rec["empid"]) . ">   
                       <img src=../VIeW/images/User-icon.png width = 16px hight = 16px border=0 data-toggle = tooltip data-placement = top title = View_Profile />
                        </a>
                 <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/EmployeeVIeW/editemployeeProfile') . "&idr=" . base64_encode($rec["empid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0 data-toggle = tooltip data-placement = top title = Edit_Profile />
                        </a>
                 <a href='#' onclick=diactivate_employee('" . $rec["empid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0 data-toggle = tooltip data-placement = top title = Diactivate_Profile  /> 
                    </a>
                 
                  </td>
               </tr> ";
        }
    }
    
    
    
    function listDesableEmployee() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT  person.fname AS fn, person.lname AS ln, person.phone AS ph, employee.ecode AS ec, employee.empid AS empid, branch.bname AS bn From person, employee, branch WHERE employee.bchid = branch.bchid and person.prsid = employee.prsid and employee.status = '".Disable."' ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["fn"] . "</td> <td>" . $rec["ln"] . "</td><td>" . $rec["ph"] . "</td><td>" . $rec["ec"] . "</td><td>" . $rec["bn"] . "</td>
                   <td> <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/EmployeeVIeW/ViewEmployeeProfile') . "&idr=" . base64_encode($rec["empid"]) . ">   
                       <img src=../VIeW/images/User-icon.png width = 16px hight = 16px border=0 data-toggle = tooltip data-placement = top title = View_Profile />
                        </a>
                 <a href=../VIeW/indexadmin.php?page=" . base64_encode('../VIeW/EmployeeVIeW/editemployeeProfile') . "&idr=" . base64_encode($rec["empid"]) . ">   
                       <img src=../VIeW/images/editer.png border=0 data-toggle = tooltip data-placement = top title = Edit_Profile />
                        </a>
                 
                 <a href='#' onclick=activate_employee('" . $rec["empid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0 data-toggle = tooltip data-placement = top title = Activate_Profile  /> 
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
