<?php

$bdd= new MicrosolDB();

$re= new SecurityManager($bdd->bdd);
?>
<style>
    
    th{
        padding: 0 10px;
        width: 300px;
        height: 40px;
        color: #bbb;
        text-shadow: 1px 1px 1px black;
        background: windowframe;
        border: 2px;
        border-radius: 5px;
        -webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.06);
        box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.06);
    }

    /*       th{
                        text-transform: uppercase;
                                    font-weight: bold;
                                    color: white;
                                    background-color:#333431;
                                    
                                    }*/
    table{
        border: 3px solid #007bb6;
        -webkit-box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.06);
        box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.06);
    }
    td{
        background-color: #76b4ff ;
        padding: 0 10px;
        width: 300px;
        height: 40px;
        color: white;
        font-family: times new roman;
        font-weight: bold;
        
        
        box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.06);
    }
    tr{
       border: 3px solid blueviolet; 
       border-radius: 7px;
    }


</style>



 
<style>
    
    ul.tabs li {
	float: left;
        padding-left: 50px;
        list-style: none;
    }
    
</style>




<script language="javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".tab_content").hide(); 
		$("ul.tabs li:first").addClass("active").show();
		$(".tab_content:first").show(); 
		$("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("active");
			$(this).addClass("active");
			$(".tab_content").hide();
			var activeTab = $(this).find("a").attr("href");
			$(activeTab).fadeIn(500); 
			//$(activeTab).animate({ opacity:'toggle',height:'toggle'},1000); //Fade in the active content
			return false;
		});
	});
</script>
<button class="btn btn-group-justified button button-3d-royal button-rounded" > List of Security Operations  </button>

     <br> 
    <ul class="tabs">
        <li class=""><a href="#tab1" data-toggle = "tooltip" data-placement = "top" title = "List of Available Securities"  ><img src="images/groupEmployees.png " width = '50px' hight = '50px' ></a></li>
        <li class=""><a href="#tab2" data-toggle = "tooltip" data-placement = "top" title = "List of Sold Securities" ><img src="images/EnabledEmployee.png " width = '50px' hight = '50px' ></a></li>
        <!--<li class=""><a href="#tab3" data-toggle = "tooltip" data-placement = "top" title = "List of Deactivated Employees" ><img src="images/disabled.png " width = '50px' hight = '50px'></a></li>-->
        
    </ul><br><br>
    <div class="content">
        <div style="display: none;" id="tab1" class="tab_content">
      	<button class="button button-3d-royal button-rounded" >  List of Available Securities at Germania Fanion </button> <br><br><br>
        
		 
<table class ="list_tab" id="list_tab" border = 1>
    <tr id="tab_entet"> <th> Security Code</th> <th>Security Name </th> <th>Purchase Price </th> <th> Vendor's Name </th> <th>Vendor's Phone N<sup>o</sup> </th> <th> Date of Purchase</th> </tr>
    
    <?php
    $re->listSecurityA(1,5);
    ?>
</table>

        </div>


 <div style="display: none;" id="tab2" class="tab_content">
     <button class="button button-3d-royal button-rounded" >  List of Sold Securities at Germania Fanion </button> <br><br><br>
<table class ="list_tab" id="list_tab" border = 1>
    <tr id="tab_entet"><th>Ref N<sup>0</sup></th> <th> Security Code</th> <th>Security Name </th> <th>Amount Sold </th> <th> Customer </th> <th>Phone N<sup>o</sup> </th> <th> Date </th> <th>Operation</th></tr>
    
    <?php  
    $h = $re->num();
   echo $nbp = ceil($h/7);
    $re->listSecurity(1,5);
    ?>
</table>
 </div>
<?php
   
   $p = 1;
   while ($p <= $nbp){
 ?>
<div class="page" >
       <?php
       echo " <a href ='indexadmin.php?page="?> <?php echo base64_encode('CurrencyEXVIeW/currencyhistory');?>"<?php" ' "?> <?php echo " " . $p ."</a>"  ?>
     <?php $p++;
   }   
   ?> 
</div> 
