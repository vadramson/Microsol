<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'jkb';
$empr = $_SESSION["acctid"];
//echo 'theis is the id '.$empr;
  

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB(); 
    $agp = new BaManager($bdd->bdd);
//    print_r($agp);
//    echo $cusid."g";
//    echo $cusPhone;
    
    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
    $reqt = $resul->fetch();
    $empid = $reqt["empid"];
    
    
        $cusPhone  = $_POST['phone'];
        $accountType  = $_POST['acctype'];
       
        $resuls = $bdd->bdd->query("SELECT * FROM person WHERE phone = '" .$cusPhone ." ' ") or die(mysql_error());
        $reqts = $resuls->fetch();
        $prsid = $reqts["prsid"];
        $fname = $reqts["fname"];
        $lname = $reqts["lname"];
        
        
        
        $cus = $bdd->bdd->query("SELECT cusid FROM customer WHERE prsid = '" .$prsid ." ' ") or die(mysql_error());
        $cust = $cus->fetch();
        $cusid = $cust["cusid"];
        
        
        
        $acctype = $bdd->bdd->query("SELECT * FROM account_setter WHERE astid = '" .$accountType ." ' ") or die(mysql_error());
        $acctS = $acctype->fetch(); 
        $intrate = $acctS["astintrt"];
        
        
    
//        echo $intrate;
  /* Generate Employee code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $person = "BKA";
     $bkacctNumbere = $person . $random_number . $random_string; // concatenating the generated codes 
     
     $random_number1 = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string1 = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $trans = "Acct";
     $receiptNum = $trans . $random_number1 . $random_string1;
     
    /* Code generation ends here  */

    $amount = mysql_real_escape_string(htmlentities(trim( $_POST['deposit'])));
    
     $_SESSION["transcode"] = $receiptNum;
     $_SESSION["fname"] = $fname;
     $_SESSION["lname"] = $lname;  
     $_SESSION["date"] =  date("Y-m-d h:i:sa") ;
     $_SESSION["amt"] = $amount;
     $_SESSION["num"] = $bkacctNumbere;  
     $_SESSION["emp"] = $cus;
     
//     echo $GLOBALS;
     
    /* Code generation ends here  */
    // echo 'hjg bbb';
            
if(!empty($cusid) ){
        
    $assign = new Bacct(array(      
       'accttype' => $_POST['acctype'],
       'acctbalance' => $_POST['deposit'],
       'cusid' => $cusid,
       'acctnum' => $bkacctNumbere, 
       'acctintrate' => $intrate,
       'cusphone' => $_POST['phone'],
       'status' => "Active",

    ));
//    echo 'kk';

    $tm = new TimeBkacct(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    
//    print_r($assign);
//    print_r($tm);
 
    $agp->assignbka($assign, $tm) ;
    
    }  else {
         echo"<script language='javascript'>alert('Customer does not exists!')</script>";
          }
     
}

// get the HTML
    ob_start(); //démarrage du pdf
  
    include('initial.php');
    $content = ob_get_clean(); //récupération du contenu de facture.pdf

    // convert in PDF
    require_once('../ModelE/pdf/html2pdf.class.php'); //inclusion de la class pdf
    try
    {
        //$width_in_mm = 108;
    //$height_in_mm = 59.2;
    //$html2pdf = new HTML2PDF('L', array($width_in_mm, $height_in_mm), 'fr', false, 'ISO-8859-15', 0);
        $html2pdf = new HTML2PDF('P', 'A5', 'fr');
//      $html2pdf->setModeDebug();
        #$html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        ob_end_clean();
        $html2pdf->Output('Deposit'.$_REQUEST['currencyExcode'].'.pdf', '../ModeLE/travel/');
        $_REQUEST['$test1'];
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

echo 'm,nm';


?>
