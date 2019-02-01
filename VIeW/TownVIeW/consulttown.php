<?php

$bdd= new MicrosolDB();

$re= new TownManager($bdd->bdd);
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

<button class="button button-3d-royal button-rounded" > A list of All Towns Where Germania Fanion is Present  </button> <br><br><br>
 
<table class="table table-hover" id="list_tab" border = 1>
    <tr id="tab_entet"><th>Town</th> <th> Code</th> <th>No of Branches </th>  <th colspan="2">Operations</th></tr>
    
    <?php
    $re->listTown();
    ?>
</table>
        