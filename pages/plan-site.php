<?php
include '../header_pages.php';
?>
    <style>
        .background-body{
            background-color: #fff;
        }
        .plan-site{
            height: 49.8vh;
        }
    </style>
<div class="container">
    <div class="col-sm-8 col-sm-offset-2 plan-site">
        <div class="fil_ariane">
            <?php
            include_once "../functions/php/main.php";
            define('NOM_SITE', 'accueil', true);
            get_fil_ariane(array('final' => 'Plan du site'));
            ?>
        </div>
            <div class="bloc_plan-site">
                <h2>Plan du site</h2>
                <h4><a href="/">Acceuil</a></h4>
                <h4><a href="/les-packs">Les packs</a></h4>
                <ul class="sous-menu_plan-site">
                    <li><a href="/ambiance?ambiance=hymne_a_lamour">Hymne à l’amour </a></li>
                    <li><a href="/ambiance?ambiance=passion_ardente">Passion ardente</a></li>
                    <li><a href="/ambiance?ambiance=sous_les_projecteurs">Sous les projecteurs</a></li>
                    <li><a href="/ambiance?ambiance=espieglerie">Espièglerie</a></li>
                    <li><a href="/ambiance?ambiance=je_taime_moi_non_plus">Je t’aime moi non plus</a></li>
                </ul>
                <h4><a href="/equipe">L'équipe</a></h4>
                <h4><a target="_blank" href="/media/CP_Encas_d_amour.pdf">Presse</a></h4>
            </div>
    </div>
</div>
<?php
include '../footer.php';
