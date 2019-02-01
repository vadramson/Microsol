<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<button class="button button-3d-royal button-rounded" > Edit Control Account </button> <br><br><br>





<div class="content_form">

    <?php
    if (isset($_POST["store_btn"])) {
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
        $reqt = $resul->fetch();
   
        $agp = new ConAccountManager($bdd->bdd);
//     print_r($agp);

    $conacct = new ConAccount(array(
       'conacctid' => $_POST['cactid'],
       'conaccttype' => $_POST['nameConcaat'],
      
      
    ));
    
   
//    print_r($conacct);
//    print "j";
    
    $gm = new GmConAcct(array(
        'gmid' => $reqt["gmid"],
    ));
    
    $tm = new TimeConAcct(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    
//    print_r($conacct);
//    print_r($gm);
//    print_r($tm);
    
    $agp->Update_conacct($conacct, $gm, $tm);
   
} else {
    
}
    
    
    
    
    if (isset($_REQUEST["idr"])) {
        $cactid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM con_account WHERE cactid = '" . $cactid . " ' ") or die(mysql_error());
        $row = $resul->fetch();
        
        
        ?>    
        <form action="#" method="post" > 
            <fieldset class="space_data"><legend> Control Account Info </legend>
                <table id="tab_new_etud">

                    <tr>
                        <td><label>ID : </label></td> <td><input tyype ="text" name ="cactid" class="form-control" value = "<?php echo $row["cactid"]; ?>" readonly ="readonly" size="40" required /><br></td>
                    </tr>

                    <tr>
                        <td><label> Account Name : &nbsp; </label> </td> <td><input type ="text" name ="nameConcaat" class="form-control" value = "<?php echo $row["cacttype"]; ?>"  required /></td>
                    </tr>
                         
                </table>
               
            </fieldset> 

            <fieldset class="space_data"><legend> Options </legend>
                <table id="tab_option">
                    <tr>
                        <td> <input type="submit" name="store_btn" value="Modify" class="button button-3d-action button-pill" /> &nbsp;&nbsp;&nbsp;</td> 
                        <td> <a href="indexadmin.php"> <input type="button" name="quit" value="Quit" class="button button-3d-caution" /> </td>
                    </tr>
                </table>
            </fieldset>

        </form>
          
    <?php
} else {
    ?>
    <?php
    // consul_region();
}
?>
</div>
