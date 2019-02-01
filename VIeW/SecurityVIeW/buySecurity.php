
<style>
 
    #exchange td{
        font-size:14px;
	font-weight:bold;
	font-family:'Trebuchet MS';
	text-align:center;
        padding: 5px;       
    }
    
    
    #exchange th{
        font-size:14px;
	font-weight:bold;
	font-family:'Trebuchet MS';
	text-align:center;
        padding: 5px;       
    }
    
   #exchange {
        border-radius: 8px;          
	box-shadow: 0 4px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    } 
    
    
   
   
</style>


<?php

$empr = $_SESSION["acctid"];
//echo 'theis is the id '.$empr;
  

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
    $reqt = $resul->fetch();
    $empid = $reqt["empid"];
    
    $ag = new SecurityManager($bdd->bdd);
//    print_r($ag);    
//    echo $empid  ;
    /* Generate Person code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $asset = "Sec ";
     $assetscode = $asset . $random_number . $random_string; // concatenate the generated codes 
     
    /* Code generation ends here  */
// echo "kkk";
    $assets  = new Security(array(
        
       'empid'   => $empid,
       'cycode'  => $assetscode,
       'dop'     => date("Y-m-d h:i:sa"),
       'ramount' => $_POST['asn'],
       'gamount' => $_POST['asp'],
       'cusname' => $_POST['name'],
       'nic'     => $_POST['nic'],       
       'exchcode'   => $_POST['phone'],
       'phone' => "Available",
      
    ));
  
//    echo 'hjggg nnnn';
//    print_r($assets); // To see the values 
//    echo 'hjggg nnnnllll';
    $ag->buySecurity($assets);
//    echo 'hjggg nnnnllllmmmm';
    
    } 
?>


<form action="#" method="POST">
    
    <div class="btn btn-group-justified button button-pill button-primary"> <strong> Buy Security </strong> </div><br><br>
    <table id="tab_new_etud">   
    <tr>
    <td><b>Security Type</b></td>&nbsp;&nbsp;&nbsp;
        <td> <input type="text" value="" class="form-control" name="asn" placeholder="Security Type " size="110" required ><br> </td>
    </tr>
    <tr>
    <td><b>Security  price</b></td>&nbsp;&nbsp;&nbsp;
    <td> <input type="number" value="" class="form-control" name="asp" placeholder="Assets price in F CFA" size="110" required ><br> </td>
    </tr>
    <tr>
    <td><b>Vendor's Name</b></td><td>
    <input type="text" value="" class="form-control" name="name" placeholder="Vendor's Name" required > <br>
    </td>
    </tr>
    <tr>
    <td><b>Vendor's NIC</b> </td><td>&nbsp;
        <input type="number" class="form-control" name="nic" placeholder="Vendor's National ID Card Number" required ><br>    
    </td>
    </tr> 
    <tr>
    <td><b>Vendor's Phone</b></td><td>
    <input type="text"class="form-control" name="phone" placeholder=" Vendor's Phone Number" required ><br>    
    </td>
    </tr> 
   </table>
    
    <table id="tab_option">
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="submit" class="button button-3d-action button-pill" name="sub" /></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><input type="reset" class="button button-3d-royal button-rounded" name="su" /></td>
        </tr>
    </table>
</form>


