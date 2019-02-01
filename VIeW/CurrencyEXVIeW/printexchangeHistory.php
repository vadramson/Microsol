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
        $cyid = base64_decode($_REQUEST["idr"]);

        $bdd = new MicrosolDB();
        $rm = new CurrencyManager($bdd->bdd);
        $history = new AssE(array(
            'cyid' => htmlspecialchars($cyid),
        ));
?>

        <?php
            $rm->Print_exchangeHitory($history);
        ?>
<?php
    }


