<?php
$bdd = new MicrosolDB();
$resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
$reqt = $resul->fetch();
?>        
  
<?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    
    
   
    $agp = new TownManager($bdd->bdd);
//    print_r($agp);
    $town = new Town(array(
       'name' => $_POST['nameTown'],
        'code' => $_POST['codeTown'],
        
    ));
    
//    print_r($town);
//    print "j";
    
    $gm = new Gm(array(
        'gmid' => $reqt["gmid"],
    ));
    
    $tm = new Time(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    
//    print_r($town);
//    print_r($gm);
//    print_r($tm);
    
    $agp->insert_town($town, $gm, $tm);
    
    
} else {
    
}
?>



      

<form action="#" method="POST">
    
    <div class="form_titre"> Add Town Here </div><br>
    <b><i>Your Town</i></b> <br>
    <input type="text" value="" class="form-control" name="nameTown" placeholder="Enter New Town" required > <br>
    <b><i>Enter Town's Code</i></b><br>
    <input type="text" value="" class="form-control" name="codeTown" placeholder="Enter Town's Code" required > <br>
    <input type="submit" class="button button-3d-action button-pill" name="sub" />
</form>


