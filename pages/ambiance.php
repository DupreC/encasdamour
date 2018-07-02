<?php
include '../header_pages.php';
?>
    <style>
        @media screen and (max-width:768px) {
            footer {
                background-color: #4D43B0;
            }

            footer ul #mc_embed_signup_scroll h3 {
                color: #fff;
            }
        }
        header .nav .packs{
            border-bottom: 3px solid #FFA0A4;
        }
    </style>
<?php
include "../functions/php/main.php";
$ambiance = $_GET['ambiance'];
$data_ambiance = get_ambianceSlug($pdo,$ambiance);
$data_menu = get_menu($pdo);
?>

<div class="container">
    <div class="fil_ariane col-sm-offset-1">
        <?php
        define('NOM_SITE', 'Accueil', true);
        get_fil_ariane(array('./les-packs.php' => 'Les packs', 'final' => $data_ambiance['nom']));
        ?>
    </div>
        <style>
            </style>
        <script src="./functions/js/main.js"></script>

        <div class="row bloc_ambiance">
            <ul>
                <li class="desktop col-md-offset-1 col-md-5">
                    <div class="col-md-offset-2 col-md-10">
                        <p class="grande_photo"><img src="./img/img-ambiances/<?=$data_ambiance['photo1']?>" alt="grande_photos"></p>
                        <p class="petites_photos"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo1']?>" alt="photos1"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo2']?>" alt="photos2"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo3']?>" alt="photos4"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo4']?>" alt="photos4"></p>
<!--                        <div class="sos">-->
<!--                            <h3>SOS</h3>-->
<!--                            <h4>Tu as un doute ? Par ici le coup de pouce ! </h4>-->
<!--                            <p>On sait que c’est pas toujours facile de se lancer quand on est pas certain que ça va plaire. Alors, on a mis en place un quiz que tu peux envoyer ni vu ni connu à ton ou ta partenaire. Celui-ci est complètement neutre et n’éveille pas les supsons.</p>-->
<!--                            <p class="quizz"><a href="#" class="button-simple">Envoyer le quiz</a></p>-->
<!--                        </div>-->
                    </div>
                </li>
                <li class="col-md-5 infos">
                <div class="col-md-10">
                        <div class="row">
                            <div class="tablette col-md-offset-2 col-md-10">
                                <p class="grande_photo"><img src="./img/img-ambiances/<?=$data_ambiance['photo1']?>" alt="grande_photos"></p>
                                <p class="petites_photos"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo1']?>" alt="photos1"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo2']?>" alt="photos2"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo3']?>" alt="photos4"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo2']?>" alt="photos2"></p>
                                <!--                        <div class="sos">-->
                                <!--                            <h3>SOS</h3>-->
                                <!--                            <h4>Tu as un doute ? Par ici le coup de pouce ! </h4>-->
                                <!--                            <p>On sait que c’est pas toujours facile de se lancer quand on est pas certain que ça va plaire. Alors, on a mis en place un quiz que tu peux envoyer ni vu ni connu à ton ou ta partenaire. Celui-ci est complètement neutre et n’éveille pas les supsons.</p>-->
                                <!--                            <p class="quizz"><a href="#" class="button-simple">Envoyer le quiz</a></p>-->
                                <!--                        </div>-->
                            </div>
                            <div class="col-md-10">
                                <p><span class="button-simple"><?=$data_ambiance['tag1']?></span><span class="button-simple"><?=$data_ambiance['tag2']?></span><span class="button-simple"><?=$data_ambiance['tag3']?></span></p>
                                <h2><?=$data_ambiance['nom']?></h2>
                                <p class="intro"><?=$data_ambiance['intro']?></p>
                            </div>
                            <p class="col-md-2 prix">40€<br><span>/personne</span></p>
                        </div>
                        <p class="line"></p>
                        <h3>DESCRIPTION </h3>
                        <h4>Ce pack est-il fait pour mon couple ? </h4>
                        <p class="description"><?=$data_ambiance['description']?></p>
                        <h4>inclus dans le pack</h4>
                        <p>Nous avons sélectionnés les meilleurs éléments pour te proposer une expérience unique et adaptée aux besoins de ton couple. </p>
                        <ul class="sens">
                            <li>
                                <p class="icon ouie"><img src="./img/picto_ouie.png" alt="ouie">Pour l’ouïe</p>
                                <p class="inclus"><span>Une playlist adaptée</span></p>
                            </li>
                            <li>
                                <p class="icon vue"><img src="./img/picto_vue.png" alt="vue">Pour la vue</p>
                                <p class="inclus"><span><?=$data_ambiance['vue1']?></span><br>(guirlandes, bougeoires, nappes, décoration florale)</p>
                            </li>
                            <li>
                                <p class="icon odorat"><img src="./img/picto_odorat.png" alt="odorat">Pour  l’odorat</p>
                                <p class="inclus"><span><?=$data_ambiance['odorat']?></span></p>
                            </li>
                            <li>
                                <p class="icon gout"><img src="./img/picto_gout.png" alt="gout">Pour le goût</p>
                                <p class="inclus"><span>Un menu</span><br>(parmi quatre propositions)</p>
                            </li>
                            <li>
                                <p class="icon toucher"><img src="./img/picto_touch.png" alt="toucher">Pour le toucher</p>
                                <p class="inclus"><span><?=$data_ambiance['toucher']?></span><br></p>
                            </li>
                        </ul>
                    </div>
