<?php
include '../header_pages.php';
include "../functions/php/main.php";
$ambiance = $_GET['ambiance'];
$data_ambiance = get_ambianceSlug($pdo,$ambiance);
$data_menu = get_menu($pdo);
?>

<div class="container">
    <div class="fil_ariane col-sm-offset-1">
        <?php
        define('NOM_SITE', 'Accueil', true);
        get_fil_ariane(array('./choix-ambiances.php' => 'Ambiances', 'final' => $data_ambiance['nom']));
        ?>
    </div>
        <style>
            </style>
        <script src="./functions/js/main.js"></script>

        <div class="row bloc_ambiance">
            <ul>
                <li class="col-sm-offset-1 col-sm-5">
                    <div class="col-sm-offset-2 col-sm-10">
                        <p class="grande_photo"><img src="./img/img-ambiances/<?=$data_ambiance['photo1']?>" alt="grande_photos"></p>
                        <p class="petites_photos"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo1']?>" alt="photos1"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo2']?>" alt="photos2"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo3']?>" alt="photos4"><img class="petite_photo" src="./img/img-ambiances/<?=$data_ambiance['photo2']?>" alt="photos2"></p>
                        <div class="sos">
                            <h3>SOS</h3>
                            <h4>Tu as un doute ? Par ici le coup de pouce ! </h4>
                            <p>On sait que c’est pas toujours facile de se lancer quand on est pas certain que ça va plaire. Alors, on a mis en place un quiz que tu peux envoyer ni vu ni connu à ton ou ta partenaire. Celui-ci est complètement neutre et n’éveille pas les supsons.</p>
                            <p class="quizz"><a href="#" class="button-simple">Envoyer le quiz</a></p>
                        </div>
                    </div>
                </li>
                <li class="col-sm-6 infos">
                <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <p><span class="button-simple"><?=$data_ambiance['tag1']?></span><span class="button-simple"><?=$data_ambiance['tag2']?></span><span class="button-simple"><?=$data_ambiance['tag3']?></span></p>
                                <h2><?=$data_ambiance['nom']?></h2>
                                <p class="intro"><?=$data_ambiance['intro']?></p>
                            </div>
                            <p class="col-sm-3 prix">40€<br><span>/personne</span></p>
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
                                <p class="inclus"><span><?=$data_ambiance['vue1']?></span><br>(guirlandes, bougeoires, nappes, décoration florale)</p>
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

<div class="bloc_form" style="position: relative">
    <h3 class="reserver">Réservez</h3>
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
            <div class="step step-five">
                <div class="liner"></div>
                <span>Recap</span>
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
                            <li class="col-sm-5 col-sm-offset-1"><img src="./img/<?=$value['photo']?>" alt="<?=$value['nom']?>">
                                <h5><?=$value['nom']?></h5>
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
                        <textarea placeholder="Ex : Ma copine est allergique aux arachides, je n’aime pas les tomates..." name="ameliorer" id="ameliorer"></textarea>
                    </div>
                    <span class="error">Choisis deux menus</span>
                    <button class="first button-simple">Valider</button>
                </div>
                <form class="slider-form slider-two">
                    <div class="row" id="code_postal">
                        <h4>Où souhaitez-vous être livré ?</h4>
                        <div id="locationField">
                            <input class="adresse" required id="autocomplete" placeholder="33 rue du paradis, 75000, PARIS" type="text">
                        </div>
                    </div>
                    <button class="row second button-simple">Valider</button>
                </form>
                <form class="slider-form slider-three">
                    <h4>Choisissez une date et un horaire</h4>
                    <?php include 'modules/calendrier.php';?>
                    <h5><label for="time">À quelle heure ?</label></h5>
                    <div class="input-group clockpicker" data-placement="right" data-align="top" data-autoclose="true">
                        <input required type="text" class="form-control heure" placeholder="18:45">
                    </div>
                    <button class="row third button-simple">Valider</button>
                </form>
                <form class="slider-form slider-four row">
                    <div class="contact col-sm-8 col-sm-offset-2">
                        <h4>Quelques infos pour pouvoir te contacter</h4>
                        <h5>Prénom et nom</h5>
                        <input required type="text" id="name" name="name" placeholder="Firmin Dustriel">
                        <h5>Email</h5>
                        <input required id="email"  type="email" placeholder="Firmin.Dustriel@gmail.com">
                        <h5>Numéro de téléphone</h5>
                        <input required id="phone"  type="tel" placeholder="0636656565"  pattern="^0[1-68][0-9]{10}$#"><br>
                        <button class="row four button-simple">Valider</button>
                    </div>
                </form>
                <form class="slider-form slider-five recap">
                    <div class="row">
                        <h4>Récapitulatif de ta résa</h4>
                        <ul class="col-sm-8 col-sm-offset-2">
                            <li>
                                <p class="recap_titre">Pack </p>
                                <p class="recap_text pack"><span><?=$data_ambiance['nom']?></span></p>
                            </li>
                            <li>
                                <p class="recap_titre">Menu</p>
                                <p class="recap_text input_menu"></p>
                            </li>
                            <li>
                                <p class="recap_titre">Date</p>
                                <p class="recap_text input_date"></p>
                            </li>
                            <li>
                                <p class="recap_titre">Heure</p>
                                <p class="recap_text input_heure"></p>
                            </li>
                            <li>
                                <p class="recap_titre">Adresse</p>
                                <p class="recap_text input_adresse"></p>
                            </li>
                            <li>
                                <p class="recap_titre">PRÉNOM ET NOM</p>
                                <p class="recap_text input_nom"></p>
                            </li>
                            <li>
                                <p class="recap_titre">email</p>
                                <p class="recap_text input_email"></p>
                            </li>
                            <li>
                                <p class="recap_titre">téléphone</p>
                                <p class="recap_text input_phone"></p>
                            </li>
                        </ul>
                    </div>
                    <button class="row four button-simple">Valider et réserver</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="http://weareoutman.github.io/clockpicker/dist/bootstrap-clockpicker.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACNkob18sCtX5tS7PyfPvPD4HpQC-tOlQ&libraries=places&callback=initAutocomplete" async defer></script>
    <script src="http://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <script>
        $('.clockpicker').clockpicker();
    </script>
<?php
include '../footer.php';
?>