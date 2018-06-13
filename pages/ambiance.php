<?php
include '../header.php';
?>
<?php
include "../functions/php/main.php";
$ambiance = $_GET['ambiance'];
   define('NOM_SITE', 'accueil', true);
   get_fil_ariane(array('./choix-choix-ambiances.php' => 'Ambiances', 'final' => $ambiance));
   $date_ambiance = get_ambianceSlug($pdo,$ambiance);
   $date_menu_1 = get_menuSlug($pdo,'menu_dolce_vita');
   $date_menu_2 = get_menuSlug($pdo,'menu_shanghai');
   $date_menu_3 = get_menuSlug($pdo,'menu_dune_de_sable');
?>
    <style>
        </style>
    <script src="./functions/js/main.js"></script>

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
                            <li class="col-md-4"><img src="" alt="<?=$date_menu_1['photo']?>">
                                <h5><?=$date_menu_1['nom']?></h5>
                                <p class="titre_menu">ENTRÉE</p>
                                <p class="text_menu"><?=$date_menu_1['entree']?></p>
                                <p class="titre_menu">PLAT</p>
                                <p class="text_menu"><?=$date_menu_1['plat']?></p>
                                <p class="titre_menu">DESSERT</p>
                                <p class="text_menu"><?=$date_menu_1['dessert']?></p>
                            </li>
                            <li class="col-md-4"><img src="" alt="<?=$date_menu_2['photo']?>">
                                <h5><?=$date_menu_2['nom']?></h5>
                                <p class="titre_menu">ENTRÉE</p>
                                <p class="text_menu"><?=$date_menu_2['entree']?></p>
                                <p class="titre_menu">PLAT</p>
                                <p class="text_menu"><?=$date_menu_2['plat']?></p>
                                <p class="titre_menu">DESSERT</p>
                                <p class="text_menu"><?=$date_menu_2['dessert']?></p>
                            </li>
                            <li class="col-md-4"><img src="" alt="<?=$date_menu_3['photo']?>">
                                <h5><?=$date_menu_3['nom']?></h5>
                                <p class="titre_menu">ENTRÉE</p>
                                <p class="text_menu"><?=$date_menu_3['entree']?></p>
                                <p class="titre_menu">PLAT</p>
                                <p class="text_menu"><?=$date_menu_3['plat']?></p>
                                <p class="titre_menu">DESSERT</p>
                                <p class="text_menu"><?=$date_menu_3['dessert']?></p>
                            </li>
                        </ul>
                    </div>
                    <button class="row second button-simple">Valider</button>
                </form>
                <form class="slider-form slider-three">
                    <h2>test</h2>
                    <div class="label-ctr">
                        <label class="radio">
                            <input type="radio" value="happy" name="condition">
                            <div class="emot happy">
                                <div class="mouth sad"></div>
                            </div>
                        </label>
                        <label class="radio">
                            <input type="radio" value="happy" name="condition">
                            <div class="emot happy">
                                <div class="mouth smile"></div>
                            </div>
                        </label>
                    </div>
                    <button class="third button-simple">Valider</button>
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