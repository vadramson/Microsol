<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<button class="button button-3d-royal button-rounded" > Edit Account Type </button> <br><br><br>





<div class="content_form">

    <?php
    if (isset($_POST["store_btn"])) {
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
        $reqt = $resul->fetch();
        
    $agp = new AcctSetterManager($bdd->bdd);
    print_r($agp);
    $test = $_POST['intRate'];
    $test1 = $_POST['fee'] ;
    if((is_numeric($test )) && (is_numeric($test1 )))
                {
//                        $errors[] = "You Entered '$year' Which is not Numeric.<br />Enter a numeric value <br />";
		
    
    $acctset = new AcctSetter(array(
       'astid' => $_POST['astid'],
       'type' => $_POST['typeAccst'],
       'name' => $_POST['nameAccst'],
       'code' => $_POST['codeAccst'],
       'intrate' => $_POST['intRate'],
       'balance' => $_POST['minBalance'],
       'transFee' => $_POST['fee'],
    ));
    $gm = new GmAs(array(
        'gmid' => $reqt["gmid"],
    ));
    
    $tm = new TimeAs(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    
    print_r($acctset);
    print_r($gm);
    print_r($tm);
    
    $agp->update_acctSetter($acctset, $gm, $tm);
    } else {
         echo"<script language='javascript'>alert('Interest Rate or Transaction fee Must be numeric!')</script>";
    }
    
} else {
    
}
    
    
    
    
    if (isset($_REQUEST["idr"])) {
        $astid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM account_setter WHERE astid = '" . $astid . " ' ") or die(mysql_error());
        $row = $resul->fetch();
        
        
        ?>    
        <form action="#" method="post" > 
            <fieldset class="space_data"><legend> Account Type Info </legend>
                <table id="tab_new_etud">

                    <tr>
                        <td><label>ID : </label></td> <td><input tyype ="text" name ="astid" class="form-control" value = "<?php echo $row["astid"]; ?>" readonly ="readonly" required /></td>
                    </tr>

                    <tr>
                        <td><label> Account Type : </label> </td> <td><input type ="text" name ="typeAccst" class="form-control" value = "<?php echo $row["asttype"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Account Name : </label> </td> <td><input type ="text" name ="nameAccst" class="form-control" value = "<?php echo $row["astname"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Account Code : </label> </td> <td><input type ="text" name ="codeAccst" class="form-control" value = "<?php echo $row["astcode"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Interest Rate (%) : </label> </td> <td><input type ="text" name ="intRate" class="form-control" value = "<?php echo $row["astintrt"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Minimum Balance (F CFA) : </label> </td> <td><input type ="number" name="minBalance" class="form-control" value = "<?php echo $row["astminamt"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Transaction Fee (%) : </label> </td> <td><input type ="text" name ="fee" class="form-control" value = "<?php echo $row["astfee"]; ?>"  required /></td>
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
