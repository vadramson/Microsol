<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<button class="button button-3d-royal button-rounded" > Edit Bonus here</button> <br><br><br>





<div class="content_form">

    <?php
    if (isset($_POST["store_btn"])) {
        $bdd = new MicrosolDB();
       
//    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
//    $reqt = $resul->fetch();
//    $empid = $reqt["empid"];
        
        $re = new BonusManager($bdd->bdd);
        $bonuse = new Bonus(array(
            'bnid' => htmlspecialchars($_POST["bnid"]),
            'bn_amt' => htmlspecialchars($_POST["amt"]),
//            'code' => htmlspecialchars($_POST["codeTown"]),
        ));
        
//        $gm = new Gm(array(
//            'gmid' => $reqt["empid"],
//        ));
        
//        $tm = new TimeBo(array(
//         'date' => date("Y-m-d h:i:sa"),
//        ));
        
        
//        print_r($bonuse);  
////        print_r($gm);
//        print_r($tm);
        $re->update_Bonuse($bonuse);
    }

    
    
    
    
    if (isset($_REQUEST["idr"])) {
        $bnid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM bonuses WHERE bnid = '" . $bnid . " ' ") or die(mysql_error());
        $row = $resul->fetch();
        
        
        ?>    
        <form action="#" method="post" > 
            <fieldset class="space_data"><legend> Bonus Information </legend>
                <table id="tab_new_etud">

                    <tr>
                        <td><label>ID : </label></td> <td><input tyype ="text" name ="bnid" class="form-control" value = "<?php echo $row["bnid"]; ?>" readonly ="readonly" required /></td>
                    </tr>

                    <tr>
                        <td><label>Employee Code  : </label> </td> <td><input tyype ="text" name ="ben" class="form-control" value = "<?php echo $row["bn_beneficiary"]; ?>" readonly ="readonly" required /></td>
                    </tr>
                    
                     <tr>
                        <td><label> Amount : </label> </td> <td><input tyype ="text" name ="amt" class="form-control" value = "<?php echo $row["bn_amt"]; ?>"  required /></td>
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
