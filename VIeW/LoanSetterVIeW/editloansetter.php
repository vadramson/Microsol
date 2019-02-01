<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<button class="button button-3d-royal button-rounded" > Edit Loan Type </button> <br><br><br>





<div class="content_form">

    <?php
    if (isset($_POST["store_btn"])) {
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
        $reqt = $resul->fetch();
        
    $agp = new LsManager($bdd->bdd);
//    print_r($agp);
    $test = $_POST['intRate'];
//    $test1 = $_POST['fee'] ;
    if(is_numeric($test ))
                {
//                        $errors[] = "You Entered '$year' Which is not Numeric.<br />Enter a numeric value <br />";
		
    
    $lsseter = new LsSetter(array(
       'lsid' => $_POST['lsid'],
       'type' => $_POST['typeAccst'],
       'name' => $_POST['nameAccst'],
       'code' => $_POST['codeAccst'],
       'intrate' => $_POST['intRate'],
       'balance' => $_POST['minBalance'],
//       'transFee' => $_POST['fee'],
    ));
    $gm = new GmLs(array(
        'gmid' => $reqt["gmid"],
    ));
    
    $tm = new TimeLs(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    
//    print_r($lsseter);
//    print_r($gm);
//    print_r($tm);
    
    $agp->update_LsSetter($lsseter, $gm, $tm);
    } else {
         echo"<script language='javascript'>alert('Interest Rate Must be numeric!')</script>";
    }
    
} else {
    
}
    
    
    
    
    if (isset($_REQUEST["idr"])) {
        $lsid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM loan_setter WHERE lsid = '" . $lsid . " ' ") or die(mysql_error());
        $row = $resul->fetch();
        
        
        ?>    
        <form action="#" method="post" > 
            <fieldset class="space_data"><legend> Loan Type Info </legend>
                <table id="tab_new_etud">

                    <tr>
                        <td><label>ID : </label></td> <td><input tyype ="text" name ="lsid" class="form-control" value = "<?php echo $row["lsid"]; ?>" readonly ="readonly" required /></td>
                    </tr>

                    <tr>
                        <td><label> Loan Type : </label> </td> <td><input type ="text" name ="typeAccst" class="form-control" value = "<?php echo $row["lstype"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Loan Name : </label> </td> <td><input type ="text" name ="nameAccst" class="form-control" value = "<?php echo $row["lsname"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Loan Code : </label> </td> <td><input type ="text" name ="codeAccst" class="form-control" value = "<?php echo $row["lscode"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Interest Rate (%) : </label> </td> <td><input type ="text" name ="intRate" class="form-control" value = "<?php echo $row["lsintrt"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Minimum Amount (F CFA) : </label> </td> <td><input type ="number" name="minBalance" class="form-control" value = "<?php echo $row["lsminamt"]; ?>"  required /></td>
                    </tr>
                    
<!--                    <tr>
                        <td><label> Transaction Fee (%) : </label> </td> <td><input type ="text" name ="fee" class="form-control" value = "<?php echo $row["astfee"]; ?>"  required /></td>
                    </tr>-->
                                
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
