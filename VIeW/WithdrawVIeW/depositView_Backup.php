<style>
 
    #exchange td{
        font-size:14px;
	font-weight:bold;
	font-family:'Trebuchet MS';
	text-align:center;
        padding: 5px;       
    }
    
    
    #exchange th{
        font-size:14px;
	font-weight:bold;
	font-family:'Trebuchet MS';
	text-align:center;
        padding: 5px;       
    }
    
   #exchange {
        border-radius: 8px;          
	box-shadow: 0 4px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    } 
    
   
</style>

<?php

$empr = $_SESSION["acctid"];

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    $ag = new DepositeManager($bdd->bdd);
    
    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
    $reqt = $resul->fetch();
    $empid = $reqt["empid"];
    
    $test = mysql_real_escape_string(htmlentities(trim( $_POST['actn'])));
    
    $ack = $bdd->bdd->query("SELECT * FROM account WHERE Number = '". $test ."' AND status = 'Active' ") or die(mysql_error());
    $acctn = $ack->fetch();       
    
    $cus = $empid;
    $name  = mysql_real_escape_string(htmlentities(trim( $_POST['name'])));
    $amount = mysql_real_escape_string(htmlentities(trim( $_POST['amt'])));
    $bknumber = mysql_real_escape_string(htmlentities(trim( $_POST['actn'])));    
    $trxtype = 'Deposit';
    $trxdate = date("Y-m-d h:i:sa");     
            
            
    echo $empid  ;
    /* Generate Person code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $Deposit = "Dep";
     $DepositExcode = $Deposit . $random_number . $random_string; // concatenate the generated codes 
     $_SESSION["transcode"] = $DepositExcode;
     $_SESSION["na"] = $name;
     $_SESSION["date"] =  date("Y-m-d h:i:sa") ;
     $_SESSION["amt"] = $amount;
     $_SESSION["num"] = $bknumber;
     $_SESSION["type"] = $trxtype;    
     $_SESSION["emp"] = $cus;
     
     echo $GLOBALS;
     
    /* Code generation ends here  */
// echo 'hjg bbb';
            
         if($acctn != NULL )
                {
//    echo 'hjg bbb vvv';
    
    $curency  = new Deposite(array(
        
       'cusid'   => $empid,
       'name'  => mysql_real_escape_string(htmlentities(trim( $_POST['name']))),
       'amount'     => mysql_real_escape_string(htmlentities(trim( $_POST['amt']))),
       'bknumber' => mysql_real_escape_string(htmlentities(trim( $_POST['actn']))),
       'trxcode' => $DepositExcode,
       'trxtype' => 'Deposit',
       'trxdate'     => date("Y-m-d h:i:sa"),       
        
    ));
//    echo 'hjggg nnnn';
    print_r($curency); // To see the values 
//    echo 'hjggg nnnnllll';
    $ag->deposit($curency);
    echo 'hjggg nnnnllllmmmm';
    
    } else {
         echo"<script language='javascript'>alert('Invalid Account Number or Account is Closed  !')</script>";
          }

     
}
?>


<form action="#" method="POST">
    
    <div class="btn btn-group-justified button button-3d  button-pill"> <strong> Deposit Transactions </strong> </div><br><br>
    <table id="tab_new_etud">
   
    <tr>
    <td><b>Account Number</b></td>&nbsp;&nbsp;&nbsp;
        <td> <input type="text" value="" class="form-control" name="actn" placeholder="Account Number " size="110" required ><br> </td>
    </tr>
    <tr>
    <td>Amount<b></b></td>&nbsp;&nbsp;&nbsp;
    <td> <input type="number" value="" class="form-control" name="amt" placeholder="Deposit Amount in F CFA" size="110" required ><br> </td>
    </tr>
    <tr>
    <td><b>Depositor's Name</b></td><td>
    <input type="text" value="" class="form-control" name="name" placeholder="Depositor's Name" required > <br>
    </td>
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


