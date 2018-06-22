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
                        <p class="grande_photo"><img src="<?=$data_ambiance['photo1']?>" alt="grande_photos"></p>
                        <p class="petites_photos"><img class="petite_photo" src="<?=$data_ambiance['photo1']?>" alt="photos1"><img class="petite_photo" src="<?=$data_ambiance['photo2']?>" alt="photos2"></p>
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

<div class="bloc_form" style="position: relative">
    <h3>Réservez</h3>
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
                <form class="slider-form slider-one">
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
                            </li>
                            <?php
                            };
                            ?>
                        </ul>
                        <h5>Des besoins spécifiques ? Dis-le nous ici !</h5>
                        <textarea placeholder="Ex : Ma copine est allergique aux arachides, je n’aime pas les tomates..." name="ameliorer" id="ameliorer"></textarea>
                    </div>
                    <button class="first button-simple">Valider</button>
                </form>
                <form class="slider-form slider-two">
                    <div class="row" id="code_postal">
                        <h4>Où souhaitez-vous être livré ?</h4>
                        <div id="locationField">
                            <input id="autocomplete" placeholder="Enter your address" type="text">
                        </div>
                    </div>
                    <button class="row second button-simple">Valider</button>
                </form>
                <form class="slider-form slider-three">
                    <h4>Choisissez une data et un horaire</h4>
                    <?php include 'modules/calendrier.php';?>
                    <button class="row third button-simple">Valider</button>
                </form>
                <form class="slider-form slider-four">
                    <h2>Hello, <span class="yourname"></span></h2>
                    <h3>Thank you for your input!
                    </h3>
                    <button class="row four button-simple">Valider</button>
                </form>
                <form class="slider-form slider-five">
                    <h2>Hello, <span class="yourname"></span></h2>
                    <h3>Thank you for your input!
                    </h3>
                    <a class="reset" href="#">Reset</a>
                </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACNkob18sCtX5tS7PyfPvPD4HpQC-tOlQ&libraries=places&callback=initAutocomplete" async defer></script>

<?php
include '../footer.php';
?>