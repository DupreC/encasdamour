<?php
include '../header_pages.php';
include "../functions/php/main.php";
$ambiance = $_GET['ambiance'];
$data_ambiance = get_ambianceSlug($pdo,$ambiance);
$data_menu_1 = get_menuSlug($pdo,'menu_dolce_vita');
$data_menu_2 = get_menuSlug($pdo,'menu_shanghai');
$data_menu_3 = get_menuSlug($pdo,'menu_dune_de_sable');
?>
    <div class="body_background">

<div class="container">
    <div class="fil_ariane">
        <?php
        define('NOM_SITE', 'accueil', true);
        get_fil_ariane(array('./choix-ambiances.php' => 'Ambiances', 'final' => $data_ambiance['nom']));
        ?>
    </div>
        <style>
            </style>
        <script src="./functions/js/main.js"></script>

        <div class="row bloc_ambiance">
            <ul>
                <li class="col-lg-offset-1 col-md-5">
                    <p class="grande_photo"><img src="<?=$data_ambiance['photo1']?>" alt="grande_photos"></p>
                    <p class="petites_photos"><img class="petite_photo" src="<?=$data_ambiance['photo1']?>" alt="photos1"><img class="petite_photo" src="<?=$data_ambiance['photo2']?>" alt="photos2"></p>
                    <div class="sos">
                        <h3>SOS</h3>
                        <h4>Tu as un doute ? Par ici le coup de pouce ! </h4>
                        <p>On sait que c’est pas toujours facile de se lancer quand on est pas certain que ça va plaire. Alors pour t’aider, on a mis en place un petit quiz que tu peux envoyer ni vu ni connu à ton ou ta partenaire. Celui-ci est complètement neutre pour ne pas éveiller les supsons.
                            Il te permettra de savoir quel pack choisir. </p>
                        <p><button>Envoyer le quiz</button></p>
                    </div>
                </li>
                <li class="col-md-6 infos">
                <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-9">
                                <p><span class="button-simple"><?=$data_ambiance['tag1']?></span><span class="button-simple"><?=$data_ambiance['tag2']?></span><span class="button-simple"><?=$data_ambiance['tag3']?></span></p>
                                <h2><?=$data_ambiance['nom']?></h2>
                                <p class="intro"><?=$data_ambiance['intro']?></p>
                            </div>
                            <p class="col-md-3 prix">40€<br><span>/personne</span></p>
                        </div>
                        <p class="line"></p>
                        <h3>DESCRIPTION </h3>
                        <h4>Ce pack est-il fait pour mon couple ? </h4>
                        <p class="description"><?=$data_ambiance['description']?></p>
                        <h4>inclus dans le pack</h4>
                        <p>Nous avons sélectionnés les meilleurs éléments pour te proposer une expérience unique est adaptée au besoin de ton couple. </p>
                        <ul class="sens">
                            <li>
                                <p class="icon ouie">Pour l’ouïe</p>
                                <p class="inclus"><span>Une playlist adaptée</span></p>
                            </li>
                            <li>
                                <p class="icon vue">Pour la vue</p>
                                <p class="inclus"><span>Une décoration romantique</span><br><?=$data_ambiance['vue']?></p>
                            </li>
                            <li>
                                <p class="icon odorat">Pour  l’odorat</p>
                                <p class="inclus"><span><?=$data_ambiance['odorat']?></span></p>
                            </li>
                            <li>
                                <p class="icon gout">Pour le goût</p>
                                <p class="inclus"><span>menu</span><br>(parmi trois propositions)</p>
                            </li>
                            <li>
                                <p class="icon toucher">Pour le toucher</p>
                                <p class="inclus"><span><?=$data_ambiance['toucher']?></span><br></p>
                            </li>
                        </ul>
                    </div>
                    <p><a class="button-simple"  href="#">Réserver</a></p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row bloc_form" style="position: relative">
    <div class="contain_form slider-one-active">
        <div class="steps">
            <div class="step step-one">
                <div class="liner"></div>
                <span>Lieux</span>
            </div>
            <div class="step step-two">
                <div class="liner"></div>
                <span>Menu</span>
            </div>
            <div class="step step-three">
                <div class="liner"></div>
                <span>Date</span>
            </div>
            <div class="step step-four">
                <div class="liner"></div>
                <span>Vous</span>
            </div>
        </div>
        <div class="line">
            <div class="dot-move"></div>
            <div class="dot one"></div>
            <div class="dot two"></div>
            <div class="dot three"></div>
            <div class="dot four"></div>
        </div>
        <div class="slider-ctr">
            <div class="slider">
                <form class="slider-form slider-one">
                    <div class="row" id="code_postal">
                        <h4>Où souhaitez-vous être livré ?</h4>
                        <div id="locationField">
                            <input id="autocomplete" placeholder="Enter your address" type="text">
                        </div>
                    </div>
                    <button class="first button-simple">Valider</button>
                </form>
                <form class="slider-form slider-two">
                    <div class="bloc_menu" id="code_postal">
                        <h4>Choisissez votre menu</h4>
                        <p>Nous vous proposons une sélection de plats issus des meilleurs artisanstraiteurs parisiens composés de produits frais et quand nous le pouvons, locaux.</p>
                        <ul class="row">
                            <li class="col-md-4"><img src="" alt="<?=$data_menu_1['photo']?>">
                                <h5><?=$data_menu_1['nom']?></h5>
                                <p class="titre_menu">ENTRÉE</p>
                                <p class="text_menu"><?=$data_menu_1['entree']?></p>
                                <p class="titre_menu">PLAT</p>
                                <p class="text_menu"><?=$data_menu_1['plat']?></p>
                                <p class="titre_menu">DESSERT</p>
                                <p class="text_menu"><?=$data_menu_1['dessert']?></p>
                            </li>
                            <li class="col-md-4"><img src="" alt="<?=$data_menu_2['photo']?>">
                                <h5><?=$data_menu_2['nom']?></h5>
                                <p class="titre_menu">ENTRÉE</p>
                                <p class="text_menu"><?=$data_menu_2['entree']?></p>
                                <p class="titre_menu">PLAT</p>
                                <p class="text_menu"><?=$data_menu_2['plat']?></p>
                                <p class="titre_menu">DESSERT</p>
                                <p class="text_menu"><?=$data_menu_2['dessert']?></p>
                            </li>
                            <li class="col-md-4"><img src="" alt="<?=$data_menu_3['photo']?>">
                                <h5><?=$data_menu_3['nom']?></h5>
                                <p class="titre_menu">ENTRÉE</p>
                                <p class="text_menu"><?=$data_menu_3['entree']?></p>
                                <p class="titre_menu">PLAT</p>
                                <p class="text_menu"><?=$data_menu_3['plat']?></p>
                                <p class="titre_menu">DESSERT</p>
                                <p class="text_menu"><?=$data_menu_3['dessert']?></p>
                            </li>
                        </ul>
                    </div>
                    <button class="row second button-simple">Valider</button>
                </form>
                <form class="slider-form slider-three">
                    <h4>Choisissez une data et un horaire</h4>
                    <?php include 'modules/calendrier.php';?>
                    <button class="row third button-simple">Valider</button>
                </form>
                <div class="slider-form slider-four">
                    <h2>Hello, <span class="yourname"></span></h2>
                    <h3>Thank you for your input!
                    </h3>
                    <a class="reset" href="">Reset</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACNkob18sCtX5tS7PyfPvPD4HpQC-tOlQ&libraries=places&callback=initAutocomplete" async defer></script>

    <script>
        var $firstButton = $(".first"),
        $secondButton = $(".second"),
            $thirdButton = $(".third"),
            $input = $("input"),
            $name = $(".name"),
            $more = $(".more"),
            $yourname = $(".yourname"),
            $reset = $(".reset"),
            $ctr = $(".contain_form");

        $firstButton.on("click", function(e){
            $(this).text("Saving...").delay(900).queue(function(){
                $ctr.addClass("two slider-two-active").removeClass("four slider-one-active");
            });
            e.preventDefault();
        });

        $secondButton.on("click", function(e){
            $(this).text("Saving...").delay(900).queue(function(){
                $ctr.addClass("three slider-three-active").removeClass("two slider-two-active slider-one-active");
            });
            e.preventDefault();
        });
        $thirdButton.on("click", function(e){
            $(this).text("Saving...").delay(900).queue(function(){
                $ctr.addClass("four slider-four-active").removeClass("three slider-three-active slider-two-active slider-two-active");
                $name = $name.val();
                if($name == "") {
                    $yourname.html("Anonymous!");
                }
                else { $yourname.html($name+"!"); }
            });
            e.preventDefault();
        });
    </script>
<?php
include '../footer.php';