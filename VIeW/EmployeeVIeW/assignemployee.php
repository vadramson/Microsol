<?php

if(isset($_POST['sub'])){
        $empPhone  = $_POST['phone'];
        $bdd = new MicrosolDB();
        $resuls = $bdd->bdd->query("SELECT prsid FROM person WHERE phone = '" .$empPhone ." ' ") or die(mysql_error());
        $reqts = $resuls->fetch();
        $aray = $reqts["prsid"];
    
//        echo $aray;
  /* Generate Employee code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $person = "EMP";
     $employeecode = $person . $random_number . $random_string; // concatenating the generated codes 
     
    /* Code generation ends here  */
    
   	
    $agp = new EmployeeManager($bdd->bdd);
//    print_r($agp);
    
    if(!empty($aray ) ){
        
    $assign = new AssEmplo(array(      
      'dpt' => $_POST['dptm'],
       'bran' => $_POST['branch'],
       'person' => $aray,
       'emcode' => $employeecode, 
       'stat' => "Active",
       
        
        
    ));
 
    $tm = new TimeAg(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    
//    print_r($assign);
//    print_r($tm);
 
    $agp->assign_employee($assign, $tm);
    }  else {
         echo"<script language='javascript'>alert('Employee does not exists!')</script>";
          }
    
    
} else {
    
}
?>

<?php
$bdd = new MicrosolDB();
$resul = $bdd->bdd->query("SELECT * FROM branch") or die(mysql_error());
$resu = $bdd->bdd->query("SELECT * FROM department") or die(mysql_error());

?>  

      

<form action="#" method="POST">

    <div class="button button-pill button-primary"> <strong> Enter Employee's Personal Information Below </strong> </div><br><br><br>
    <table id="tab_new_etud"> 
    <tr>
    <td><b>Phone Number &nbsp;&nbsp; </b></td><td>
    <input type="tel" value="" class="form-control" name="phone" placeholder="Phone Number" required ><br> </td>
    </tr><tr>
    <td><b>Branch</b></td><td>
    <select name="branch" class="form-control" required >
        <?php while ($reqt = $resul->fetch()) { ?>
        
        <option value="<?php echo $reqt["bchid"];?>" selected > <?php echo $reqt["bname"];?> </option>
        <?php
        }
        ?>
    </select> <br> </td></tr>
    <tr>
    
    <td><b>Department</b></td><td>
    <select name="dptm" class="form-control" required >
        <?php while ($req = $resu->fetch()) { ?>
        
        <option value="<?php echo $req["dptid"];?>" selected > <?php echo $req["dname"];?> </option>
        <?php
        }
        ?>
    </select> <br> </td> </tr>
   
   </table>
    
    <table id="tab_option">
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="submit" class="button button-3d-action button-pill" name="sub" /></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="reset" class="button button-3d-royal button-rounded" name="su" /></td>
        </tr>
    </table>
</form>


