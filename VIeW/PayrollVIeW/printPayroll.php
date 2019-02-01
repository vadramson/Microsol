<style>
    div.recu
    {
        width:       12mm;
        height:      3mm;
        overflow: hidden;
        border:2px solid #999;
        margin:0px;
        background-color:#999;
    }
    
   #tab_entet th,td{
        border: .001em #0000FF;
    }
    
    
    
    
    
</style>
<?php
    include('ModelE/db.php');
    if (isset($_REQUEST["idr"])) {
        $prlid = base64_decode($_REQUEST["idr"]);

        $bdd = new MicrosolDB();
        $rm = new PayrollManager($bdd->bdd);
        $payroll = new Payroll(array(
            'prlid' => htmlspecialchars($prlid),
        ));
?>

        


<page backtop="5mm" backbottom="5mm" backleft="-4mm" backright="0mm">
     <table style="width: 100%;border: none; background-color: #999;">
            <tr style="height: 5mm" >
                <td style="width: 40%;  font-size: 6pt; font-weight: bold;">
                    <h5 style="text-align: center; "><?php echo "GERMANIA FANION MICROFINANCE"; ?></h5>
                    <h6> <span style="line-height: 0.5pt; margin-left: 5mm;">   <?php echo "TATSA Business Center"; ?><?php echo strtoupper("Bamenda"); ?></span><br>
                      <span style="line-height: 0.5pt; margin-left: 2mm;">  P.O BOX <?php echo "1635 Bamenda"?>
                          TEL: <?php echo "678583312"; ?></span></h6>
                </td>
                <td style="width: 30%; text-align: center; font-size: 6.5pt; font-weight: bold;">
                    <img src="../VIeW/images/logo.png" alt="logo" style="height: 7mm; border-radius: 6mm;"><br>
                    <p> Save Regularly Borrow Wisely and Repay Promtlly.</p>
                </td>
                <td style="width: 30%; text-align: center; font-size: 7pt; font-weight: bold;">
                    <h5> Employee Payroll Slip </h5> 
                    <h5> Generated on <?php echo date('D-M-Y');?></h5> 
                    <h5> At &nbsp;&nbsp; <?php echo date('h-i-g-sa');?></h5> 

                </td>
            </tr></table><br><br>
    
    <table style="width: 100%;border: .01em; " id = "tab_entet">
        <thead id = "tab_entet">
<!--            <tr>
                <th style=\"width: 10%; text-align: left; font-size: 6pt; font-weight: bold;\">ID</th>
                <th style=\"width: 30%; text-align: center; font-size: 4pt;\">Name</th>
                <th style=\"width: 30%; text-align: center; font-size: 4pt;\">Code</th>
            </tr>-->
             <tr id="tab_entet"><th>Employee Code</th>  <th> Deductions </th> <th> Bonuses </th> <th> Std Salary </th>  <th>Net Salary</th> <th>Date</th><th>Print</th></tr>
        </thead>
        <?php
            echo "<tbody>";            
            $rm->Print_Payroll($payroll);        
            echo "</tbody>";
        ?>
    </table><br />

</page>   


<?php
    }


