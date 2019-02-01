<style>
    
    
    .empPic{
        position: relative;
        float: right;
/*        margin-left: 750px;*/
    }
    
    .gmFlogo{
        position: relative;
        float: left;
/*        margin-left: 750px;*/
    }
    
    .empPic img{
	padding: 12px;
	background: #fff;
	box-shadow: 0 0 8px #999;
	border-bottom: 1px solid #ffffff;
         }
         
     .empPic img:hover{
	padding: 12px;
	background: #512da8;
	box-shadow: 0 0 8px #999;
	border-bottom: 1px solid #ffffff;
        cursor: pointer;
}

.picture{
    max-width: 550px
}
    
    
    
    
</style>


<?php

//if (isset($_REQUEST["idr"])) {
//        $empid = base64_decode($_REQUEST['idr']);
//         echo $empid;
//      $bdd = new MicrosolDB();
////        $viewProfile = $bdd->bdd->query("person.fname AS fn, person.lname AS ln, person.phone AS ph, person.email AS em, person.address AS ad, person.sex AS sex, person.nic AS nic, person.plcob AS pb, person.dob AS dob, person.pic AS pic, person.prsid AS pid,  employee.ecode AS ec, employee.empid AS empid, employee.doh AS doh, branch.bname AS bn, department.dptid AS did, department.dname AS dn, From person, employee, branch, department WHERE employee.bchid = branch.bchid and person.prsid = employee.prsid, and department.dptid = employee.dptid, and empid = '" . $empid . " ' ") or die(mysql_error());
//        $viewProfile = $this->_db->query("SELECT  person.fname AS fn, person.lname AS ln, person.phone AS ph, employee.ecode AS ec, employee.empid AS empid, branch.bname AS bn From person, employee, branch WHERE employee.bchid = branch.bchid and person.prsid = empid = '" . $empid . " '  ") or die(mysql_error());
//        $Vp = $viewProfile->fetch();
//        
//        
//        echo 'Good';  
//}
?>

<button class="button button-pill"> <strong> Employee's Profile </strong> <br><br> </button>
 <?php

if (isset($_REQUEST["idr"])) {
        $empid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resulEmp = $bdd->bdd->query("SELECT * FROM employee WHERE empid = '" . $empid . " ' ") or die(mysql_error());
        $emp = $resulEmp->fetch();
        $pid = $emp["prsid"];
        $bid = $emp["bchid"];
        $did = $emp["dptid"];
        
//        echo "Employee id is ".$empid."<br>" ;
//        echo "Person id is ".$pid."<br>" ;
//        echo "branch id is ".$bid."<br>" ;
//        echo "department id is ".$did."<br>" ;
        
        $resulPrs = $bdd->bdd->query("SELECT * FROM person WHERE person.prsid = '" . $pid . " ' ") or die(mysql_error());
        $prs = $resulPrs->fetch();
        
        $resulbrh = $bdd->bdd->query("SELECT * FROM branch WHERE branch.bchid = '" . $bid . " ' ") or die(mysql_error());
        $brh = $resulbrh->fetch();
        
        $resuldpt = $bdd->bdd->query("SELECT * FROM department WHERE department.dptid = '" . $did . " ' ") or die(mysql_error());
        $dpt = $resuldpt->fetch();
        
        $status = $emp["status"];
//        print_r($prs)."<br>";
//        print_r($brh)."<br>";
//        print_r($dpt)."<br>";
        
        ?>

<section class="picture">
<!--    <div class="gmFlogo">
        <img src="images/logo.png">
    </div>-->
    <div class="empPic">
        <?php
        if($prs["pic"] == true)
        {?>
          <img src ="images/employee_picture/<?php echo $prs["pic"];?>" height = '150' width = '120' title = '<?php echo $prs["fname"];?>'> <?php 
        }else {?>
          <img src ="images/employee_picture/avatar.png"><?php
        }
        ?>
        
    </div>
</section>


        
       <table class ="list_tab" id="list_tab">
          
            <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Full Name"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["fname"]." ".$prs["lname"] ;?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Date of Birth"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["dob"];?>" readonly  >
               <br></td>
           </tr>
          <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Place of Birth"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["plcob"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Phone numbe"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["phone"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Email"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["email"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Address"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["address"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="National ID Card Number"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["nic"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Sex"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["sex"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Pin Number"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["pcode"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Department"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $dpt["dname"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Branch"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $brh["bname"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Employee Code"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $emp["ecode"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Status"  readonly>
               </td>
                 <?php 
                   if($status == "Active"){
                    ?>   
                      <td>
                           <br> <input type="text" class="button glow button-primary" value =" <?php echo $emp["status"];?>" readonly  >
                      <br></td> 
                     <?php 
                   } else{
                       ?>
                      <td>
                           <br> <input type="text" class="button glow button-caution" value =" <?php echo $emp["status"];?>" readonly  >
                     <br></td>
                    <?php  
                   }
                 ?>
               
           </tr>
       </table>
        
        
        
 <?php       
}