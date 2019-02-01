<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<button class="button button-3d-royal button-rounded" > Edit Deductions here</button> <br><br><br>





<div class="content_form">

    <?php
    if (isset($_POST["store_btn"])) {
        $bdd = new MicrosolDB();
       
//    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
//    $reqt = $resul->fetch();
//    $empid = $reqt["empid"];
        
        $re = new DeductionManager($bdd->bdd);
        $deduction = new Deduction(array(
            'ductid' => htmlspecialchars($_POST["ductid"]),
            'ductamt' => htmlspecialchars($_POST["amt"]),
//            'code' => htmlspecialchars($_POST["codeTown"]),
        ));
        
//        $gm = new Gm(array(
//            'gmid' => $reqt["empid"],
//        ));
        
//        $tm = new TimeBo(array(
//         'date' => date("Y-m-d h:i:sa"),
//        ));
        
        
//        print_r($deduction);  
////        print_r($gm);
//        print_r($tm);
        $re->update_Deduction($deduction);
    }

    
    
    
    
    if (isset($_REQUEST["idr"])) {
        $ductid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM deductions WHERE ductid = '" . $ductid . " ' ") or die(mysql_error());
        $row = $resul->fetch();
        
        
        ?>    
        <form action="#" method="post" > 
            <fieldset class="space_data"><legend> Bonus Information </legend>
                <table id="tab_new_etud">

                    <tr>
                        <td><label>ID : </label></td> <td><input tyype ="text" name ="ductid" class="form-control" value = "<?php echo $row["ductid"]; ?>" readonly ="readonly" required /></td>
                    </tr>

                    <tr>
                        <td><label>Employee Code  : </label> </td> <td><input tyype ="text" name ="ben" class="form-control" value = "<?php echo $row["ductcode"]; ?>" readonly ="readonly" required /></td>
                    </tr>
                    
                     <tr>
                        <td><label> Amount : </label> </td> <td><input tyype ="text" name ="amt" class="form-control" value = "<?php echo $row["ductamt"]; ?>"  required /></td>
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
