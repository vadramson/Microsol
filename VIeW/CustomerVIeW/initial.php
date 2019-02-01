<?php
//session_start();
//    include('ModelE/db.php');
    
//    $cu =   mysql_real_escape_string(htmlentities(trim( $_POST['curency'])));
//    $dat =   date("Y-m-d h:i:sa");
//    $fc =   mysql_real_escape_string(htmlentities(trim( $_POST['fc'])));
//    $lc =   mysql_real_escape_string(htmlentities(trim( $_POST['lc'])));
//    $name =   mysql_real_escape_string(htmlentities(trim( $_POST['name'])));
//    $nic =   mysql_real_escape_string(htmlentities(trim( $_POST['nic'])));
//     $currencyExcode;
//    $phone =   mysql_real_escape_string(htmlentities(trim( $_POST['phone'])));

//    $boy =  $_SESSION["transcode"];
//    $nn = $_SESSION["na"];     
//    $date =  $_SESSION["date"];
//    $amt =  $_SESSION["amt"];
//    $acctnum = $_SESSION["num"];
//    $type = $_SESSION["type"];
//    $idcn = $_SESSION["nic"];
//    $phn = $_SESSION["phone"];
//    $em =  $_SESSION["emp"];
    
//    echo $GLOBALS;
    
    $boy = $_SESSION["transcode"];
    $nn = $_SESSION["fname"];
    $nn1 = $_SESSION["lname"];  
    $date = $_SESSION["date"];
    $amt = $_SESSION["amt"];
    $acctnum = $_SESSION["num"];  
    $em = $_SESSION["emp"];
    
    echo 'jjj'. $em; echo $GLOBALS;

    $bdd = new MicrosolDB();
    $current = $bdd->bdd->query("SELECT type FROM account WHERE Number = '".$acctnum."' ") or die(mysql_error());
    $reqt = $current->fetch();
    $typey = $reqt["type"];
    
    
    $acctType = $bdd->bdd->query("SELECT astname FROM account_setter WHERE astid= '".$typey."' ") or die(mysql_error());
    $reqtact = $acctType->fetch();
    $aname = $reqtact["astname"];
    

    $broker = $bdd->bdd->query("SELECT prsid, bchid FROM employee WHERE empid = '".$em."' ") or die(mysql_error());
    $brok = $broker->fetch();
    $brk = $brok["prsid"];
    $bid = $brok["bchid"];
    
    
    $person = $bdd->bdd->query("SELECT fname, lname, bname FROM person, branch WHERE prsid = '".$brk."' AND bchid = '".$bid."' ") or die(mysql_error());
    $pers = $person->fetch();
    $fn = $pers["fname"];
    $ln = $pers["lname"];
    $bn = $pers["bname"];
?>





    <page backtop=".5mm" backbottom=".5mm" backleft=".5mm" backright="5mm" >
            
        <table style="width: 100%;border: none; background-color: peachpuff; ">
            <tr style="height: 5mm" >
                <td style="width: 40%;  font-size: 6pt; font-weight: bold;">
                    <h5 style="text-align: center; "><?php echo "GERMANIA FANION MICROFINANCE"; ?></h5>
                    <h6> <span style="line-height: 0.5pt; margin-left: 5mm;">   <?php echo "TATSA Business Center "; ?><?php echo strtoupper("Bamenda"); ?></span><br>
                      <span style="line-height: 0.5pt; margin-left: 2mm;">  P.O BOX <?php echo "1635 Bamenda"?>
                          TEL: <?php echo "678583312"; ?></span></h6>
                </td>
                <td style="width: 25%; text-align: center; font-size: 6.5pt; font-weight: bold;">
                    <img src="../VIeW/images/logo.png" alt="logo" style="height: 7mm; border-radius: 6mm;"><br>
                    <p> Save Regularly Borrow Wisely and Repay Promtlly.</p>
                </td>
                <td style="width: 35%; text-align: center; font-size: 7pt; font-weight: bold;">
                    <h5>Time : <span style="text-decoration: none;"> <?php echo $date ?> </span> </h5>                    
                    <h5><?php echo $type; ?> <span style="text-decoration: underline;"> <?php echo $boy ?> </span></h5>
                </td><br> 
            </tr></table>
