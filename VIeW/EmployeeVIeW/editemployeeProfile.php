<?php

if (isset($_POST["store_btn"])) {
        $bdd = new MicrosolDB();
        
        $re = new EmployeeManager($bdd->bdd);
        $assign = new AssEmplo(array(      
        'id' => $_POST['empid'],
        'dpt' => $_POST['dptm'],
        'bran' => $_POST['branch'], 
        ));
        
       $employee = new Employee(array(
         'psrid' => $_POST['psrid'],
         'addres' => $_POST['addres'],
       )); 
        
        
//        print_r($assign);
//        print_r($employee);
        $re->update_personEmployee($employee);
        $re->update_employee($assign);
    }



if (isset($_REQUEST["idr"])) {
        $empid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resulEmp = $bdd->bdd->query("SELECT * FROM employee WHERE empid = '" . $empid . " ' ") or die(mysql_error());
        $emp = $resulEmp->fetch();
        
        $pid = $emp["prsid"];
        $bid = $emp["bchid"];
        $did = $emp["dptid"];
       
        $resulbrh = $bdd->bdd->query("SELECT * FROM branch ") or die(mysql_error());
      
        $resuldpt = $bdd->bdd->query("SELECT * FROM department ") or die(mysql_error());

        $resulPrs = $bdd->bdd->query("SELECT * FROM person WHERE person.prsid = '" . $pid . " ' ") or die(mysql_error());
        $prs = $resulPrs->fetch();
        
//        echo $emp["empid"];
       ?>
        <form action="#" method="post" > 
            <fieldset class="space_data"><legend> Edit Employee Details </legend>
                <table id="tab_new_etud">
                    <tr>
                        <td><b>ID</b></td><td>
                        <input type="text"  name="psrid" value="<?php echo $prs["prsid"]; ?>"  class="form-control" readonly required ><br></td> 
                    </tr>
                    <tr>
                        <td><b>ID</b></td><td>
                        <input type="text"  name="empid" value="<?php echo $emp["empid"]; ?>"  class="form-control" readonly required ><br></td> 
                    </tr>
                    <tr>
                        <td><b>Address</b></td><td>
                        <input type="text" value="<?php echo $prs["address"]; ?>"  class="form-control" name="addres" placeholder="Address" required ><br></td> 
                    </tr>
                    
                    <tr>
                        <td><b>Department</b>&nbsp;&nbsp;</td><td>
                        <select name="dptm" class="form-control" required >
                            <?php while ($req = $resuldpt->fetch()) { ?>

                            <option value="<?php echo $req["dptid"];?>" selected > <?php echo $req["dname"];?> </option>
                            <?php
                            }
                            ?>
                        </select> <br> </td> 
                    </tr>
                    <tr>
                        <td><b>Branch</b></td><td>
                        <select name="branch" class="form-control" required >
                            <?php while ($reqt = $resulbrh->fetch()) { ?>

                            <option value="<?php echo $reqt["bchid"];?>" selected > <?php echo $reqt["bname"];?> </option>
                            <?php
                            }
                            ?>
                        </select> <br> </td>
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
}
        ?>