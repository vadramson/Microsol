<?php
$bdd = new MicrosolDB();
$resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
$reqt = $resul->fetch();
?>        
  
<?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    
    
   
    $agp = new AcctSetterManager($bdd->bdd);
//    print_r($agp);
    $test = $_POST['intRate'];
    $test1 = $_POST['fee'] ;
    if((is_numeric($test )) && (is_numeric($test1 )))
                {
//                        $errors[] = "You Entered '$year' Which is not Numeric.<br />Enter a numeric value <br />";
		
    
    $acctset = new AcctSetter(array(
       'type' => $_POST['typeAccst'],
       'name' => $_POST['nameAccst'],
       'code' => $_POST['codeAccst'],
       'intrate' => $_POST['intRate'],
       'balance' => $_POST['minBalance'],
       'transFee' => $_POST['fee'],
    ));
    
//    print_r($town);
//    print "j";
    
    $gm = new GmAs(array(
        'gmid' => $reqt["gmid"],
    ));
    
    $tm = new TimeAs(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    
//    print_r($acctset);
//    print_r($gm);
//    print_r($tm);
    
    $agp->insert_acctSetter($acctset, $gm, $tm);
    } else {
         echo"<script language='javascript'>alert('Interest Rate or Transaction fee Must be numeric!')</script>";
    }
    
} else {
    
}
?>



      

<form action="#" method="POST">
    
    <div class="form_titre"> Set Account Types Here </div><br>
    <b><i>Account Type</i></b> <br>
    <input type="text" value="" class="form-control" name="typeAccst" placeholder="Enter Account Type" required > <br>
    <b><i>Account Name</i></b><br>
    <input type="text" value="" class="form-control" name="nameAccst" placeholder="Enter Account Name" required > <br>
    <b><i>Account Code</i></b><br>
    <input type="text" value="" class="form-control" name="codeAccst" placeholder="Enter Account's Code" required > <br>
    <b><i>Accounts Interest Rate (%)</i></b><br>
    <input type="text" value="" class="form-control" name="intRate" placeholder="Enter Account's Interest Rate" required > <br>
    <b><i>Account Minimum Balance</i></b><br>
    <input type="number" value="" class="form-control" name="minBalance" placeholder="Enter Account's Minimum Balance" required > <br>
    <b><i>Account Transaction Fee (%)</i></b><br>
    <input type="text" value="" class="form-control" name="fee" placeholder="Enter Account's Transaction Fee" required > <br>
    <input type="submit" class="button button-3d-action button-pill" name="sub" />
</form>


