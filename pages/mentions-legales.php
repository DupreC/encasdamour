<?php
include '../header_pages.php';
include_once "../functions/php/main.php";
?>
<div class="container">
<div class="bloc_mentions-legales col-sm-8 col-sm-offset-2">
    <div class="fil_ariane">
        <?php
        define('NOM_SITE', 'accueil', true);
        get_fil_ariane(array('final' => 'Mentions légales'));
        ?>
    </div>
    <h2>Mentions légales</h2>
    <h3>Mentions légales</h3>
    <p>
        Encas d’amour <br>
        Adresse : 10 rue du coeur - 75002 PARIS - France <br>
        Email : hello@encasdamour.fr <br>
        Nom de l’url du site : www.encasdamour.fr
    </p>
    <h3>Hébergement</h3>
    <p>
        Nom hébergeur : OVH <br>Adresse : 2 rue Kellermann - 59100 Roubaix - France <br>Site : https://www.ovh.com/
    </p>
    <h3>Conditions d'utilisation</h3>
    <p>
        Le site www.encasdamour.fr est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…
    </p>
    <h3>Propriété intellectuelle</h3>
    <p>
        Tout le contenu du présent site www.encasdamour.fr, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société ENCAS D’AMOUR à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.
        <br>
        Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l’accord exprès par écrit de ENCAS D’AMOUR. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.
    </p>
</div>
</div>
</div>
<?php
include '../footer.php';
