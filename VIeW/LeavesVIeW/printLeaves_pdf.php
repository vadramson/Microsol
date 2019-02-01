<?php
// get the HTML
    ob_start(); //démarrage du pdf
  
    include('printleaves.php');
    $content = ob_get_clean(); //récupération du contenu de facture.pdf

    // convert in PDF
    require_once('../ModelE/pdf/html2pdf.class.php'); //inclusion de la class pdf
    try
    {
        //$width_in_mm = 108;
    //$height_in_mm = 59.2;
    //$html2pdf = new HTML2PDF('L', array($width_in_mm, $height_in_mm), 'fr', false, 'ISO-8859-15', 0);
        $html2pdf = new HTML2PDF('P', 'A5', 'fr');
//      $html2pdf->setModeDebug();
        #$html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        ob_end_clean();
        $html2pdf->Output('leaves'.$_REQUEST['idr'].'.pdf', '../ModeLE/leaves/');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
