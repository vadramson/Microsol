<?php

$bdd= new MicrosolDB();

$re= new WithdrawManager($bdd->bdd);
?>
<style>
    
    th{
        padding: 0 10px;
        width: 300px;
        height: 40px;
        color: #61f2ff;
        text-shadow: 1px 1px 1px black;
        background: windowframe;
        border: 2px;
        font-weight: bolder;
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
        background-color: #60a0ff ;
        padding: 0 10px;
        width: 300px;
        height: 40px;
        color: black;
        font-family: times new roman;
        font-weight: bold;
        
        
        box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.06);
    }
    tr{
       border: 3px solid blueviolet; 
       border-radius: 7px;
    }


</style>

<button class="btn btn-group-justified  button button-3d-royal button-rounded" > Withdrawal History </button> <br><br><br>
 
<table class="table table-hover" id="list_tab" border = 1>
    <tr id="tab_entet"><th>Ref N<sup>0</sup></th> <th>Amount (F CFA) </th>  <th>Account N<sup>o</sup> </th> <th> Customer </th>  <th> Type </th>  <th> Date of transaction </th> <th>Operation</th></tr>
    
    <?php  
    $h = $re->num();
   echo $nbp = ceil($h/7);
    $re->listCheque(1,7);
    ?>
</table>
 
<?php
   
   $p = 1;
 echo 'Page : ';
            for ($i = 1; $i <= $nbp; $i++) {
                ?>
                <a href="indexadmin.php?page=<?php echo base64_encode('WithdrawVIeW/withdrawHistory'); ?>&en=<?php echo $i; ?> " class="button-3d-primary button-pill" ><?php echo $i; ?></a>  
                <?php
            }

