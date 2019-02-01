<style>
    #loader{
        display: none;
    }
    
    .feedback{
        font-family: lucida calligraphy;
		font-weight: bold;
		font-size: 20px;
		color: green;
    }
</style>
<?php

//$empr = $_SESSION["acctid"];
//
//if(isset($_POST['sub'])){
//    $bdd = new MicrosolDB();
//    $ag = new WithdrawManager($bdd->bdd);
//    
//    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
//    $reqt = $resul->fetch();
//    $empid = $reqt["empid"];
//    
//    $test = mysql_real_escape_string(htmlentities(trim( $_POST['actn'])));
//    
//    $ack = $bdd->bdd->query("SELECT * FROM account WHERE Number = '". $test ."' AND status = 'Active' ") or die(mysql_error());
//    $acctn = $ack->fetch();       
//    
//    $cus = $empid;
//    $name  = mysql_real_escape_string(htmlentities(trim( $_POST['name'])));
//    $amount = mysql_real_escape_string(htmlentities(trim( $_POST['amt'])));
//    $bknumber = mysql_real_escape_string(htmlentities(trim( $_POST['actn'])));    
//    $trxtype = 'Simple Withdrawal';
//    $trxdate = date("Y-m-d h:i:sa");     
//            
//            
//    echo $empid  ;
//    /* Generate Person code  */
//    
//     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
//     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
//     $Deposit = "Wit";
//     $DepositExcode = $Deposit . $random_number . $random_string; // concatenate the generated codes 
//     $_SESSION["transcode"] = $DepositExcode;
//     $_SESSION["na"] = $name;
//     $_SESSION["date"] =  date("Y-m-d h:i:sa") ;
//     $_SESSION["amt"] = $amount;
//     $_SESSION["num"] = $bknumber;
//     $_SESSION["type"] = $trxtype;    
//     $_SESSION["emp"] = $cus;
//     
//     echo $GLOBALS;
//     
//    /* Code generation ends here  */
//// echo 'hjg bbb';
//            
//         if($acctn != NULL )
//                {
////    echo 'hjg bbb vvv';
//    
//    $curency  = new Withdraw(array(
//        
//       'cusid'   => $empid,
//       'name'  => mysql_real_escape_string(htmlentities(trim( $_POST['name']))),
//       'amount'     => mysql_real_escape_string(htmlentities(trim( $_POST['amt']))),
//       'bknumber' => mysql_real_escape_string(htmlentities(trim( $_POST['actn']))),
//       'trxcode' => $DepositExcode,
//       'trxtype' => 'Simple Withdrawal',
//       'trxdate'     => date("Y-m-d h:i:sa"),       
//        
//    ));
////    echo 'hjggg nnnn';
//    print_r($curency); // To see the values 
////    echo 'hjggg nnnnllll';
//    $ag->withdrawal($curency);
//    echo 'hjggg nnnnllllmmmm';
//    
//    } else {
//         echo"<script language='javascript'>alert('Invalid Account Number or Account is Closed  !')</script>";
//          }
//
//     
//}
//?>


<form action="indexadmin.php?page=<?php echo base64_encode('WithdrawVIeW/treat');?>" method="POST">
    
    <div class="btn btn-group-justified button button-3d  button-pill"> <strong> Simple Withdrawal Transactions </strong> </div><br><br>
    <table id="tab_new_etud">
   
    <tr>
    <td><b>Account Number</b></td>&nbsp;&nbsp;&nbsp;
    <td> <input type="text"  value="" class="form-control" name="actn" placeholder="Account Number " size="110" required ><br> </td>     
    </tr>
    <tr>
    <td><b>Amount</b></td>&nbsp;&nbsp;&nbsp;
    <td> <input type="number" id="ammt" value="" class="form-control" name="amt" placeholder="Amount To be Withrawn" size="110" required ><br> </td> <td><div id="loader"> <img src="images/lightbox/loading.gif"> </div> &nbsp;&nbsp;&nbsp; <span class="feedback">   </span></td>    
    </tr>
    <tr>
    <td><b>Withdrawal's Name</b></td><td>
    <input type="text" value="" class="form-control" name="name" placeholder="Withdrawal's Name" required > <br>
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

<!--<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>-->
<script src="WithdrawVIeW/jquery.js"></script>
<script src="WithdrawVIeW/ajaxwit.js"></script>
