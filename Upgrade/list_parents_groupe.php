<script>
    function CocheTout(ref, name) {
        var form = ref;

        while (form.parentNode && form.nodeName.toLowerCase() != 'form') {
            form = form.parentNode;
        }

        var elements = form.getElementsByTagName('input');

        for (var i = 0; i < elements.length; i++) {
            if (elements[i].type == 'checkbox' && elements[i].name == name) {
                elements[i].checked = ref.checked;
            }
        }
    }

</script>

<div align="center">
    <h2>Gestion des SMS</h2>
    <h2>Liste <small> des Parents</small></h2>
    <div class="content_form">
        <?php
// --------------- Etape 1 -----------------
        // On ?crit les liens vers chacune des pages
        // -----------------------------------------
        // On met dans une variable le nombre de enseignant qu'on veut par page
        $nombreDParentsParPage = 10; // Essayez de changer ce nombre pour voir :o)
        // On r?cup?re le nombre total de enseignants
        $retour = mysql_query('SELECT COUNT(*) AS nb_parentsgroup FROM eleve');
        $donnees1 = mysql_fetch_array($retour);
        $totalDesParentts = $donnees1['nb_parentsgroup'];

        // On calcule le nombre de pages ? creer
        $nombreDePages = ceil($totalDesParentts / $nombreDParentsParPage);

        // Puis on fait une boucle pour ?crire les liens vers chacune des pages
        echo 'Page : ';
        for ($i = 1; $i <= $nombreDePages; $i++) {
            if ($_SESSION["role"] == "Administrateur") {
                ?>
                <a href="indexadmin.php?page=<?php echo base64_encode('ubschoolphp/parents/list_parents'); ?>&parents=<?php echo $i; ?> " class="btn btn-info" ><?php echo $i; ?></a>  
                <?php
            } else if (($_SESSION["role"] == "Secretaire")) {
                ?>
                <a href="indexsecretaire.php?page=<?php echo base64_encode('ubschoolphp/parents/list_parents'); ?>&parents=<?php echo $i; ?> " class="btn btn-info" ><?php echo $i; ?></a>  
                <?php
            }
        }


        // --------------- Etape 2 ---------------
        // Maintenant, on va afficher les enseignants
        // ---------------------------------------

        if (isset($_GET['parents'])) {
            $pagmen = $_GET['parents']; // On r?cup?re le num?ro de la page indiqu? dans l'adresse (livreor.php?page=4)
        } else { // La variable n'existe pas, c'est la premi?re fois qu'on charge la page
            $pagmen = 1; // On se met sur la page 1 (par d?faut)
        }

        // On calcule le num?ro de la premiere enseignant qu'on prend pour le LIMIT de MySQL
        $premierParentAafficher = ($pagmen - 1) * $nombreDParentsParPage;
        ?>
        <form method="post" action="indexadmin.php?page=<?php echo base64_encode('ubschoolphp/sms/smsparentsgroupe') ?>">
            <table class="table table-bordered table-striped table-condensed" border="0">
                <thead>
                    <tr class="btn-info ">
                        <th><input onclick="CocheTout(this, 'tsmspa[]');" type="checkbox" /></th>
                        <th>Nom</th>
                        <th>Pr&eacute;nom</th>
                        <th>T&eacute;l&eacute;phone</th>
                        <th colspan="2">Op&eacute;ration</th>
                    </tr>
                </thead>
                <?php
                // On r?cup?re les 2 derniers billets
                list_parentmessage($premierParentAafficher, $nombreDParentsParPage);
                ?>
            </table>


            <h3 class="modal-title">Message &agrave; envoyer aux parents s&eacute;lectionn&eacute;s</h3>  

            <div class="form-group">
                <textarea style="height: 50px;"name="messageenss" placeholder="Saisir le message ici..." class="form-control"></textarea>
            </div>

            <input type="submit" name="btn_smses" value="Envoyer les SMS" class="btn btn-lg btn-info" />
        </form>
    </div>
</div>      