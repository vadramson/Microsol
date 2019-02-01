<style>
    
    
    .empPic{
        position: relative;
        float: right;
/*        margin-left: 750px;*/
    }
    
    .gmFlogo{
        position: relative;
        float: left;
/*        margin-left: 750px;*/
    }
    
    .empPic img{
	padding: 12px;
	background: #fff;
	box-shadow: 0 0 8px #999;
	border-bottom: 1px solid #ffffff;
         }
         
     .empPic img:hover{
	padding: 12px;
	background: #512da8;
	box-shadow: 0 0 8px #999;
	border-bottom: 1px solid #ffffff;
        cursor: pointer;
}

.picture{
    max-width: 600px
}
    
    
    
    
</style>



<!--<button class="button button-pill"> <strong> Customer's Account Profile </strong> <br><br> </button>-->

<span class="button-dropdown" data-buttons="dropdown">
  <a href="#" class="button button-pill"> <strong> Customer's Account Profile </strong> <br><br> </a>
  
  <ul class="button-dropdown-menu-below">
      <li><a href="CustomerVIeW/editcustomerProfile.php">Edit Profile</a></li>
  </ul>
</span>


 <?php

if (isset($_REQUEST["idr"])) {
        $acctid = base64_decode($_REQUEST['idr']);
        $bdd = new MicrosolDB();
        $resulacct = $bdd->bdd->query("SELECT * FROM account WHERE acctid = '" . $acctid . " ' ") or die(mysql_error());
        $acct = $resulacct->fetch();
        $cusid = $acct["cusid"];
        $acctnum = $acct["Number"];
        $astid = $acct["type"];
        $balance = $acct["balance"];
        
        $resulCus = $bdd->bdd->query("SELECT * FROM customer WHERE cusid = '" . $cusid . " ' ") or die(mysql_error());
        $cus = $resulCus->fetch();
        
        $pid = $cus["prsid"];
        $bid = $cus["branch"];
        
       
        
        $resulPrs = $bdd->bdd->query("SELECT * FROM person WHERE person.prsid = '" . $pid . " ' ") or die(mysql_error());
        $prs = $resulPrs->fetch();
        
        $resulbrh = $bdd->bdd->query("SELECT * FROM branch WHERE branch.bchid = '" . $bid . " ' ") or die(mysql_error());
        $brh = $resulbrh->fetch();
        
        $resuldpt = $bdd->bdd->query("SELECT astname  FROM account_setter, account WHERE account.type = '" . $astid . " ' ") or die(mysql_error());
        $astname = $resuldpt->fetch();
        
        $status = $acct["status"];
//        print_r($prs)."<br>";
//        print_r($brh)."<br>";
//        print_r($dpt)."<br>";
        
        ?>

<section class="picture">
<!--    <div class="gmFlogo">
        <img src="images/logo.png">
    </div>-->
    <div class="empPic">
        <?php
        if($prs["pic"] == true)
        {?>
          <img src ="images/Customer_picture/<?php echo $prs["pic"];?>" height = '150' width = '120' title = '<?php echo $prs["fname"];?>'> <?php 
        }else {?>
          <img src ="images/Customer_picture/avatar.png"><?php
        }
        ?>
        
    </div>
</section>


        
       <table class ="list_tab" id="list_tab">
          
            <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Full Name"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["fname"]." ".$prs["lname"] ;?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Date of Birth"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["dob"];?>" readonly  >
               <br></td>
           </tr>
          <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Place of Birth"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["plcob"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Phone numbe"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["phone"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Email"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["email"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Address"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["address"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="National ID Card Number"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["nic"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Sex"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["sex"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Pin Number"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $prs["pcode"];?>" readonly  >
               <br></td>
           </tr>
           
            <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Next of Kin Name "  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $cus["Nk_name"];?>" readonly  >
               <br></td>
           </tr>
           
            <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Next of Kin Contact"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $cus["Nk_contact"];?>" readonly  >
               <br></td>
           </tr>
           
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Branch"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $brh["bname"];?>" readonly  >
               <br></td>
           </tr>
           
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Type of Account"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $astname["astname"];?>" readonly  >
               <br></td>
           </tr>
           
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Account Number"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $acct["Number"];?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Balance"  readonly>
               </td>
              
               <td>
                   <br> <input type="text" class="button glow" value =" <?php echo $acct["balance"]." F CFA";?>" readonly  >
               <br></td>
           </tr>
           <tr>
               <td>
                   <br><input type="text" class="button button-rounded button-action" value="Status"  readonly>
               </td>
                 <?php 
                   if($status == "Active"){
                    ?>   
                      <td>
                           <br> <input type="text" class="button glow button-primary" value =" <?php echo $acct["status"];?>" readonly  >
                      <br></td> 
                     <?php 
                   } else{
                       ?>
                      <td>
                           <br> <input type="text" class="button glow button-caution" value =" <?php echo $acct["status"];?>" readonly  >
                     <br></td>
                    <?php  
                   }
                 ?>
               
           </tr>
       </table>
        
        
        
 <?php       
}