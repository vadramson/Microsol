<?php

$empr = $_SESSION["acctid"];

$bdd = new MicrosolDB();

     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $pay = "PayR";
     $paycode = $pay. $random_number . $random_string; // concatenate the generated codes 


    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
    $reqt = $resul->fetch();
    $empid = $reqt["empid"];

?>        
  
<?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
 
    $agp = new PayrollManager($bdd->bdd);
//    print_r($agp);
    $ecode = $_POST['ecode'];
    $resue = $bdd->bdd->query("SELECT * FROM employee WHERE ecode = '". $ecode ."' AND status = 'Active' ") or die(mysql_error());
    $reqte = $resue->fetch();
    $bchid = $reqte["bchid"];
    $dptid = $reqte["dptid"];
    $prsid = $reqte["prsid"];
    $empid = $reqte["empid"];
    
    $resub = $bdd->bdd->query("SELECT bn_amt AS bonus, ductamt AS deduction FROM bonuses, deductions WHERE ductbeneficiary = '". $ecode ."' AND bn_beneficiary = '". $ecode ."' ") or die(mysql_error());
    $bode = $resub->fetch();
    $bon = $bode["bonus"];
    $duct = $bode["deduction"];    
    
    $resulSal = $bdd->bdd->query("SELECT stdsalary,dname FROM department WHERE dptid = '". $dptid ."' ") or die(mysql_error());
    $sala = $resulSal->fetch();
    $stdsal = $sala["stdsalary"];
    $dname = $sala["dname"];
    
    $net = ($stdsal + $bon) - $duct;
//    echo $net . "boy God Is in Control";
    $salary = "nn";
    
    if($reqte != NULL){
    $payroll = new Payroll(array(
       
       
       'prlcode' => $paycode,
       'empdpt' => $dname,
       'deductions' => $duct,
       'bonuses' => $bon,
       'empcode' => $_POST['ecode'],
       'empstdsalary' => $stdsal,
       'cnps' => '1',
       'netsalary' => $net = ($stdsal + $bon) - $duct,
        
    ));
    
    

//    print_r($town);
//    print "j";
    
    $gm = new GmDe(array(
        'gmid' => $reqt["empid"],
    ));
    
    $tm = new TimeDe(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
//    
//    print_r($payroll);
//    print_r($gm);
//    print_r($tm);
    
    $agp->insert_payroll($payroll, $gm, $tm);
    }else{
        echo"<script language='javascript'>alert('Employee is Not Active !')</script>";
    } 
    
} else {
    
}
?>



      

<form action="#" method="POST">
    
    <div class="button button-pill button-primary"> <strong> Calculate Employees Payroll </strong> </div><br><br>
    <b><i>Employee Code</i></b> <br>
    <input type="text" value="" class="form-control" name="ecode" placeholder="Enter Employee code" required > <br>
    <input type="submit" class="button button-3d-action button-pill" name="sub" />
</form>


