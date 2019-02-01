<style>
    
   .login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 100%;
  min-width: 720px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  /*box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);*/
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: #8bc34a;
}
.login.ok button .spinner {
  border-radius: 0;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
.login input {
  display: block;
  padding: 5px 5px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #ddd;
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: #ccc;
}
.login input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -47px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.login input:focus {
  outline: none;
  color: #444;
  border-color: #2196F3;
  border-left-width: 35px;
}
.login input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.login a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.login .title {
  color: #444;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
}
.login button {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background: #2196F3;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}
.login button .spinner {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  border: 4px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 50%;
  top: 0;
  opacity: 0;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) button:hover {
  box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}
#modaladd{
    min-width: 500px;
}

/*
  Glowing effects

*/

.login.glow {
  -webkit-animation-duration: 3s;
  -moz-animation-duration: 3s;
  -ms-animation-duration: 3s;
  -o-animation-duration: 3s;
  animation-duration: 3s;
  -webkit-animation-iteration-count: infinite;
  -khtml-animation-iteration-count: infinite;
  -moz-animation-iteration-count: infinite;
  -ms-animation-iteration-count: infinite;
  -o-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-name: glowing;
  -khtml-animation-name: glowing;
  -moz-animation-name: glowing;
  -ms-animation-name: glowing;
  -o-animation-name: glowing;
  animation-name: glowing; }
/* line 456, ../scss/partials/_buttons.scss */
.login.glow:active {
  -webkit-animation-name: none;
  -moz-animation-name: none;
  -ms-animation-name: none;
  -o-animation-name: none;
  animation-name: none;
  -moz-box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.3), 0px 1px 0px white;
  -webkit-box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.3), 0px 1px 0px white;
  box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.3), 0px 1px 0px white; }


    
</style>

<div class="login">
 <div id="modaladd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="socinel" aria-hidden="true" style="background-image: url('VIeW/images/logo.png')" >
  
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src="VIeW/images/cancel.png" title = "close"> </button>
                <p class="title">Income Generation Loan (IGL)</p>
            </div>
            <div class="modal-body">
                
            <?php

if(isset($_POST['sub'])){
    $bdd = new MicrosolDB();
    $agp = new LoanManager($bdd->bdd);
    print_r($agp);
    $test = $_POST['dob'];
    
    $pic1 = 0;
    $pic2 = 0;
    $pic3 = 0;
    /* Generate Loan code  */
    
     $random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int
     $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)); // random(ish) 5 character string
     $loan = "LN";
     $loancode = $loan . $random_number . $random_string; // concatenate the generated codes 
     
    /* Code generation ends here  */
    
   /* Picture upload */
     
     $picture = $_FILES['pidc']['name'];
     $picture_temp = $_FILES['pidc']['tmp_name'];
     
     $picture1 = $_FILES['ppic']['name1'];
     $picture_temp1 = $_FILES['ppic']['tmp_name1'];
     
     $picture2 = $_FILES['cpic']['name2'];
     $picture_temp2 = $_FILES['cpic']['tmp_name2'];
     
     // Get the extension of the uploaded picture
     if (!empty($picture) && !empty($picture1) && !empty($picture2)) {
        $image = explode('.', $picture); // split the name of picture into two based on extension with the full stop (.) delimiter
        $image_extension = end($image); // get the end or extension  of the image
       
        $image1 = explode('.', $picture1); // split the name of picture into two based on extension with the full stop (.) delimiter
        $image_extension1 = end($image1); // get the end or extension  of the image
        
        $image2 = explode('.', $picture2); // split the name of picture into two based on extension with the full stop (.) delimiter
        $image_extension2 = end($image2); // get the end or extension  of the image
//        print_r($image_extension); test if it works.
//        if (in_array(strtolower($image_extension), array('png', 'gif', 'jpg', 'jpeg')) === false) {
//            echo"<script language='javascript'>alert('Choose a Valid Image!')</script>";
//            
//        }else{
//            $pic1 = 1;
//        }
//        if (in_array(strtolower($image_extension1), array('png', 'gif', 'jpg', 'jpeg')) === false) {
//            echo"<script language='javascript'>alert('Choose a Valid Image!')</script>";
//            
//        }else{
//            $pic2 = 1;
//        }
//        if (in_array(strtolower($image_extension2), array('png', 'gif', 'jpg', 'jpeg', 'pdf', 'docx', 'xlsx')) === false) {
//            echo"<script language='javascript'>alert('Choose a Valid Document!')</script>";
//            
//        }else{
//            $pic3 = 1;
//        }
//        
//        
//        
//        
//            
//         if(($pic1 == 1 ) && ($pic2 == 1 ) && ($pic3 == 1 ) )
//                {
    
    $loan = new Loan(array(
       'empid' => 0,
       'lncode' => $loancode,
       'dop' => date("Y-m-d h:i:sa"),
       'lnname' => "Income Generation Loan (IGL)",
       'lnamount' => $_POST['amt'],
       'lnamtapprove' => 0.00,
       'name' => $_POST['name'],
       'picid' => $picture,
       'applicantpic' => $picture1,
       'pob' => $_POST['pob'],
       'phone' => $_POST['phone'],
       'colaterapic' => $picture2,
       'nic' => $_POST['nic'],
       'lnofficer' => "customer",
       'status' => "pending",
        
        
        
        
    ));
 
    move_uploaded_file($picture_temp,'VIeW/images/loan/IDs_picture/'.$picture);
    move_uploaded_file($picture_temp1,'VIeW/images/loan/applicant_picture/'.$picture1);
    move_uploaded_file($picture_temp2,'VIeW/images/loan/collatera_picture/'.$picture2);
    
    print_r($loan); // To see the values 
    
    $agp->insert_loan($loan);
    
//    } else {
//         echo"<script language='javascript'>alert('Enter Date!')</script>";
//          }

         }
      
    }
       

