<?php
$bdd = new MicrosolDB();
$resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
$reqt = $resul->fetch();
?>        
  
<?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    
     /* Generate Person code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $person = "CON";
     $conacctnum = $person . $random_number . $random_string; // concatenate the generated codes 
     
    /* Code generation ends here  */

     $agp = new ConAccountManager($bdd->bdd);
//     print_r($agp);

    $conacct = new ConAccount(array(
       'conacctnum' => $conacctnum,
       'conacctbalance' => $_POST['ConBalance'],
       'conaccttype' => $_POST['nameConcaat'],
       'conacctstatus' => "Active",
      
    ));
    
   
//    print_r($conacct);
//    print "j";
    
    $gm = new GmConAcct(array(
        'gmid' => $reqt["gmid"],
    ));
    
    $tm = new TimeConAcct(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
//    
//    print_r($conacct);
//    print_r($gm);
//    print_r($tm);
    
    $agp->insert_conacct($conacct, $gm, $tm);
    
} else {
    
}
?>



      

<form action="#" method="POST">
    
    <div class="form_titre"> Add Control Account Here </div><br>
    <b><i>Account Name</i></b><br>
    <input type="text" value="" class="form-control" name="nameConcaat" placeholder="Enter Account Name" required > <br>
    <b><i>Account Minimum Balance</i></b><br>
    <input type="number" value="" class="form-control" name="ConBalance" placeholder="Enter Account Initial Balance" required > <br>
    <input type="submit" class="button button-3d-action button-pill" name="sub" />
</form>


