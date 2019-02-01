<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<button class="button button-3d-royal button-rounded" > Edit the name of chosen Branch here</button> <br><br><br>





<div class="content_form">

    <?php
    if (isset($_POST["store_btn"])) {
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
        $reqt = $resul->fetch();
        
        $re = new BranchManager($bdd->bdd);
        $branch = new Branch(array(
            'bchid' => htmlspecialchars($_POST["bchid"]),
            'name' => htmlspecialchars($_POST["nameBranch"]),
            'code' => htmlspecialchars($_POST["codeBranch"]),
        ));
        
        $gm = new Gmb(array(
            'gmid' => $reqt["gmid"],
        ));
        
        $tm = new Timeb(array(
         'date' => date("Y-m-d h:i:sa"),
        ));
        
        
        $tid = new Townid(array(
        'twnid' => $_POST["twnid"],
        'tname' => $_POST["tname"],
        ));
        
//        print_r($branc);  
//        print_r($gm);
//        print_r($tm);
//        print_r($tid);
        $re->update_branch($branch, $gm, $tm, $tid);
    }

    
    
    
    
    if (isset($_REQUEST["idr"])) {
        $bchid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM branch WHERE bchid = '" . $bchid . " ' ") or die(mysql_error());
        $row = $resul->fetch();
        $resu = $bdd->bdd->query("SELECT * FROM town ") or die(mysql_error());
        
        ?>
        <form action="#" method="post" > 
            <fieldset class="space_data"><legend> Information on Branches </legend>
                <table id="tab_new_etud">

                    <tr>
                        <td><label>ID : </label></td> <td><input tyype ="text" name ="bchid" class="form-control" value = "<?php echo $row["bchid"]; ?>" readonly ="readonly" required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Branch : </label> </td> <td><input tyype ="text" name ="nameBranch" class="form-control" value = "<?php echo $row["bname"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Code : </label> </td> <td><input tyype ="text" name ="codeBranch" class="form-control" value = "<?php echo $row["bcode"]; ?>"  required /></td>
                    </tr>

                    <tr>
                        <td><label> Town  : </label> </td> 
                        <td>
                           
                            <select name="twnid" class="form-control" required >
                            <?php while ($reqt = $resu->fetch()) { 
     
                             if($reqt["twnid"] == $row["twnid"]){
                                 ?>
                             <option value="<?php echo $reqt["twnid"];?>" selected="selected" > <?php echo $reqt["tname"];?> </option>
                             
                            <?php
                             } 
                             else {
                                 ?>
                             
                                <option value="<?php echo $reqt["twnid"];?>"> <?php echo $reqt["tname"];?>
                             <?php
                             }
                             }
                             ?>
                            
                             </select>
                        </td>
                    </tr>

                    
                                
                </table>
                  <br> <?php echo $res1["idregion"];?>
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
