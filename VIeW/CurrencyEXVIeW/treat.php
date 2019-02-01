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
    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
    $reqt = $resul->fetch();
    $empid = $reqt["empid"];
    
    $test = $_POST['fc'];;
    $test1 = $_POST['lc'];
    
    $ag = new CurrencyManager($bdd->bdd);
    print_r($ag);
    $fc = $_POST['fc'];
    $lc = $_POST['lc'];
    $na =   $_POST['name'];
    $cur = $_POST['curency'];
    $nic = $_POST['nic'];
    $phone =  $_POST['phone'];
            
            
    echo $empid  ;
    /* Generate Person code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $currencys = "CUx";
     $currencyExcode = $currencys . $random_number . $random_string; // concatenate the generated codes 
     $_SESSION["transcode"] = $currencyExcode;
     $_SESSION["na"] =  $na;
     $_SESSION["date"] =  date("Y-m-d h:i:sa") ;
     $_SESSION["fc"] = $fc;
     $_SESSION["lc"] = $lc;
     $_SESSION["cur"] = $cur;
     $_SESSION["nic"] = $nic;
     $_SESSION["phone"] = $phone;
     $_SESSION["emp"] = $empid;
     
     echo $GLOBALS;
     
    /* Code generation ends here  */
// echo 'hjg bbb';
            
         if(is_numeric($test) && is_numeric($test1) )
                {
//    echo 'hjg bbb vvv';
    
    $curency  = new AssE(array(
        
       'empid'   => $empid,
       'cycode'  => mysql_real_escape_string(htmlentities(trim( $_POST['curency']))),
       'dop'     => date("Y-m-d h:i:sa"),
       'ramount' => mysql_real_escape_string(htmlentities(trim( $_POST['fc']))),
       'gamount' => mysql_real_escape_string(htmlentities(trim( $_POST['lc']))),
       'cusname' => mysql_real_escape_string(htmlentities(trim( $_POST['name']))),
       'nic'     => mysql_real_escape_string(htmlentities(trim( $_POST['nic']))),
       'exchcode' => $currencyExcode,
       'phone'   => mysql_real_escape_string(htmlentities(trim( $_POST['phone']))),
         
        
        
    ));
//    echo 'hjggg nnnn';
    print_r($curency); // To see the values 
//    echo 'hjggg nnnnllll';
    $ag->exchange($curency);
    echo 'hjggg nnnnllllmmmm';
    
    } else {
         echo"<script language='javascript'>alert('Enter A Numeric Value !')</script>";
          }

     
} else {
    
}



// get the HTML
    ob_start(); //démarrage du pdf
  
    include('printExchange.php');
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
        $html2pdf->Output('exchange'.$_REQUEST['currencyExcode'].'.pdf', '../ModeLE/travel/');
        $_REQUEST['$test1'];
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

echo 'm,nm';


?>
