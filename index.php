<?php
include 'header_home.php';
include "functions/php/main.php";
$data_ambiance = get_ambiance($pdo);
?>
<div class="container">
    <div class="bloc_accueil_home row no-padding">
        <div class="col-sm-6 no-padding">
            <div class="col-md-10 no-padding">
                <h2>Ne cherches plus, <br> ton plus beau cadeau, <br> c’est nous ! </h2>
                <p class="col-md-11">On te livre tout ce dont tu as besoin pour un moment en amoureux unique et inoubliable. </p>
                <a class="button-simple" href="/les-packs">Tentez l’expérience</a>
            </div>
        </div>
        <div class="col-sm-1 cercle">
            <img class="desktop" src="img/cercle_1.png" alt="cercle_1">
            <img class="desktop" src="img/cercle_2.png" alt="cercle_2">
        </div>
        <div class="col-sm-5 img_header">
            <img class="mobile" src="img/illu_header.png" alt="cercles">
            <img class="desktop tablette"  src="img/illu_header.png" alt="img_header">
        </div>
    </div>
    <div class="bloc_cestquoi row">
        <img class="col-md-offset-1 col-md-4 desktop" src="img/illu_quoi.png" alt="c'est quoi">
        <div class="col-lg-offset-1 col-lg-5 col-md-6 row no-padding">
            <h3>Les complices de ton diner romantique<br><strong>C’est quoi Encas d’Amour ?</strong></h3>
            <p class="col-sm-10 col-sm-offset-1 col-md-offset-0 col-md-12">Encas d'Amour c'est ton meilleur acolyte pour l'organisation d'une soirée parfaite entre amoureux . On se charge de sélectionner les meilleurs produits (menus, fleurs, bougies, textiles de table...), qu'on te livre dans une superbe BoxPack.<br>
                Tu peux choisir la BoxPack qui correspond le plus à la personnalité de ton couple, pour des retrouvailles uniques.<br>
                Une fois réservé, tu n'as plus qu'à profiter de ce moment hors du temps avec ta moitié !</p>
            <img class="mobile tablette" src="img/illu_quoi.png" alt="c'est quoi">
        </div>
    </div>
    <div id="explication" class="bloc_explication_home row">
        <svg class="background" width="428" height="559" viewBox="0 0 428 559" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 464.982C53.1252 514.842 98.9122 537.986 99.4257 538.244C107.431 542.6 115.84 546.376 124.655 549.572C196.828 574.74 275.141 547.927 320.982 488.129C320.982 488.129 397.95 394.832 425.356 211.281C439.824 126.326 393.874 42.0283 313.2 13.7102C304.386 10.5144 295.435 8.25705 286.392 6.62545C286.392 6.62545 149.56 -22.407 0 41.0761V464.982Z" fill="#B9C7F6"/>
        </svg>

        <h3>Aimer c'est bien, faire plaisir c'est mieux<br><strong>Comment ça marche ?</strong></h3>
        <ul class="">
            <li class="col-lg-2 col-sm-3 col-lg-offset-2 col-sm-offset-1">
                <img src="img/pack_home.png " alt="ambiance">
                <h5>Une Boxpack</h5>
                <p>Choisis le pack qui correspond le plus à ton couple</p>
            </li>
            <li class="col-lg-2 col-sm-3 col-sm-offset-1">
                <img src="img/picto_menu.png" alt="menu">
                <h5>Un menu</h5>
                <p>Choisis le menu qui te convient parmi quatre propositions</p>
            </li>
            <li class="col-lg-2 col-sm-3 col-sm-offset-1">
                <img src="img/picto_calendar.png" alt="date">
                <h5>Une date</h5>
                <p>Dis-nous quand et à quelle heure tu veux qu’on te livre ta Boxpack.</p>
            </li>
        </ul>
        <div class="ellipse">
            <img src="img/Ellipse.png" alt="Ellipse">
            <img src="img/Ellipse2.png" alt="Ellipse2">
        </div>
    </div>
    <div id="ambiance" class="bloc_explication_home bloc_choix-ambiances_home row">
        <img class="background" src="img/Subtract.png" alt="">
        <p>Livreur d'amour, c'est notre projet </p>
        <h3><strong>Trouve la boxpack qui ressemble à ton couple</strong></h3>
        <ul class="row">
            <?php
            foreach ($data_ambiance as $value) {
            ?>
            <li class="col-sm-2">
                <img src="img/img-ambiances/<?=$value['photo1']?>" alt="<?=$value['photo1']?>">
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
include 'footer.php';