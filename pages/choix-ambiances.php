<?php
include '../header_pages.php';
?>
<div class="container">
<div class="fil_ariane">
    <?php
    include_once "../functions/php/main.php";
       define('NOM_SITE', 'accueil', true);
       get_fil_ariane(array('final' => 'Ambiance'));
    ?>
</div>
<div class="bloc_explication_home bloc_choix-ambiances_home row">
    <h3><br><strong>Choissisez l’ambiance de votre diner</strong></h3>
    <p>Toutes les ambiances comprennent un menu complet et les éléments de décorations associées </p>
    <ul class="row col-md-10">
        <li class="col-md-4"><img src="" alt="ambiance">
            <h5>Royale</h5>
            <p>Un ambiance digne d’un conte de fée.</p>
            <a class="button-simple" href="/ambiance?ambiance=royale">Choisir cette ambiance</a>
        </li>
        <li class="col-md-4"><img src="" alt="menu">
            <h5>Urbaine/panorama</h5>
            <p>Les couleurs et la lumière de la ville</p>
            <a class="button-simple" href="/ambiance?ambiance=urbaine/panorama">Choisir cette ambiance</a>
        </li>
        <li class="col-md-4"><img src="" alt="date">
            <h5>Nature/forêt</h5>
            <p>Respirez un bonne bouffée d'air frais</p>
            <a class="button-simple" href="/ambiance?ambiance=nature/foret">Choisir cette ambiance</a>
        </li>
    </ul>
</div>
</div>
<?php
include '../footer.php';