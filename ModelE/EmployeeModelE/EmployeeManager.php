<?php

class EmployeeManager {

    private $_db; // Instance de PDO

    public function __construct($db) {
        $this->setDb($db);
    }

    public function setDb($db) {
        $this->_db = $db;
    }
   
    public function insert_person($employee) {
//         echo "boy";
        $resul = $this->_db->query("SELECT * FROM person WHERE phone = '" .$employee->phone() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
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
    
    
      public function assign_employee($assign,$tm){
//       echo Swii ;
       
       $resul = $this->_db->query("SELECT * FROM employee WHERE ecode = '" .$assign->emcode() ." ' ") or die(mysql_error());
        $reqt = $resul->fetch();
//         echo "boy1";
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
    
    
        
        
    function listEmployee() {
       
//        $resul = $this->_db->query("SELECT town.*, count(bchid) AS nbbranch FROM town LEFT JOIN branch ON town.twnid=branch.twnid GROUP BY twnid ") or die(mysql_error());
          
        $resul = $this->_db->query("SELECT  person.fname AS fn, person.lname AS ln, person.phone AS ph, employee.ecode AS ec, employee.empid AS empid, branch.bname AS bn From person, employee, branch WHERE employee.bchid = branch.bchid and person.prsid = employee.prsid  ") or die(mysql_error());
        
        while ($rec = $resul->fetch()) {
            ?>
            <tr> 
            <?php

            echo" 
                 <td>" . $rec["fn"] . "</td> <td>" . $rec["ln"] . "</td><td>" . $rec["ph"] . "</td><td>" . $rec["ec"] . "</td><td>" . $rec["bn"] . "</td>
                   <td> 
                 <a href='#' onclick=activate_employee('" . $rec["empid"] . "')> <img src=../VIeW/images/cancel.png width = px border=0 data-toggle = tooltip data-placement = top title = Activate_Profile  /> 
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
