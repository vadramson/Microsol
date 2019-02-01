<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<button class="button button-3d-royal button-rounded" > Edit the name of chosen Town here</button> <br><br><br>





<div class="content_form">

    <?php
    if (isset($_POST["store_btn"])) {
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
        $reqt = $resul->fetch();
        
        $re = new TownManager($bdd->bdd);
        $town = new Town(array(
            'idtown' => htmlspecialchars($_POST["twnid"]),
            'name' => htmlspecialchars($_POST["nameTown"]),
            'code' => htmlspecialchars($_POST["codeTown"]),
        ));
        
        $gm = new Gm(array(
            'gmid' => $reqt["gmid"],
        ));
        
        $tm = new Time(array(
         'date' => date("Y-m-d h:i:sa"),
        ));
        
        
//        print_r($town);  
//        print_r($gm);
//        print_r($tm);
        $re->update_town($town, $gm, $tm);
    }

    
    
    
    
    if (isset($_REQUEST["idr"])) {
        $twnid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM town WHERE twnid = '" . $twnid . " ' ") or die(mysql_error());
        $row = $resul->fetch();
        
        
        ?>    
        <form action="#" method="post" > 
            <fieldset class="space_data"><legend> Town's Information </legend>
                <table id="tab_new_etud">

                    <tr>
                        <td><label>ID : </label></td> <td><input tyype ="text" name ="twnid" class="form-control" value = "<?php echo $row["twnid"]; ?>" readonly ="readonly" required /></td>
                    </tr>

                    <tr>
                        <td><label> Your Town : </label> </td> <td><input tyype ="text" name ="nameTown" class="form-control" value = "<?php echo $row["tname"]; ?>"  required /></td>
                    </tr>
                    
                     <tr>
                        <td><label> Your Town : </label> </td> <td><input tyype ="text" name ="codeTown" class="form-control" value = "<?php echo $row["tcode"]; ?>"  required /></td>
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
