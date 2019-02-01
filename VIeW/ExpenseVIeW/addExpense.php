<?php

$empr = $_SESSION["acctid"];
//echo 'theis is the id '.$empr;

   
   

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
    $reqt = $resul->fetch();
    $empid = $reqt["empid"];
    
    $agp = new ExpenseManager($bdd->bdd);
//    print_r($agp);
   
    /* Generate Person code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $expense = "EXP";
     $expensecode = $expense . $random_number . $random_string; // concatenate the generated codes 
     
    /* Code generation ends here  */

    $travel = new Leaves(array(
       'empid' => $empid,
       'trvcode' => $expensecode,
       'trvname' => $_POST['reason'],
       'trempcode' => $_POST['ecode'],
       'trvsdate' => $_POST['amt'],
       'trvedate' => date("d-m-y-h-i-g-sa"),
       'approval' => "Pending",       
       
       
         
        
    ));
    
//    print_r($travel); // To see the values 
    $agp->insert_Expenses($travel);
    
 
} else {
    
}
?>

<form action="#" method="POST">
    
    <div class="button button-pill button-primary"> <strong> Fill The Requisition Form</strong> </div><br><br>
    <table id="tab_new_etud">
    <tr>
    <td><b> Employee Code &nbsp;&nbsp; </b></td> &nbsp;&nbsp;&nbsp;&nbsp;
    <td><input type="text" value="" class="form-control" name="ecode" placeholder="Employee Code" required ><br> </td>
    </tr>
    <tr>
    <td><b>Expense Name</b></td>&nbsp;&nbsp;&nbsp;
        <td> <input type="text" value="" class="form-control" name="reason" placeholder="Expense Name" size="110" required ><br> </td>
    </tr>
    <tr>
    <td><b>Amount</b></td>&nbsp;&nbsp;&nbsp;
    <td> <input type="number" value="" class="form-control" name="amt" placeholder="Amount in F CFA" size="110" required ><br> </td>
    </tr>
   </table>
    
    <table id="tab_option">
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="submit" class="button button-3d-action button-pill" name="sub" /></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="reset" class="button button-3d-royal button-rounded" name="su" /></td>
        </tr>
    </table>
</form>


