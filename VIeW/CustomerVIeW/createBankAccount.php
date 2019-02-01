<?php
$empr = $_SESSION["acctid"];

//if(isset($_POST['sub'])){
//     $bdd = new MicrosolDB(); 
//    $agp = new BaManager($bdd->bdd);
////    print_r($agp);
////    echo $cusid."g";
////    echo $cusPhone;
//    
//        $cusPhone  = $_POST['phone'];
//        $accountType  = $_POST['acctype'];
//       
//        $resuls = $bdd->bdd->query("SELECT prsid FROM person WHERE phone = '" .$cusPhone ." ' ") or die(mysql_error());
//        $reqts = $resuls->fetch();
//        $prsid = $reqts["prsid"];
//        
//        $cus = $bdd->bdd->query("SELECT cusid FROM customer WHERE prsid = '" .$prsid ." ' ") or die(mysql_error());
//        $cust = $cus->fetch();
//        $cusid = $cust["cusid"];
//        
//        $acctype = $bdd->bdd->query("SELECT * FROM account_setter WHERE astid = '" .$accountType ." ' ") or die(mysql_error());
//        $acctS = $acctype->fetch(); 
//        $intrate = $acctS["astintrt"];
//    
////        echo $intrate;
//  /* Generate Employee code  */
//    
//     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
//     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
//     $person = "BKA";
//     $bkacctNumbere = $person . $random_number . $random_string; // concatenating the generated codes 
//     
//    /* Code generation ends here  */
//    
//   	
//    
//    
//    if(!empty($cusid) ){
//        
//    $assign = new Bacct(array(      
//       'accttype' => $_POST['acctype'],
//       'acctbalance' => $_POST['deposit'],
//       'cusid' => $cusid,
//       'acctnum' => $bkacctNumbere, 
//       'acctintrate' => $intrate,
//       'cusphone' => $_POST['phone'],
//       'status' => "Active",
//
//    ));
////    echo 'kk';
//
//    $tm = new TimeBkacct(array(
//         'date' => date("Y-m-d h:i:sa"),
//    ));
//    
//    
////    print_r($assign);
////    print_r($tm);
// 
//    $agp->assignbka($assign, $tm) ;
//    }  else {
//         echo"<script language='javascript'>alert('Customer does not exists!')</script>";
//          }
//    
//    
//} else {
//    
//}
//?>

<?php
$bdd = new MicrosolDB();
$resu = $bdd->bdd->query("SELECT * FROM account_setter") or die(mysql_error());
?>  

      

<form action="indexadmin.php?page=<?php echo base64_encode('CustomerVIeW/treat');?>" method="POST">

    <div class="button button-pill button-primary"> <strong> Choose  Account Type And Make Initial Deposit </strong> </div><br><br><br>
    <table id="tab_new_etud"> 
    <tr>
    <td><b>Phone Number &nbsp;&nbsp; </b></td><td>
        <input type="tel" value="" class="form-control" name="phone" placeholder="Customer's Phone Number" size="30" required ><br> </td>
    </tr>
    <tr>
    <td><b>Deposit Amount &nbsp;&nbsp; </b></td><td>
        <input type="number" value="" class="form-control" name="deposit" placeholder="Enter Initial Deposit Amount" required ><br> </td>
    </tr>
    <tr>
    
    <td><b>Bank Account Type &nbsp;&nbsp;&nbsp;</b></td><td>
    <select name="acctype" class="form-control" required >
        <?php while ($req = $resu->fetch()) { ?>
        
        <option value="<?php echo $req["astid"];?>" selected > <?php echo $req["astname"];?> </option>
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


