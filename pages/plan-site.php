<?php
include '../header_pages.php';
?>
<div class="fil_ariane">
    <?php
    include_once "../functions/php/main.php";
    define('NOM_SITE', 'accueil', true);
    get_fil_ariane(array('final' => 'Plan du site'));
    ?>
</div>
    <div class="bloc_plan-site">
        <h2>Plant du site</h2>
        <h3>Acceuil</h3>
        <h3>Les ambiances</h3>
        <h3>L’équipe d’amour</h3>
        <h3>Mentions légales</h3>
    </div>
<?php
include '../footer.php';
