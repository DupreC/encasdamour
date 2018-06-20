<?php
include '../header_pages.php';
?>
<div class="fil_ariane">
    <?php
    include_once "../functions/php/main.php";
       define('NOM_SITE', 'accueil', true);
       get_fil_ariane(array('final' => 'equipe'));
    ?>
</div>
<div class="row bloc_equipe no-padding">
    <h2>L’équipe d’amour</h2>
    <p class="col-md-8 col-md-offset-2">Encas D’amour c’est des copains qui ont toujours eu du mal à trouver le cadeau qui va faire plaisir à leurs amoureux et amoureuses.
        Nous proposons donc des expériences dinatoires pour permettre à tous les amoureux de se retrouver entre eux le temps d’une soirée. Faire de votre soirée romantique un expérience intime et parfaite, la qualité d’un restaurant en plus, c’est notre objectif.
    </p>
    <ul class="row">
        <li class="col-md-2 col-md-offset-2"><img src="" alt="ux">
            <h4>LES UX</h4>
            <p><strong>Les ampathiques</strong>
                <br>Celui qui dessine le contour et qui s’assure que les princes et princesses soient heureux pour toujours. </p>
        </li>
        <li class="col-md-2"><img src="" alt="graphistes">
            <h4>Les graphistes</h4>
            <p><strong>LES DESSINATEURS</strong>
                <br>Ceux qui colorient avec leurs palettes et qui font de jolies dessins </p>
        </li>
        <li class="col-md-2"><img src="" alt="motion">
            <h4>LE MOTION</h4>
            <p><strong>LE MAGICIEN</strong>
                <br>Celui qui fait bouger les dessins</p>
        </li>
        <li class="col-md-2"><img src="" alt="genis_fous">
            <h4>Les développeurs</h4>
            <p><strong>Les génis fous</strong>
                <br>Ceux qui frabriquent internet</p>
        </li>
    </ul>
     <ul class="row">
         <li class="col-md-2 col-md-offset-4"><img src="" alt="cm">
             <h4>La community manager</h4>
             <p><strong>La naratrice</strong>
                 <br>Celle qui vous lit de jolies histoires</p>
         </li>
         <li class="col-md-2"><img src="" alt="chef_de_projet">
             <h4>Le chef de projet</h4>
             <p><strong>Le morionnettiste</strong>
                 <br>Celui qui tire les ficelles</p>
         </li>
     </ul>
</div>
<?php
include '../footer.php';