<?php
include '../header_pages.php';
?>
    <link rel="stylesheet" href="./css/style_pages_bleu.css">
    <div class="container">
<div class="fil_ariane col-md-2 col-md-offset-0 col-md-3 col-md-offset-0">
    <?php
    include_once "../functions/php/main.php";
       define('NOM_SITE', 'Accueil', true);
       get_fil_ariane(array('final' => 'L\'équipe'));
    ?>
</div>
    <div class="row bloc_equipe no-padding">
        <div class="cercle1_equipe"><img src="./img/cercle_1.png" alt="cercle1"></div>
        <div class="cercle2_equipe"><img src="./img/cercle_2.png" alt="cercle2"></div>
    <h2>L'équipe d’amour</h2>
    <h3 class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">Il n'y a pas de hasard, il n'y a que des rendez-vous.</h3>
    <p class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">Paul Eluard</p>
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
    <ul class="row">
        <li class="col-md-4 col-sm-4 col-xs-10 col-md-offset-0 col-sm-offset-0 col-xs-offset-1"><img id="UX-Photo" src="./img/photos/UX.png" alt="ux">
            <h4>LES EMPATHIQUES</h4>
            <h5>Les ux designers</h5>
            <p>Ceux qui dessinent le contour et qui s’assurent que tout le monde soit heureux.</p>
        </li>
        <li class="col-md-4 col-sm-4 col-xs-10 col-md-offset-0 col-sm-offset-0 col-xs-offset-1"><img id="DG-Photo" src="./img/photos/DG.png" alt="graphistes">
            <h4>LES DESSINATEURS</h4>
            <h5>Les graphistes</h5>
            <p>Ceux qui colorient avec leurs palettes et qui font de jolis dessins </p>
        </li>
        <li class="col-md-4 col-sm-4 col-xs-10 col-md-offset-0 col-sm-offset-0 col-xs-offset-1"><img id="MD-Photo" src="./img/photos/MD.png" alt="motion">
            <h4>LE MAGICIEN</h4>
            <h5>LE MOTION DESIGNER</h5>
            <p>Celui qui fait bouger les images</p>
        </li>
    </ul>
    <ul class="row pousse-footer">
        <li class="col-md-4 col-sm-4 col-xs-10 col-md-offset-0 col-sm-offset-0 col-xs-offset-1"><img id="DW-Photo" src="./img/photos/DEV.png" alt="genie_fou">
            <h4>LE GENIE FOU</h4>
            <h5>LE DEVELOPPEUR</h5>
            <p>Celui qui fabrique internet</p>
        </li>
         <li class="col-md-4 col-sm-4 col-xs-10 col-md-offset-0 col-sm-offset-0 col-xs-offset-1"><img id="CM-Photo" src="./img/photos/CM.png" alt="cm">
             <h4>LA NARRATRICE</h4>
             <h5>LA COMMUNITY MANAGER</h5>
             <p>Celle qui vous lit de jolies histoires</p>
         </li>
         <li class="col-md-4 col-sm-4 col-xs-10 col-md-offset-0 col-sm-offset-0 col-xs-offset-1"><img id="CP-Photo" src="./img/photos/CP.png" alt="chef_de_projet">
             <h4>LE MARIONNETTISTE</h4>
             <h5>LE CHEF DE PROJET</h5>
             <p>Celui qui tire les ficelles</p>
         </li>
     </ul>
        </div>
    </div>
</div>
<div class="equipe_forme2"><img src="./img/Forme2.png"></div>
<script>
    $(function(){
        $("#UX-Photo").on({
            mouseenter: function(){
                $(this).attr('src','./img/photos/UX-empathiques@1x.png');
            },
            mouseleave: function(){
                $(this).attr('src','./img/photos/UX.png');
            }
        });

    });

    $(function(){
        $("#DG-Photo").on({
            mouseenter: function(){
                $(this).attr('src','./img/photos/DG-dessinateurs.png');
            },
            mouseleave: function(){
                $(this).attr('src','./img/photos/DG.png');
            }
        });

    });
    $(function(){
        $("#MD-Photo").on({
            mouseenter: function(){
                $(this).attr('src','./img/photos/Greg-magicien.png');
            },
            mouseleave: function(){
                $(this).attr('src','./img/photos/MD.png');
            }
        });

    });
    $(function(){
        $("#DW-Photo").on({
            mouseenter: function(){
                $(this).attr('src','./img/photos/Colin-genie.png');
            },
            mouseleave: function(){
                $(this).attr('src','./img/photos/DEV.png');
            }
        });

    });
    $(function(){
        $("#CM-Photo").on({
            mouseenter: function(){
                $(this).attr('src','./img/photos/Manon-Narratrice.png');
            },
            mouseleave: function(){
                $(this).attr('src','./img/photos/CM.png');
            }
        });

    });
    $(function(){
        $("#CP-Photo").on({
            mouseenter: function(){
                $(this).attr('src','./img/photos/Corentin-marionnetiste.png');
            },
            mouseleave: function(){
                $(this).attr('src','./img/photos/CP.png');
            }
        });

    });</script>
<?php
include '../footer.php';