?>
  
                
                
                <form action="#" method="POST" enctype="multipart/form-data"  class="glow">                    
                        <input type="text" name="name"   class="form-control" placeholder="Name" required/>                 
                        <label> Photocopy of ID Card </label>
                        <input type="file" name="pidc"  class="form-control" placeholder="Photocopy of ID Card" required/>                                      
                        <input type="text" name="pob"   class="form-control" placeholder="place of Birth" required/>                      
                        <input type="tel" name="phone"   class="form-control" placeholder="Phone" required/>
                        <label> Your Picture </label>
                        <input type="file" name="ppic"   class="form-control" placeholder="Your Picture" required/>
                        <label> Picture Collateral </label>
                        <input type="file" name="cpic"   class="form-control" placeholder="Collateral Picture" required/>  
                        <label> Amount (F CFA)</label>
                        <input type="number" name="amt"   class="form-control" placeholder="Amount" required/>
                        <label> National ID Card Number </label>
                        <input type="number" name="nic"   class="form-control" placeholder="NIC Number" required/>
                        <center><input type="submit" name="sub" id="subD" class="btn btn-primary" value="Apply"> <input type="reset" class="btn btn-primary" value=" Cancel"> </center>
                </form>
            </div>
        </div>
    </div>
   </div>
    
    
  <div id="modala1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="socinel" aria-hidden="true" style="background-image: url('VIeW/images/logo.png')" >
  
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src="VIeW/images/cancel.png" title = "close"> </button>
                <p class="title"> Group Loan (GL)</p>
            </div>
            <div class="modal-body">
                
             <?php
                if (isset($_POST['submit'])) {
                $bdd = new MicrosolDB();

                $rem = new ProfilManager($bdd->bdd);
               // print_r($rem);
                $profil = new Profil(array(
                            'login' => $_POST['login'],
                            'pass' => sha1($_POST['pass']),
                            'role' => $_POST['role'],
                            'status' => 'Active',
                        ));
                //print_r($profil);

                $rem->insert_user($profil);
            } else {

            }
             ?>   
                
                
                <form action="#" method="POST" enctype="multipart form">
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pass"   class="form-control" placeholder="Password" required/>
                    </div>
                    
                   <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                   </div>
                    
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    
                    <center><input type="submit" name="submit" class="btn btn-primary" value="Apply"> <input type="reset" class="btn btn-primary" value=" Cancel"> </center>
                </form>
            </div>
        </div>
    </div>
   </div>
    
    
     <div id="modala2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="socinel" aria-hidden="true" style="background-image: url('VIeW/images/logo.png')" >
  
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src="VIeW/images/cancel.png" title = "close"> </button>
                <p class="title"> Emergency Loan (EL) </p>
            </div>
            <div class="modal-body">
                
             <?php
                if (isset($_POST['submit'])) {
                $bdd = new MicrosolDB();

                $rem = new ProfilManager($bdd->bdd);
               // print_r($rem);
                $profil = new Profil(array(
                            'login' => $_POST['login'],
                            'pass' => sha1($_POST['pass']),
                            'role' => $_POST['role'],
                            'status' => 'Active',
                        ));
                //print_r($profil);

                $rem->insert_user($profil);
            } else {

            }
             ?>   
                
                
                <form action="#" method="POST" enctype="multipart form">
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pass"   class="form-control" placeholder="Password" required/>
                    </div>
                    
                   <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                   </div>
                    
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
           
                    <center><input type="submit" name="submit" class="btn btn-primary" value="Apply"> <input type="reset" class="btn btn-primary" value=" Cancel"> </center>
                </form>
            </div>
        </div>
    </div>
   </div>
    
    
     <div id="modala3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="socinel" aria-hidden="true" style="background-image: url('VIeW/images/logo.png')" >
  
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> <img src="VIeW/images/cancel.png" title = "close"> </button>
                <p class="title"> Individual Loan (IL)</p>
            </div>
            
            <div class="modal-body">
                
             <?php
                if (isset($_POST['submit'])) {
                $bdd = new STAGEDB();

                $rem = new ProfilManager($bdd->bdd);
               // print_r($rem);
                $profil = new Profil(array(
                            'login' => $_POST['login'],
                            'pass' => sha1($_POST['pass']),
                            'role' => $_POST['role'],
                            'status' => 'Active',
                        ));
                //print_r($profil);

                $rem->insert_user($profil);
            } else {

            }
             ?>   
                
                
                <form action="#" method="POST" enctype="multipart form">
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pass"   class="form-control" placeholder="Password" required/>
                    </div>
                    
                   <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                   </div>
                    
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login" required/>
                    </div>
           
                    <center><input type="submit" name="submit" class="btn btn-primary" value="Apply"> <input type="reset" class="btn btn-primary" value=" Cancel"> </center>
                </form>
            </div>
        </div>
    </div>
   </div>
    
</div> 
<script src="VIeW/LoanVIeW/js/datetimepicker_css.js"></script>