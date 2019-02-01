<?php

$empr = $_SESSION["acctid"];

$bdd = new MicrosolDB();

     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $bonus = "Bon";
     $bonuscode = $bonus . $random_number . $random_string; // concatenate the generated codes 


    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
    $reqt = $resul->fetch();
    $empid = $reqt["empid"];

?>        
  
<?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
 
    $agp = new BonusManager($bdd->bdd);
//    print_r($agp);
    
    $bonus = new Bonus(array(
        
       'bn_code' => $bonuscode,
       'bn_reason' => $_POST['reason'],
       'bn_amt' => $_POST['amt'],
       'bn_beneficiary' => $_POST['ecode'],
       
        
    ));

//    print_r($town);
//    print "j";
    
    $gm = new GmBo(array(
        'gmid' => $reqt["empid"],
    ));
    
    $tm = new TimeBo(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    
//    print_r($bonus);
//    print_r($gm);
//    print_r($tm);
    
    $agp->insert_Bonus($bonus, $gm, $tm);
    
    
} else {
    
}
?>



      

<form action="#" method="POST">
    
    <div class="button button-pill button-primary"> <strong> Add employee Bonus </strong> </div><br><br>
    <b><i>Employee Code</i></b> <br>
    <input type="text" value="" class="form-control" name="ecode" placeholder="Enter Employee code" required > <br>
    <b><i>Amount</i></b><br>
    <input type="number" value="" class="form-control" name="amt" placeholder="Enter Amount" required > <br>
    <b><i>Reason</i></b><br>
    <input type="text" value="" class="form-control" name="reason" placeholder="Reason for Bonus" required > <br>
    <input type="submit" class="button button-3d-action button-pill" name="sub" />
</form>


