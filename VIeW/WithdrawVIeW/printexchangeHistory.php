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
    
/*    td,th,tr{
        border: .1em #0000FF;
    }*/
</style>
<?php
    include('ModelE/db.php');
    if (isset($_REQUEST["idr"])) {
        $trxid = base64_decode($_REQUEST["idr"]);

        $bdd = new MicrosolDB();
        $rm = new DepositeManager($bdd->bdd);
        $history = new Deposite(array(
            'trxid' => htmlspecialchars($trxid),
        ));
?>

        <?php
            $rm->Print_DepositeHitory($history);
        ?>
<?php
    }


