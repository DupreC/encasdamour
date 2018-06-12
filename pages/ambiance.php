<?php
include '../header.php';
?>
<?php
include "../functions/php/main.php";
$ambiance = $_GET['ambiance'];
   define('NOM_SITE', 'accueil', true);
   get_fil_ariane(array('./choix-choix-ambiances.php' => 'Ambiances', 'final' => $ambiance));
   $date_ambiance = get_ambianceSlug($pdo,$ambiance);
?>
    <div class="row bloc_ambiance">
        <ul>
            <li class="col-lg-offset-1 col-md-1">
                <img src="" alt="photos1">
                <img src="" alt="photos2">
                <img src="" alt="photos3">
            </li>
            <li class="col-md-4">
                <img src="" alt="grande_photos">
            </li>
            <li class="col-md-5 infos">
                <div class="row">
                    <div class="col-md-8">
                        <p>Ambiance</p>
                        <h2><?=$date_ambiance['nom']?></h2>
                    </div>
                    <p class="col-md-4 prix"><?=$date_ambiance['prix']?>€ <br><span>/personne</span></p>
                </div>
                <p class="description"><?=$date_ambiance['description']?></p>
                <h4>inclus dans le pack</h4>
                <p class="inclus"><i class="fas fa-check"></i> <?=$date_ambiance['inclus_menu1']?></p>
                <p class="inclus"><i class="fas fa-check"></i> <?=$date_ambiance['inclus_menu2']?></p>
                <p class="inclus"><i class="fas fa-check"></i> <?=$date_ambiance['inclus_menu3']?></p>
                <p><a class="button-simple"  href="#">Réserver</a></p>
            </li>
        </ul>
    </div>
<div class="row no-padding bloc_service">
    <div class="col-md-8 col-md-offset-2">
        <h3>Service en test gratuit</h3>
        <p>En ce moment nous testons nos services pour vous offre le meilleur. C’est pourquoi nous sélectionnerons parmi les inscrits 10 personnes qui testerons le service gratuitement. Commencez à choisir votre menu et remplir le formulaire pour être sélectionné ! </p>
    </div>
</div>

<?php
include '../footer.php';