<?php
$bdd = new MicrosolDB();
$resul = $bdd->bdd->query("SELECT * FROM gm") or die(mysql_error());
$reqt = $resul->fetch();
?>        
  
<?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    
    
   
    $agp = new CySetterManager($bdd->bdd);
//    print_r($agp);
    $town = new CySetter(array(
        'csname' => $_POST['nameCurrency'],
        'cscode' => $_POST['codeCurrency'],
        
    ));
    
//    print_r($town);
//    print "j";
    
    $gm = new Gmcy(array(
        'gmid' => $reqt["gmid"],
    ));
    
    $tm = new Timecy(array(
         'date' => date("Y-m-d h:i:sa"),
    ));
    
    
//    print_r($town);
//    print_r($gm);
//    print_r($tm);
    
    $agp->insert_currency($town, $gm, $tm);
    
    
} else {
    
}
?>



      

<form action="#" method="POST">
    
    <div class="form_titre"> Add Currency Here </div><br>
    <b><i>Your Currency </i></b> <br>
    <input type="text" value="" class="form-control" name="nameCurrency" placeholder="Enter New Currency" required > <br>
    <b><i>Enter Currency Code</i></b><br>
    <input type="text" value="" class="form-control" name="codeCurrency" placeholder="Enter Currency Code" required > <br>
    <input type="submit" class="button button-3d-action button-pill" name="sub" />
</form>


