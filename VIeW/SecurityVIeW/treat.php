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
//  

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
    $reqt = $resul->fetch();
    $empid = $reqt["empid"];
//   
    $ag = new SecurityManager($bdd->bdd);
    print_r($ag);
    $asc = $_POST['asc'];
    $asp = $_POST['asp'];
    $na =   $_POST['name'];
    $nic = $_POST['nic'];       
    $phone =  $_POST['phone'];
//    
    $resu = $bdd->bdd->query("SELECT asname FROM securities WHERE secode = '". $asc ."' ") or die(mysql_error());
    $req = $resu->fetch();
    $asname = $req["asname"];
//    
//    
//    
//            
//            
//    echo $empid  ;
//    /* Generate Person code  */
//    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $currencys = "Sas";
     $currencyExcode = $currencys . $random_number . $random_string; // concatenate the generated codes 
     $_SESSION["transcode"] = $currencyExcode;
     $_SESSION["na"] =  $na;
     $_SESSION["date"] =  date("Y-m-d h:i:sa") ;
     $_SESSION["asn"] = $asname;
     $_SESSION["asc"] = $asc;
     $_SESSION["asp"] = $asp;
     $_SESSION["nic"] = $nic;
     $_SESSION["phone"] = $phone;
     $_SESSION["emp"] = $empid;
//     
     echo $GLOBALS;
//     
//    /* Code generation ends here  */
//// echo 'hjg bbb';
//  
    echo 'hjg bbb vvv';
//    
    $assets  = new Secct(array(
//        
       'empid'   => $empid,
       'ascode'  => $_POST['asc'],
       'dop'     => date("Y-m-d h:i:sa"),
       'asname' => $asname,
       'asamount' => $_POST['asp'],
       'name' => $_POST['name'],
       'nic'     => $_POST['nic'],       
       'phone'   => $_POST['phone'],
       'transcode' => $currencyExcode,
//             
    ));
//    echo 'hjggg nnnn';
    print_r($assets); // To see the values 
//    echo 'hjggg nnnnllll';
    $ag->saleSecurity($assets);
    echo 'hjggg nnnnllllmmmm';
//    
//    
//    
} 




// get the HTML
    ob_start(); //démarrage du pdf
  
    include('printSecuritySale_pdf.php');
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
        $html2pdf->Output('Security'.$_REQUEST['currencyExcode'].'.pdf', '../ModeLE/travel/');
        $_REQUEST['$test1'];
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

echo 'm,nm';


?>
