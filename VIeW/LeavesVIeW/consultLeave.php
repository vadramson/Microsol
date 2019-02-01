<?php

$bdd= new MicrosolDB();

$re= new LeavesManager($bdd->bdd);
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
        padding-left: 10px;
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

     <br> 
    <ul class="tabs">
        <li class=""><a href="#tab1" data-toggle = "tooltip" data-placement = "top" title = "Pending Leave Request"  > <span class="button button-pill button-highlight"> Pending </span> </a></li>
        <li class=""><a href="#tab2" data-toggle = "tooltip" data-placement = "top" title = "Approved Leave Request" ><span class="button button-pill button-primary"> Approved </span></a></li>
        <li class=""><a href="#tab3" data-toggle = "tooltip" data-placement = "top" title = "Denied Leave Request" ><span class="button button-pill button-caution"> Denied </span></a></li>
        
    </ul><br><br>
    <div class="content">
        <div style="display: none;" id="tab1" class="tab_content">
      	<button class="button button-3d-royal button-rounded" >  List of Pending Leave Requests </button> <br><br><br>
        
		 
<table class ="list_tab" id="list_tab" border = 1>
    <tr id="tab_entet"><th>Employee Code</th> <th>Start Date </th> <th>End Date</th> <th>Type of Leave</th>  <th colspan="2">Options</th></tr>
    
    <?php
    $re->listLeaveRequest();
    ?>
</table>

        </div>
		
        <div style="display: none;" id="tab2" class="tab_content">
      <button class="button button-3d-royal button-rounded" >  List of Approved Leave Requests </button> <br><br><br>
      
		
<table class ="list_tab" id="list_tab" border = 1>
    <tr id="tab_entet"><th>Employee Code</th> <th>Start Date </th> <th>End Date</th> <th>Type of Leave</th>  <th colspan="2">Options</th></tr>
    
    <?php
    $re->listAppprovedLeaveRequest();
    ?>
</table>
        
		</div>
        
		<div style="display: none;" id="tab3" class="tab_content">
		<button class="button button-3d-royal button-rounded" >  List of Rejected Leave Requests</button> <br><br><br>
		 
<table class ="list_tab" id="list_tab" border = 1>
   <tr id="tab_entet"><th>Employee Code</th> <th>Start Date </th> <th>End Date</th> <th>Type of Leave</th>  <th colspan="2">Options</th></tr>
    
    <?php
    $re->listDeniedLeaveRequest();
    ?>
</table>
		
		</div>
        
		
    </div>


