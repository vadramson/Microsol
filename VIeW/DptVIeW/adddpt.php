<?php
$bdd = new MicrosolDB();
$resu = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
$req = $resu->fetch();
?>        
  
<?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    
    
   
    $agp = new DepartmentManager($bdd->bdd);
//    print_r($agp);
    $dpt = new Department(array(
       'name' => $_POST['nameDpt'],
       'code' => $_POST['codeDpt'],
       'salary' => $_POST['minSalary'],
       
        
    ));
    
//    print_r($town);
//    print "j";
    
    $gm = new Gmd(array(
        'gmid' => $req["gmid"],
    ));
    
    $tm = new Timed(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
//    $tid = new Townid(array(
//        'twnid' => $_POST["twnid"],
//        'tname' => $_POST["tname"],
//    ));
    
    
    
//    print_r($dpt);
//    print_r($gm);
//    print_r($tm);
//    print_r($tid);
    
    $agp->insert_department($dpt, $gm, $tm);
    
    
} else {
    
}
?>



      

<form action="#" method="POST">
    
    <div class="form_titre"> Add Department Here </div><br>
    
    <b><i>Your Department</i></b> <br>
    <input type="text" value="" class="form-control" name="nameDpt" placeholder="Enter New Department" required > <br />
    <b><i>Your Department Code</i></b> <br>
    <input type="text" value="" class="form-control" name="codeDpt" placeholder="Enter Department Code" required > <br />
    <b><i> Minimum Salary </i></b>
    <input type="number" value="" class="form-control" name="minSalary" placeholder="Department Minimum Salary  " required > <br />
    
    <input type="submit" class="button button-3d-action button-pill" name="sub" />
    <input type="reset" class="button button-3d-royal button-rounded" name="reset" value="Cnceal" />
</form>