<!--                    <p><a class="button-simple"  href="#">Réserver</a></p>-->
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="bloc_form desktop tablette" style="position: relative">
    <h3 class="reserver">Par ici la réservation</h3>
    <div class="contain_form slider-one-active">
        <div class="steps">
            <div class="step step-one">
                <div class="img-fil_ariane">
                    <img class="retour1" src="./img/choix_menu.png" alt="menu">
                </div>
            </div>
            <div class="step step-two">
                <div class="img-fil_ariane">
                    <img class="retour2" src="./img/choix_adresse.png" alt="localisation">
                </div>
            </div>
            <div class="step step-three">
                <div class="img-fil_ariane">
                    <img class="retour3" src="./img/choix_date.png" alt="date_heure">
                </div>
            </div>
            <div class="step step-four">
                <div class="img-fil_ariane">
                    <img class="retour4" src="./img/choix_toi.png" alt="toi">
                </div>
            </div>
            <div class="step step-five">
                <div class="img-fil_ariane">
                    <img src="./img/choix_recap.png" alt="recap">
                </div>
            </div>
        </div>
        <div class="line">
            <div class="dot-move"></div>
            <div class="dot one"></div>
            <div class="dot two"></div>
            <div class="dot three"></div>
            <div class="dot four"></div>
            <div class="dot five"></div>
        </div>
        <div class="slider-ctr">
            <div class="slider">
                <div class="slider-form slider-one">
                    <div class="bloc_menu">
                        <h4>Choisis deux menus</h4>
                        <ul class="row">
                            <?php
                            foreach ($data_menu as $value) {
                            ?>
                            <li class="col-sm-5 col-sm-offset-1 <?=$value['code_menu']?>"><img class="photo" src="./img/<?=$value['photo']?>" alt="<?=$value['nom']?>">
                                <h5 class="nom_menu"><?=$value['nom']?></h5>
                                <ul>
                                    <li>
                                        <p class="titre_menu">ENTRÉE</p>
                                        <p class="text_menu"><span><?=$value['entree']?></span></p>
                                    </li>
                                    <li>
                                        <p class="titre_menu">PLAT</p>
                                        <p class="text_menu"><span><?=$value['plat']?></span></p>
                                    </li>
                                    <li>
                                        <p class="titre_menu">DESSERT</p>
                                        <p class="text_menu"><span><?=$value['dessert']?></span></p>
                                    </li>
                                </ul>
                                <div class="row number">
                                    <p class="col-sm-2 col-sm-offset-3 input-number-decrement decrement">–</p>
                                    <input required class="col-sm-2 require input-number input-number_<?=$value['code_menu']?>" type="text" value="0" min="0" max="2">
                                    <p class="col-sm-2 input-number-increment increment">+</p>
                                </div>
                            </li>
                            <?php
                            };
                            ?>
                        </ul>
                        <h5>Des besoins spécifiques ? Dis-le nous ici !</h5>
                        <textarea placeholder="Ex : Ma copine est allergique aux arachides, je n’aime pas les tomates..." name="ameliorer" class="comentaires"></textarea>
                    </div>
                    <span class="error">Choisis deux menus</span>
                    <button class="first_button button-simple">Valider</button>
                </div>
                <form class="slider-form slider-two">
                    <a class="retour retour1">< Retour</a>
                    <div class="row" id="code_postal">
                        <h4>Quelle est l’adresse de livraison ?</h4>
                        <div id="locationField">
                            <input class="adresse" required id="autocomplete" placeholder="33 rue du paradis, 75000, PARIS" type="text">
                        </div>
                    </div>
                    <button class="row second_button button-simple">Valider</button>
                </form>
                <form class="slider-form slider-three">
                    <a class="retour retour2">< Retour</a>
                    <h4>Quand et à quelle heure souhaites-tu être livré(e) ?</h4>
                    <?php include 'modules/calendrier.php';?>
                    <h5><label for="time">À quelle heure ?</label></h5>
                    <div class="input-group clockpicker" data-placement="right" data-align="top" data-autoclose="true">
                        <input required type="text" class="form-control heure" placeholder="18:45">
                    </div>
                    <button class="row third_button button-simple">Valider</button>
                </form>
                <form class="slider-form slider-four row">
                    <a class="retour retour3">< Retour</a>
                    <div class="contact col-sm-8 col-sm-offset-2">
                        <h4>Quelques infos pour pouvoir te contacter</h4>
                        <h5>Prénom et nom</h5>
                        <input required type="text" id="name" name="name" placeholder="Firmin Dustriel">
                        <h5>Email</h5>
                        <input required id="email"  type="email" placeholder="Firmin.Dustriel@gmail.com">
                        <h5>Numéro de téléphone</h5>
                        <input required id="phone"  type="tel" placeholder="0636656565"  pattern="^0\d(\s|-)?(\d{2}(\s|-)?){4}$"><br>
                        <button class="row four_button button-simple">Valider</button>
                    </div>
                </form>
                <form class="slider-form slider-five recap" action="./functions/php/commande.php" method="post">
                    <a class="retour retour4">< Retour</a>
                    <div class="row">
                        <h4>Récapitulatif de ta BoxPack</h4>
                        <ul class="col-sm-8 col-sm-offset-2">
                            <h5>Ton pack</h5>
                            <li>
                                <div class="recap_text pack"><img src="./img/img-ambiances/<?=$data_ambiance['photo1']?>" alt="pack"><div><input name="pack" type="text" readonly value="<?=$data_ambiance['nom']?>"><span><?=$data_ambiance['intro']?></span></div></div>
                            </li>
                            <h5>Tes menus <a class="retour1">Modifier</a></h5>
                            <li>
                                <div class="recap_text input_menu"></div>
                            </li>
                            <h5>L’Adresse de livraison <a class="retour2">Modifier</a></h5>
                            <li>
                                <p class="recap_titre">Adresse</p>
                                <div class="recap_text input_adresse"></div>
                            </li>
                            <h5>La Date et l’heure de ta livraison <a class="retour3">Modifier</a></h5>
                            <li>
                            <div class="recap_text input_date"></div>
                            <div class="recap_text input_heure"></div>
                            </li>
                            <h5>Tes informations personnelles <a class="retour4">Modifier</a></h5>
                            <li class="info_perso">
                                <div>
                                    <p class="recap_titre">PRÉNOM ET NOM</p>
                                    <div class="recap_text input_nom"></div>
                                 </div>
                                <div>
                                    <p class="recap_titre">email</p>
                                    <div class="recap_text input_email"></div>
                                </div>
                                <div>
                                    <p class="recap_titre">téléphone</p>
                                    <div class="recap_text input_phone"></div>
                                </div>
                            </li>
                            <div class="prix">
                                <div>
                                    <p>Prix du pack complet :<span>80,00 EUR</span></p>
                                    <p>Frais de livraison :<span>4,00 EUR</span></p>
                                    <p>Total :<span class="rayer">84,00 EUR</span></p>
                                    <p><span>GRATUIT</span></p>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <button class="row five button-simple">Valider et réserver</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="commande_bot mobile">
    <div class="text_bot">
        <h4>Hey !</h4>
        <p>Passes ta réservation ici, grâce à Edgar !</p>
        <img src="./img/fleche_bot.png" alt="fleche_bot">
    </div>
</div>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="https://weareoutman.github.io/clockpicker/dist/bootstrap-clockpicker.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACNkob18sCtX5tS7PyfPvPD4HpQC-tOlQ&libraries=places&callback=initAutocomplete" async defer></script>
    <script src="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <script>
        $('.clockpicker').clockpicker();
        $('.petites_photos img').on({
            'click': function () {
                var src = ($(this).attr('src'));
                $('.grande_photo img').attr('src', src);
            }
        });
    </script>
<?php
include '../footer.php';
?>