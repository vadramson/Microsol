
<script type="text/javascript">
function calcSum() {
value1 =
parseFloat (document.mainForm.textBox1.value);
value2 =
parseFloat (document.mainForm.textBox2.value);
sum = value2 * value1;
document.mainForm.textBoxSum.value = sum + ' ' + ' F CFA ';
}
</script>

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





<div class="button button-3d-primary button-pill"> <strong> Currency Converter </strong> </div><br><br>

<form name="mainForm">
    <table id="exchange">
        <tr>
            <th> Exchange Rate </th><th> Foreign Amount </th> <th> Local Amount </th>
        </tr>
        <tr>
            <td>
                <input type="text" name="textBox1" size = "10" />
            </td>
            <td>
                <input type="text"  name="textBox2" size = "10" />
            </td>
            <td>
                 <input type="text" class="form-control" name="textBoxSum" readonly size = "10" />
            </td>            
        </tr>
        <tr>
            <td colspan="2">
                <input type="button" class="button button-pill button-action" data-toggle = "tooltip" data-placement = "bottom" value="Calculate" onclick="javascript: calcSum()"  title = "Click here to calculate " />
            </td>
            <td>
                <input type="reset" name="resetBtn" class="button button-pill button-caution" value="Clear" data-toggle = "tooltip" data-placement = "right" title = "Click here to start calculation all over again "/>
            </td>
        </tr>
        
    </table>
</form><br><br>

<?php
$bdd = new MicrosolDB();
$resul = $bdd->bdd->query("SELECT csid, cscode FROM cy_seter ") or die(mysql_error());
?>

<form action="indexadmin.php?page=<?php echo base64_encode('CurrencyEXVIeW/treat');?>" method="POST">
    
    <div class="button button-pill button-primary"> <strong> Buy Foreign Currency </strong> </div><br><br>
    <table id="tab_new_etud">
    <tr>
    <td><b> Foreign Currency &nbsp;&nbsp; </b></td> &nbsp;&nbsp;&nbsp;&nbsp;
    <td><select name="curency" class="form-control" required >
        
        <?php while ($reqt = $resul->fetch()) { ?>
        
        <option value="<?php echo $reqt["csid"];?>" selected > <?php echo $reqt["cscode"];?> </option>
        <?php
        }
        ?>
    </select> <br> </td>
    </tr>
    <tr>
    <td><b>Foreign Amount</b></td>&nbsp;&nbsp;&nbsp;
        <td> <input type="text" value="" class="form-control" name="fc" placeholder="Foreign Amount " size="110" required ><br> </td>
    </tr>
    <tr>
    <td><b>Local Amount</b></td>&nbsp;&nbsp;&nbsp;
        <td> <input type="text" value="" class="form-control" name="lc" placeholder="Local Amount in F CFA" size="110" required ><br> </td>
    </tr>
    <tr>
    <td><b>Buyer Name</b></td><td>
    <input type="text" value="" class="form-control" name="name" placeholder="Buyers Name" required > <br>
    </td>
    </tr>
    <tr>
    <td><b>Buyer's NIC</b> </td><td>
        <input type="number" class="form-control" name="nic" placeholder="Buyer's National ID Card Number" required ><br>    
    </td>
    </tr> 
    <tr>
    <td><b>Buyer's Phone</b></td><td>
    <input type="text"class="form-control" name="phone" placeholder=" Buyer's Phone Number" required ><br>    
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


