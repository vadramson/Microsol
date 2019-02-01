<?php

if(isset($_POST['sub'])){
        $cusPhone  = $_POST['Cphone'];
        $bdd = new MicrosolDB();
        $resuls = $bdd->bdd->query("SELECT prsid FROM person WHERE phone = '" .$cusPhone ." ' ") or die(mysql_error());
        $reqts = $resuls->fetch();
        $aray = $reqts["prsid"];
        $resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
        $reqt = $resul->fetch();

  /* Generate Customer code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $person = "CUS";
     $customercode = $person . $random_number . $random_string; // concatenating the generated codes 
     
    /* Code generation ends here  */
    
   	
    $agp = new CustomerManager($bdd->bdd);
//    print_r($agp);
//    echo 'tt'. $aray;
    
    if(!empty($aray) ){
//        echo 'kk';
        
    $assign = new CreateBankAccount(array(   
        
       'rel' => $_POST['rel'],
       'cphone' => $_POST['Cphone'],
       'proff' => $_POST['proff'],
       'nkname' => $_POST['nkname'],
       'nkphone' => $_POST['nkphone'],
       'bran' => $_POST['branch'],
       'person' => $aray,
       'cuscode' => $customercode,
       'txcode' => "1",
       'stat' => "Active",
        
    ));
    
    
     $gm = new GmCust(array(
        'gmid' => $reqt["gmid"],
    ));
    
    
    $tm = new TimeBkacct(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
//    echo 'ckk';
    
//    print_r($assign);
//    print_r($tm);
//    print_r($gm);
 
    $agp->create_BkAccount($assign,$tm,$gm);
    }  else {
         echo"<script language='javascript'>alert('Customer does not exists!')</script>";
          }
    
    
} else {
    
}
?>

<?php
$bdd = new MicrosolDB();
$resul = $bdd->bdd->query("SELECT * FROM branch") or die(mysql_error());
$resu = $bdd->bdd->query("SELECT * FROM department") or die(mysql_error());

?>  

      

<form action="#" method="POST">

    <div class="button button-pill button-primary"> <strong> Enter Bank Account Detail Below </strong> </div><br><br><br>
    <table id="tab_new_etud"> 
    <tr>
    <td><b>Customer Phone Number &nbsp;&nbsp; </b></td><td>
        <input type="tel" value="" class="form-control" name="Cphone" placeholder="Phone Number" required size="50"><br> </td>
    </tr>
    <tr>
    <td><b>Profession &nbsp;&nbsp; </b></td><td>
        <input type="text" value="" class="form-control" name="proff" placeholder="Profession" required ><br> </td>
    </tr>
    <tr>
    <td><b>Next of kin Name &nbsp;&nbsp; </b></td><td>
    <input type="text" value="" class="form-control" name="nkname" placeholder="Next of Kin Name" required ><br> </td>
    </tr>
    <tr>
    <td><b>Next of kin Phone Number &nbsp;&nbsp; </b></td><td>
        <input type="tel" value="" class="form-control" name="nkphone" placeholder="Next of kin Phone Number" required ><br> </td>
    </tr>
    <tr>
    <td><b>Relationship</b></td><td>
    <select name="rel" class="form-control" required >
        <option value="Family" selected > Family </option>
        <option value="Friend" selected > Friend </option>
        <option value="Business Associate" selected > Business Associate </option>
    </select> <br> </td>
    </tr>
    <tr>
    <td><b>Branch</b></td><td>
    <select name="branch" class="form-control" required >
        <?php while ($reqt = $resul->fetch()) { ?>
        
        <option value="<?php echo $reqt["bchid"];?>" selected > <?php echo $reqt["bname"];?> </option>
        <?php
        }
        ?>
    </select> <br> </td></tr>
    
   </table>
    
    <table id="tab_option">
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="submit" class="button button-3d-action button-pill" name="sub" /></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="reset" class="button button-3d-royal button-rounded" name="su" /></td>
        </tr>
    </table>
</form>


