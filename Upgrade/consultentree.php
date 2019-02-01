<?php //$page_active=" Founisseurs"; ?>
<div class="row">
    <div class="col-lg-12">
        <a href="javascript:history.go(-1)" class="btn btn-info btn-sm">Pr&eacute;c&eacute;dent</a>
        <h2 class="page-header">Liste <small> des Entrées</small></h2>
        <div class="content_form">
            <?php
// --------------- Etape 1 -----------------
            // On ?crit les liens vers chacune des pages
            // -----------------------------------------
            // On met dans une variable le nombre de pointagence qu'on veut par page
            $nombreDentreeParPage = 10; // Essayez de changer ce nombre pour voir :o)
            // On r?cup?re le nombre total de pointagences
            $retour = mysql_query('SELECT COUNT(*) AS nb_en FROM entree ');
            $donnees1 = mysql_fetch_array($retour);
            $totalDesEntree = $donnees1['nb_en'];

            // On calcule le nombre de pages ? cr?er
            $nombreDePages = ceil($totalDesEntree / $nombreDentreeParPage);

            // Puis on fait une boucle pour ?crire les liens vers chacune des pages
            echo 'Page : ';
            for ($i = 1; $i <= $nombreDePages; $i++) {
                ?>
                <a href="indexadmin.php?page=<?php echo base64_encode('pageskribi/entree/consultentree'); ?>&en=<?php echo $i; ?> " class="btn btn-info" ><?php echo $i; ?></a>  
                <?php
            }


            // --------------- Etape 2 ---------------
            // Maintenant, on va afficher les pointagences
            // ---------------------------------------

            if (isset($_GET['en'])) {
                $pagmen = $_GET['en']; // On r?cup?re le num?ro de la page indiqu? dans l'adresse (livreor.php?page=4)
            } else { // La variable n'existe pas, c'est la premi?re fois qu'on charge la page
                $pagmen = 1; // On se met sur la page 1 (par d?faut)
            }

            // On calcule le num?ro de la premiere pointagence qu'on prend pour le LIMIT de MySQL
            $premientreAafficher = ($pagmen - 1) * $nombreDentreeParPage;
            ?>
            <table class="table table-bordered table-striped table-condensed" border="0">
                <thead>
                    <tr class="btn-info ">
                        <th>Nom de l'article</th>
                        <th>Quantité</th>
                        <th>Prix d'achat</th>
                        <th>Prix Total d'achat</th>
                        <th>Date d'achat</th>
                        <th colspan="2">Op&eacute;ration</th>
                    </tr>
                </thead>
                <?php
                // On r?cup?re les 2 derniers billets
                lister_entree($premientreAafficher, $nombreDentreeParPage);
                ?>
            </table>

        </div>
    </div>
</div>