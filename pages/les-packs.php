<?php
include '../header_pages.php';
?>
    <link rel="stylesheet" href="./css/style_pages_bleu.css">
<?php
include "../functions/php/main.php";
$data_ambiance = get_ambiance($pdo);
?>
    <div class="container">
        <div class="fil_ariane col-sm-offset-2">
            <?php
            include_once "../functions/php/main.php";
               define('NOM_SITE', 'accueil', true);
               get_fil_ariane(array('final' => 'Les packs'));
            ?>
        </div>
        <div class="bloc_pack">
<!--            <h3>Nos packs d’amour</h3>-->
            <div class="row">
                <img class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 boxpack" src="./img/boxpack.png" alt="boxpack">
                <div class="col-sm-5 col-sm-offset-1">
                    <img class=" cercle1" src="img/cercle_1.png" alt="cercle_1">
                    <img class=" cercle2" src="img/cercle_2.png" alt="cercle_2">
                    <h2>La<br>boxpack.</h2>
                    <p class="text-boxpack">Celle qui renferme tout ton pack pour une soirée <strong>WOUAH AMAZING !</strong><span><br>Et qu’on te livre à l’heure de ton choix.</span></p>
                    <p><span><i class="fas fa-check"></i> De la décoration</span><br><span><i class="fas fa-check"></i> Du textile de table</span><br><span><i class="fas fa-check"></i> Deux menus </span><br><span><i class="fas fa-check"></i> Des surprises</span></p>
                </div>
            </div>
        </div>

    </div>
</div>
    <div class="container">
        <div id="ambiance" class="bloc_explication_home bloc_choix-ambiances_home row">
            <p>Livreur d'amour, c'est notre projet </p>
            <h3><strong>Trouve la boxpack qui ressemble à ton couple</strong></h3>
            <ul class="row">
                <?php
                foreach ($data_ambiance as $value) {
                    ?>
                    <li class="col-sm-2">
                        <img src="./img/img-ambiances/<?=$value['photo1']?>" alt="<?=$value['photo1']?>">
                        <div>
                            <h5><?=$value['nom']?></h5>
                            <p><?=$value['intro']?></p>
                        </div>
                        <a class="button-simple" href="/ambiance?ambiance=<?=$value['code_nom']?>">Je choisis</a>
                    </li>
                    <?php
                };
                ?>
            </ul>
        </div>
    </div>
<?php
include '../footer.php';