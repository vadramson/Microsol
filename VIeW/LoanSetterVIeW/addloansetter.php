<?php
$bdd = new MicrosolDB();
$resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
$reqt = $resul->fetch();
?>        
  
<?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    
    
   
    $agp = new LsManager($bdd->bdd);
//    print_r($agp);
    $test = $_POST['intRate'];
//    $test1 = $_POST['fee'] ;
    if(is_numeric($test ))
                {
//                        $errors[] = "You Entered '$year' Which is not Numeric.<br />Enter a numeric value <br />";
		
    
    $lsset = new LsSetter(array(
       'type' => $_POST['typeAccst'],
       'name' => $_POST['nameAccst'],
       'code' => $_POST['codeAccst'],
       'intrate' => $_POST['intRate'],
       'balance' => $_POST['minBalance'],
//       'transFee' => $_POST['fee'],
    ));
    
//    print_r($town);
//    print "j";
    
    $gm = new GmLs(array(
        'gmid' => $reqt["gmid"],
    ));
    
    $tm = new TimeLs(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    
//    print_r($lsset);
//    print_r($gm);
//    print_r($tm);
    
    $agp->insert_LsSetter($lsset, $gm, $tm);
    } else {
         echo"<script language='javascript'>alert('Interest Rate Must be numeric!')</script>";
    }
    
} else {
    
}
?>



      

<form action="#" method="POST">
    
    <div class="form_titre"> Set Loan Types Here </div><br>
    <b><i>Loan Type</i></b> <br>
    <input type="text" value="" class="form-control" name="typeAccst" placeholder="Enter Loan Type" required > <br>
    <b><i>Loan Name</i></b><br>
    <input type="text" value="" class="form-control" name="nameAccst" placeholder="Enter Loan Name" required > <br>
    <b><i>Loan Code</i></b><br>
    <input type="text" value="" class="form-control" name="codeAccst" placeholder="Enter Loan's Code" required > <br>
    <b><i>Loan Interest Rate (%)</i></b><br>
    <input type="text" value="" class="form-control" name="intRate" placeholder="Enter Loan's Interest Rate" required > <br>
    <b><i>Loan Minimum Amount</i></b><br>
    <input type="number" value="" class="form-control" name="minBalance" placeholder="Enter Loan's Minimum Amount" required > <br>
<!--    <b><i>Account Transaction Fee (%)</i></b><br>
    <input type="text" value="" class="form-control" name="fee" placeholder="Enter Account's Transaction Fee" required > <br>-->
    <input type="submit" class="button button-3d-action button-pill" name="sub" />
</form>


