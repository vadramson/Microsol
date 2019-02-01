<?php

$empr = $_SESSION["acctid"];
//echo 'theis is the id '.$empr;

   
   

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    $resul = $bdd->bdd->query("SELECT empid FROM accounts WHERE acctid = '". $empr ."' ") or die(mysql_error());
    $reqt = $resul->fetch();
    $empid = $reqt["empid"];
    
    $agp = new TravelManager($bdd->bdd);
//    print_r($agp);
    $test = $_POST['sdate'];
    $test1 = $_POST['edate'];
    
    /* Generate Person code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $travelc = "TRV";
     $travelcode = $travelc . $random_number . $random_string; // concatenate the generated codes 
     
    /* Code generation ends here  */

            
         if(!empty($test) && !empty($test1) )
                {
    
    $travel = new Travel(array(
       'empid' => $empid,
       'trvcode' => $travelcode,
       'trvsdate' => $_POST['sdate'],
       'trvedate' => $_POST['edate'],
       'trvname' => $_POST['reason'],
       'destination' => $_POST['des'],
       'trempcode' => $_POST['ecode'],
       'approval' => "Pending",
         
        
    ));
    
//    print_r($travel); // To see the values 
    $agp->insert_travel($travel);
    
    } else {
         echo"<script language='javascript'>alert('Enter Date!')</script>";
          }

     
} else {
    
}
?>

<form action="#" method="POST">
    
    <div class="button button-pill button-primary"> <strong> Fill The Travel Request Form</strong> </div><br><br>
    <table id="tab_new_etud">
    <tr>
    <td><b> Employee Code &nbsp;&nbsp; </b></td> &nbsp;&nbsp;&nbsp;&nbsp;
    <td><input type="text" value="" class="form-control" name="ecode" placeholder="Employee Code" required ><br> </td>
    </tr>
    <tr>
    <td><b>Travel Reason</b></td>&nbsp;&nbsp;&nbsp;
        <td> <input type="text" value="" class="form-control" name="reason" placeholder="Travel Reason" size="110" required ><br> </td>
    </tr>
    <tr>
    <td><b>Destination</b></td><td>
    <input type="text" value="" class="form-control" name="des" placeholder="Destination" required > <br>
    </td>
    </tr>
    <tr>
    <td><b>From the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <img src="images/cal.gif" onclick="javascript:NewCssCal('demo1')" style="cursor:pointer" title="Pick Date" > </td><td>
    <input type="Text" id="demo1" class="form-control" name="sdate" placeholder="Start Date"  readonly ><br>    
    </td>
    </tr> 
    <tr>
    <td><b>To the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <img src="images/cal.gif" onclick="javascript:NewCssCal('demo2')" style="cursor:pointer" title="Pick Date" > </td><td>
    <input type="Text" id="demo2" class="form-control" name="edate" placeholder="End Date"  readonly ><br>    
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


