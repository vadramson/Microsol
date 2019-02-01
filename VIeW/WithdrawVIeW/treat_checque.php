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
    $ag = new WithdrawManager($bdd->bdd);
    
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
    $trxtype = 'Cheque';
    $trxdate = date("Y-m-d h:i:sa");     
            
            
    echo $empid  ;
    /* Generate Person code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $Deposit = "Chq";
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
    
    $curency  = new Withdraw(array(
        
       'cusid'   => $empid,
       'name'  => mysql_real_escape_string(htmlentities(trim( $_POST['name']))),
       'amount'     => mysql_real_escape_string(htmlentities(trim( $_POST['amt']))),
       'bknumber' => mysql_real_escape_string(htmlentities(trim( $_POST['actn']))),
       'trxcode' => $DepositExcode,
       'trxtype' => 'Withdrawal By Cheque',
       'trxdate'     => date("Y-m-d h:i:sa"),       
        
    ));
//    echo 'hjggg nnnn';
    print_r($curency); // To see the values 
//    echo 'hjggg nnnnllll';
    $ag->withdrawalcheque($curency);
    echo 'hjggg nnnnllllmmmm';
    
    } else {
         echo"<script language='javascript'>alert('Invalid Account Number or Account is Closed  !')</script>";
          }

     
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
        $html2pdf->Output('ChequeCash'.$_REQUEST['currencyExcode'].'.pdf', '../ModeLE/travel/');
        $_REQUEST['$test1'];
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

echo 'm,nm';


?>
