<?php
include '../header.php';
?>
<?php
include_once "../functions/php/main.php";
$ambiance = $_GET['ambiance'];
   define('NOM_SITE', 'accueil', true);
   get_fil_ariane(array('./ambiances.php' => 'ambiances', 'final' => $ambiance));
?>
    <div class="row">
        <ul>
            <li class="col-lg-offset-1 col-md-1">
                <img src="" alt="photos1">
                <img src="" alt="photos2">
                <img src="" alt="photos3">
            </li>
            <li class="col-md-4">
                <img src="" alt="grande_photos">
            </li>
            <li class="col-md-5">
                <p>Ambiance</p>
                <h2>Royal</h2>
                <p>Vivez votre conte de fées et profitez d’un instant exceptionnel avec votre moitié. Mettez de côté dragons, sorcières et marâtres et savourez l’intimité de votre château.</p>
                <h4>inclus dans le pack</h4>
                <p>Le menu de votre choix parmi 3 propositions </p>
                <p>De la décoration</p>
                <p>Des fleurs</p>
                <a href="#">Réserver</a>
            </li>
        </ul>
    </div>
<div class="row no-padding">
    <div class="col-md-8 col-md-offset-2">
        <h3>Service en test gratuit</h3>
        <p>En ce moment nous testons nos services pour vous offre le meilleur. C’est pourquoi nous sélectionnerons parmi les inscrits 10 personnes qui testerons le service gratuitement. Commencez à choisir votre menu et remplir le formulaire pour être sélectionné ! </p>
    </div>
</div>

<?php
include '../footer.php';