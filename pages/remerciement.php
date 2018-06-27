<?php
include '../header_pages.php';
include "../functions/php/main.php";
?>
    <style>
        .background-body{
            background-color: transparent;
        }
    </style>
<div class="container">
    <div class="fil_ariane col-sm-offset-1">
        <?php
        define('NOM_SITE', 'Accueil', true);
        get_fil_ariane(array('final' => 'Remerciement'));
        ?>
    </div>
    <div class="row col-sm-8 col-sm-offset-2 remerciement">
        <h2>T’es au top !</h2>
        <p>Merci pour ta réservation, tu as choisi la meilleure surprise qui soit ! <br>
            C’est maintenant à nous de jouer pour épater ta moitié. </p>
        <p>Tu receveras un mail de confirmation de ta réservation et très prochainement tu sauras si tu fais parti de nos dix beta testeurs bénéficiant du service gratuitement. </p>
        <img src="./img/cycliste_remerciement.png" alt=""> <br>
        <p><a href="./index.php" class="button-simple">Retour à l’accueil</a></p>
    </div>
</div>
</div>
<?php
include '../footer.php';
?>