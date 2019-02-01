<?php
//session_start();
///* 
// * To change this license header, choose License Headers in Project Properties.
// * To change this template file, choose Tools | Templates
// * and open the template in the editor.
// */
//
//echo 'jkb';
//$empr = $_SESSION["acctid"];
////echo 'theis is the id '.$empr;
//  

//if(isset($_POST['sub'])){
//    $bdd = new MicrosolDB();
//    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
//    $reqt = $resul->fetch();
//    $empid = $reqt["empid"];
//   
//    $ag = new AssetsManager($bdd->bdd);
//    print_r($ag);
//    $asc = $_POST['asc'];
//    $asp = $_POST['asp'];
//    $na =   $_POST['name'];
//    $nic = $_POST['nic'];       
//    $phone =  $_POST['phone'];
//    
//    $resu = $bdd->bdd->query("SELECT asname FROM assets WHERE ascode = '". $asc ."' ") or die(mysql_error());
//    $req = $resu->fetch();
//    $asname = $req["asname"];
//    
//    
//    
//            
//            
//    echo $empid  ;
//    /* Generate Person code  */
//    
//     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
//     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
//     $currencys = "Sas";
//     $currencyExcode = $currencys . $random_number . $random_string; // concatenate the generated codes 
//     $_SESSION["transcode"] = $currencyExcode;
//     $_SESSION["na"] =  $na;
//     $_SESSION["date"] =  date("Y-m-d h:i:sa") ;
//     $_SESSION["asn"] = $asname;
//     $_SESSION["asc"] = $asc;
//     $_SESSION["asp"] = $asp;
//     $_SESSION["nic"] = $nic;
//     $_SESSION["phone"] = $phone;
//     $_SESSION["emp"] = $empid;
//     
//     echo $GLOBALS;
//     
//    /* Code generation ends here  */
//// echo 'hjg bbb';
//  
////    echo 'hjg bbb vvv';
//    
//    $assets  = new Asst(array(
//        
//       'empid'   => $empid,
//       'ascode'  => $_POST['asc'],
//       'dop'     => date("Y-m-d h:i:sa"),
//       'asname' => $asname,
//       'asamount' => $_POST['asp'],
//       'name' => $_POST['name'],
//       'nic'     => $_POST['nic'],       
//       'phone'   => $_POST['phone'],
//       'transcode' => $currencyExcode,
//             
//    ));
////    echo 'hjggg nnnn';
//    print_r($assets); // To see the values 
////    echo 'hjggg nnnnllll';
//    $ag->saleAssets($assets);
//    echo 'hjggg nnnnllllmmmm';
//    
//    
//    
//}
//?>

<form action="indexadmin.php?page=<?php echo base64_encode('AssetsVIeW/treat');?>" method="POST">

    <div class="button button-pill button-primary"> <strong> Sale Assets </strong> </div><br><br>
    <table id="tab_new_etud">   
    <tr>
    <td><b>Asset Code</b></td>&nbsp;&nbsp;&nbsp;
        <td> <input type="text" value="" class="form-control" name="asc" placeholder="Assets Code " size="110" required ><br> </td>
    </tr>
    <tr>
    <td><b>Assets price</b></td>&nbsp;&nbsp;&nbsp;
    <td> <input type="number" value="" class="form-control" name="asp" placeholder="Assets price in F CFA" size="110" required ><br> </td>
    </tr>
    <tr>
    <td><b>Buyer's Name</b></td><td>
    <input type="text" value="" class="form-control" name="name" placeholder="Buyer's Name" required > <br>
    </td>
    </tr>
    <tr>
    <td><b>Buyer's NIC</b> </td><td>&nbsp;
        <input type="number" class="form-control" name="nic" placeholder="Buyer's National ID Card Number" required ><br>    
    </td>
    </tr> 
    <tr>
    <td><b>Buyer's Phone</b></td><td>
    <input type="text"class="form-control" name="phone" placeholder=" Buyer's Phone Number" required ><br>    
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


