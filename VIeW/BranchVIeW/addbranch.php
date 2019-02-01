<?php
$bdd = new MicrosolDB();
$resu = $bdd->bdd->query("SELECT * FROM gm, town") or die(mysql_error());
$req = $resu->fetch();
$resul = $bdd->bdd->query("SELECT twnid, tname FROM town") or die(mysql_error());
?>        
  
<?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    
    
   
    $agp = new BranchManager($bdd->bdd);
//    print_r($agp);
    $branch = new Branch(array(
       'name' => $_POST['nameBranch'],
       'code' => $_POST['codeBranch'],
       
        
    ));
    
//    print_r($town);
//    print "j";
    
    $gm = new Gmb(array(
        'gmid' => $req["gmid"],
    ));
    
    $tm = new Timeb(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    $tid = new Townid(array(
        'twnid' => $_POST["twnid"],
        'tname' => $_POST["tname"],
    ));
    
    
    
//    print_r($branch);
//    print_r($gm);
//    print_r($tm);
//    print_r($tid);
    
    $agp->insert_branch($branch, $gm, $tm, $tid);
    
    
} else {
    
}
?>



      

<form action="#" method="POST">
    
    <div class="form_titre"> Add Branch Here </div><br>
    
    <b><i>Your Branch</i></b> <br>
    <input type="text" value="" class="form-control" name="nameBranch" placeholder="Enter your Branch" required > <br />
    <b><i>Your Branch Code</i></b> <br>
    <input type="text" value="" class="form-control" name="codeBranch" placeholder="Enter your Branch Code" required > <br />
    <b><i>Choose Town</i></b>
    <select name="twnid" class="form-control" required >
        
        <?php while ($reqt = $resul->fetch()) { ?>
        
        <option value="<?php echo $reqt["twnid"];?>" selected > <?php echo $reqt["tname"];?> </option>
        <?php
        }
        ?>
    </select> <br>
    <input type="submit" class="button button-3d-action button-pill" name="sub" />
</form>