<!--        </table><br>
        
        &nbsp;&nbsp;&nbsp; _____________________________________________________________-->
             <div style="width: 100%; background-color: peachpuff; ">
                <div style="width: 67%; border: 2px; text-align: left; padding-top: -33m;">
                    <p> <strong> <span style=" margin-left: 2mm;"> Depositor's Name :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $nn." ".$nn1 ?></span> </p>                     
                    <p> <strong> <span style=" margin-left: 1mm;"> Account Number :</span> </strong> <span style="font-family: Arial; font-size: 10pt;;"> <?php echo $acctnum ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> Amount Deposited :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $amt." F CFA" ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> Account Type:</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $aname?></span> </p>                  
                    <!--<p> <strong> <span style=" margin-left: 1mm;"> Employee ____________ :</span> </strong> <span style="font-family: Arial; font-size: 10pt; font-weight: bold;"> HRM _______________ Manager ____________</span> </p>--> 
                </div><br><br><p> <strong> <span style=" background-color: peachpuff; margin-left: 1mm;"> Broker ____________ &nbsp; </span> </strong> <span style="font-family: Arial; font-size: 8pt; font-weight: bold;"> Customer _______________ &nbsp;&nbsp;Manager ______________</span> </p>  
                <div style="margin-left: 90mm; margin-top: -55mm; text-align: center; float: right; height: 40mm; background-color: peachpuff;">
                    <br>  <img src="../VIeW/images/logo.png" alt="logo" ><br><br>
                    <strong> Broker </strong> <br>  <?php echo $fn.' '. $ln;?><br><br>
                    <strong> Branch </strong> <br> <?php echo $bn;?>
                           <!--<img src="../VIeW/images/logo.png" alt="logo" >-->
                </div>
             </div>
            
<br><br>&nbsp;&nbsp;&nbsp; _____________________________________________________________<br><br>

        <table style="width: 100%;border: none; overflow: hidden;">
            <tr style="height: 5mm" >
                <td style="width: 40%;  font-size: 6pt; font-weight: bold;">
                    <h5 style="text-align: center; "><?php echo "GERMANIA FANION MICROFINANCE"; ?></h5>
                    <h6> <span style="line-height: 0.5pt; margin-left: 5mm;">   <?php echo "TATSA Business Center "; ?><?php echo strtoupper("Bamenda"); ?></span><br>
                      <span style="line-height: 0.5pt; margin-left: 2mm;">  P.O BOX <?php echo "1635 Bamenda"?>
                          TEL: <?php echo "678583312"; ?></span></h6>
                </td>
                <td style="width: 30%; text-align: center; font-size: 6.5pt; font-weight: bold;">
                    <img src="../VIeW/images/logo.png" alt="logo" style="height: 7mm; border-radius: 6mm;"><br>
                    <p> Save Regularly Borrow Wisely and Repay Promtlly.</p>
                </td>
                <td style="width: 35%; text-align: center; font-size: 7pt; font-weight: bold;">
                    <h5>Time : <span style="text-decoration: none;"> <?php echo $date ?> </span> </h5>
                    <h5><?php echo $type; ?><span style="text-decoration: underline;"> <?php echo $boy ?> </span> </h5>
                </td>
            </tr></table>
             <div style="margin-left: 90mm; margin-bottom: -65mm; text-align: center; float: right; height: 40mm; background-color: peachpuff;">
                           <br>  <img src="../VIeW/images/logo.png" alt="logo" ><br><br>
                           <strong> Broker </strong> <br>  <?php echo $fn.' '. $ln;?><br><br>
                           <strong> Branch </strong> <br> <?php echo $bn;?>
                </div>
            <div style="width: 100%;  ">
<!--                <div style="margin-left: 80mm; margin-top: 30mm; text-align: left; float: right; height: 40mm; background-color: yellowgreen;">
                            ;,;';'
                </div>-->
                <div style="width: 67%; background-color: peachpuff; text-align: left;  margin-top: 2mm; border: 2px;">
                    <p> <strong> <span style=" margin-left: 2mm;"> Depositor's Name :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $nn." ".$nn1; ?></span> </p>                     
                    <p> <strong> <span style=" margin-left: 1mm;"> Account Number :</span> </strong> <span style="font-family: Arial; font-size: 10pt;;"> <?php echo $acctnum ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> Amount Deposited :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $amt." F CFA" ?></span> </p> 
                    <p> <strong> <span style=" margin-left: 1mm;"> Account Type:</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $aname?></span> </p>                  
                    <!--<p> <strong> <span style=" margin-left: 1mm;"> Broker :</span> </strong> <span style="font-family: Arial; font-size: 10pt;"> <?php echo $rec["trvedate"] ?></span> </p>--> 
                    <!--<p> <strong> <span style=" margin-left: 1mm;"> Employee ____________ :</span> </strong> <span style="font-family: Arial; font-size: 10pt; font-weight: bold;"> HRM _______________ Manager ____________</span> </p>--> 
                </div><br><br><p> <strong> <span style=" margin-left: 1mm; background-color: peachpuff; "> Broker ____________ &nbsp; </span> </strong> <span style="font-family: Arial; font-size: 8pt; font-weight: bold;"> Customer _______________ &nbsp;&nbsp;Manager ______________</span> </p>  
                
             </div>
        
        </page>


