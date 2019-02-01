<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<button class="button button-3d-royal button-rounded" > Edit the name of chosen Department here</button> <br><br><br>





<div class="content_form">

    <?php
    if (isset($_POST["store_btn"])) {
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
        $reqt = $resul->fetch();
        
        $re = new DepartmentManager($bdd->bdd);
        $dpt = new Department(array(
            'dptid' => htmlspecialchars($_POST["dptid"]),
            'name' => htmlspecialchars($_POST["nameDpt"]),
            'code' => htmlspecialchars($_POST["codeDpt"]),
            'salary' => htmlspecialchars($_POST["minSalary"]),
        ));
        
        $gm = new Gmd(array(
            'gmid' => $reqt["gmid"],
        ));
        
        $tm = new Timed(array(
         'date' => date("Y-m-d h:i:sa"),
        ));
        
        
//        $tid = new Townid(array(
//        'twnid' => $_POST["twnid"],
//        'tname' => $_POST["tname"],
//        ));
        
//        print_r($dpt);  
//        print_r($gm);
//        print_r($tm);
//        print_r($tid);
        $re->update_department($dpt, $gm, $tm);
    }

    
    
    
    
    if (isset($_REQUEST["idr"])) {
        $dptid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resul = $bdd->bdd->query("SELECT * FROM department WHERE dptid = '" . $dptid . " ' ") or die(mysql_error());
        $row = $resul->fetch();
        
        ?>
        <form action="#" method="post" > 
            <fieldset class="space_data"><legend> Information on Departments </legend>
                <table id="tab_new_etud">

                    <tr>
                        <td><label>ID : </label></td> <td><input tyype ="text" name ="dptid" class="form-control" value = "<?php echo $row["dptid"]; ?>" readonly ="readonly" required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Department : </label> </td> <td><input tyype ="text" name ="nameDpt" class="form-control" value = "<?php echo $row["dname"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Code : </label> </td> <td><input tyype ="text" name ="codeDpt" class="form-control" value = "<?php echo $row["dcode"]; ?>"  required /></td>
                    </tr>
                    
                    <tr>
                        <td><label> Minimum Salary : </label> </td> <td><input tyype ="text" name ="minSalary" class="form-control" value = "<?php echo $row["stdsalary"]; ?>"  required /></td>
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
