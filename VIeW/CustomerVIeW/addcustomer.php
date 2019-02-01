<?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    $agp = new EmployeeManager($bdd->bdd);
//    print_r($agp);
    $test = $_POST['dob'];
    $picTest = 0;
    /* Generate Person code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $person = "PR";
     $personcode = $person . $random_number . $random_string; // concatenate the generated codes 
     
    /* Code generation ends here  */
    
   /* Picture upload */
     
     $picture = $_FILES['picture']['name'];
     $picture_temp = $_FILES['picture']['tmp_name'];
     
     // Get the extension of the uploaded picture
     if (!empty($picture)) {
        $image = explode('.', $picture); // split the name of picture into two based on extension with the full stop (.) delimiter
        $image_extension = end($image); // get the end or extension  of the image
//        print_r($image_extension); test if it works.
        if (in_array(strtolower($image_extension), array('png', 'gif', 'jpg', 'jpeg')) === false) {
            echo"<script language='javascript'>alert('Choose a Valid Image!')</script>";
            
        }else{
            
         if(!empty($test ) )
                {
    
    $employee = new Employee(array(
       'fname' => $_POST['fname'],
       'lname' => $_POST['lname'],
       'sex' => $_POST['sex'],
       'dob' => $_POST['dob'],
       'pob' => $_POST['pob'],
       'phone' => $_POST['phone'],
       'email' => $_POST['email'],
       'nic' => $_POST['nic'],
       'pic' => $_POST['picture'],
       'addres' => $_POST['addres'],
       'pcode' => $personcode,
       'pic' => $picture,
        
        
        
        
    ));
 
    move_uploaded_file($picture_temp,'images/Customer_picture/'.$picture);
//    print_r($employee); // To see the values 
    $agp->insert_person($employee);
    
    } else {
         echo"<script language='javascript'>alert('Enter Date!')</script>";
          }

         }
      
    }
       
} else {
    
}
?>

<?php
$bdd = new MicrosolDB();
$resul = $bdd->bdd->query("SELECT * FROM branch") or die(mysql_error());
$resu = $bdd->bdd->query("SELECT * FROM department") or die(mysql_error());

?>  

      

<form action="#" method="POST" enctype="multipart/form-data" >
    
    <div class="button button-pill button-primary"> <strong> Enter Customer's Personal Information Below </strong> </div><br><br>
    <table id="tab_new_etud">
    <tr>
        <td><b> First Name </b></td> &nbsp;&nbsp;&nbsp;&nbsp;
    <td><input type="text" value="" class="form-control" name="fname" placeholder="Enter First Name" required ><br> </td>
    </tr>
    <tr>
    <td><b>Last Name<b></td>&nbsp;&nbsp;&nbsp;
        <td> <input type="text" value="" class="form-control" name="lname" placeholder="Last Name" size="110" required ><br> </td>
    </tr>
    <tr>
    <td><b> Sex: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
    <td>
    <input type = "radio" name = "sex" value="Male" checked = 'checked'> Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type = "radio" name = "sex" value="Female" > Female<br />
    </td>
    </tr>
    <tr>
    <td><b>Date of Birth</b> <img src="images/cal.gif" onclick="javascript:NewCssCal('demo1')" style="cursor:pointer" title="Pick Date" > </td><td>
    <input type="Text" id="demo1" class="form-control" name="dob" placeholder="Date of Birth"  readonly ><br>
    <!--<input type="date" value="" class="form-control" name="dob" placeholder="Date of Birth" required > <br>-->
    </td>
    </tr>
    <tr>
    <td><b>Place of Birth</b></td><td>
    <input type="text" value="" class="form-control" name="pob" placeholder="Place of Birth" required > <br>
    </td>
    </tr>
    <tr>
    <td><b>Phone Number</b></td><td>
    <input type="tel" value="" class="form-control" name="phone" placeholder="Phone Number" required ><br> </td>
    </tr>
    <tr>
    <td><b>Email</b></td><td>
    <input type="email" value="" class="form-control" name="email" placeholder="Email" required > <br></td>
    </tr>
    <tr>
    <td><b>NIC Number</b></td><td>
    <input type="number" value="" maxlength="11" class="form-control" name="nic" placeholder="National Identity Card umber" required ><br> </td>
    </tr>
    <tr>
    <td><b>Picture</b></td><td>
    <input type="file" value="" class="form-control" name="picture" required ><br></td>
    </tr>
    <tr>
    <td><b>Address</b></td><td>
    <input type="text" value=""  class="form-control" name="addres" placeholder="Address" required ><br></td> </tr>
    <tr>
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


