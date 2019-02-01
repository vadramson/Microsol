<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<button class="button button-3d-royal button-rounded" > Edit Currency</button> <br><br><br>





<div class="content_form">

    <?php
    if (isset($_POST["store_btn"])) {
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
        $reqt = $resul->fetch();
        
        $re = new CySetterManager($bdd->bdd);
        $town = new CySetter(array(
            'csid' => htmlspecialchars($_POST["csid"]),
            'csname' => htmlspecialchars($_POST["nameTown"]),
            'cscode' => htmlspecialchars($_POST["codeTown"]),
        ));
        
        $gm = new Gmcy(array(
            'gmid' => $reqt["gmid"],
        ));
        
        $tm = new Timecy(array(
         'date' => date("Y-m-d h:i:sa"),
        ));
        
        
//        print_r($town);  
//        print_r($gm);
//        print_r($tm);
        $re->update_Currency($town, $gm, $tm);
    }

    
    
    
    
    if (isset($_REQUEST["idr"])) {
        $csid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM cy_seter WHERE csid = '" . $csid . " ' ") or die(mysql_error());
        $row = $resul->fetch();
        
        
        ?>    
        <form action="#" method="post" > 
            <fieldset class="space_data"><legend> Currency Information </legend>
                <table id="tab_new_etud">

                    <tr>
                        <td><label>ID : </label></td> <td><input tyype ="text" name ="csid" class="form-control" value = "<?php echo $row["csid"]; ?>" readonly ="readonly" required /></td>
                    </tr>

                    <tr>
                        <td><label> Currency :&nbsp; </label> </td> <td><input tyype ="text" name ="nameTown" class="form-control" value = "<?php echo $row["csname"]; ?>"  required /></td>
                    </tr>
                    
                     <tr>
                        <td><label> Code : </label> </td> <td><input tyype ="text" name ="codeTown" class="form-control" value = "<?php echo $row["cscode"]; ?>"  required /></td>
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
