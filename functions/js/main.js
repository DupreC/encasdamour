/////////////////////////////////////////////////
// Google tag manager
/////////////////////////////////////////////////
window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-119987436-2');
/////////////////////////////////////////////////
// Mailchimp
/////////////////////////////////////////////////
(function ($) {
    window.fnames = new Array();
    window.ftypes = new Array();
    fnames[0] = 'EMAIL';
    ftypes[0] = 'email';
    $.extend($.validator.messages, {
        required: "Ce champ est requis.",
        remote: "Remplis ce champ pour continuer.",
        email: "Entre une adresse email valide.",
        url: "Entre une URL valide.",
        date: "Entre une date valide.",
        dateISO: "Entre une date valide (ISO).",
        number: "Entre un nombre valide.",
        digits: "Entre (seulement) une valeur numérique.",
        creditcard: "Entre un numéro de carte de crédit valide.",
        equalTo: "Entre une nouvelle fois la même valeur.",
        accept: "Entre une valeur avec une extension valide.",
        maxlength: $.validator.format("N'entrer pas plus de {0} caractères."),
        minlength: $.validator.format("Entre au moins {0} caractères."),
        rangelength: $.validator.format("Entre entre {0} et {1} caractères."),
        range: $.validator.format("Entre une valeur entre {0} et {1}."),
        max: $.validator.format("Entre une valeur inférieure ou égale à {0}."),
        min: $.validator.format("Entre une valeur supérieure ou égale à {0}.")
    });
}(jQuery));
var $mcj = jQuery.noConflict(true);

/////////////////////////////////////////////////
// Code postal predictif
/////////////////////////////////////////////////
var placeSearch, autocomplete;

function initAutocomplete() {
    // Create the autocomplete object, restricting the search to geographical
    // location types.
    autocomplete = new google.maps.places.Autocomplete(
        /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
        {types: ['geocode']});

    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    autocomplete.addListener('place_changed', fillInAddress);
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
}


/////////////////////////////////////////////////
// step by step page_ambiance
/////////////////////////////////////////////////
function ScrollToReserver(classe) {
    $('html, body').animate({
        scrollTop: ($('.'+classe).offset().top)
    },500);
}
var $firstButton = $(".first"),
    $secondButton = $(".second"),
    $thirdButton = $(".third"),
    $fourButton = $(".four"),
    $firstRetour = $(".slider-two .retour"),
    $secondRetour = $(".slider-three .retour"),
    $thirdRetour = $(".slider-four .retour"),
    $fourRetour = $(".slider-five .retour"),
    $input = $("input"),
    $name = $(".name"),
    $more = $(".more"),
    $yourname = $(".yourname"),
    $reset = $(".reset"),
    $ctr = $(".contain_form"),
    $mail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
$firstRetour.on("click", function(e){
        $ctr.addClass("one slider-one-active").removeClass("two slider-two-active");
        $(".bloc_form").css("height", "1300px");
        $(".slider").css("height", "1200px");
        ScrollToReserver('reserver');
        $firstButton.text("Valider");
        e.preventDefault();
});
$secondRetour.on("click", function(e){
        $ctr.addClass("two slider-two-active").removeClass("three slider-three-active");
        $(".bloc_form").css("height", "500px");
        $(".slider").css("height", "300px");
        ScrollToReserver('reserver');
        $secondButton.text("Valider");
        e.preventDefault();
});
$thirdRetour.on("click", function(e){
        $ctr.addClass("three slider-three-active").removeClass("four slider-four-active");
        $(".bloc_form").css("height", "1300px");
        $(".slider").css("height", "1200px");
        ScrollToReserver('reserver');
        $thirdButton.text("Valider");
        e.preventDefault();
});
$fourRetour.on("click", function(e){
        $ctr.addClass("four slider-four-active").removeClass("five slider-five-active");
        $(".bloc_form").css("height", "1300px");
        $(".slider").css("height", "1200px");
        ScrollToReserver('reserver');
        $fourButton.text("Valider");
        e.preventDefault();
});
$firstButton.on("click", function(e){
    var calcul_menu =  parseFloat($('.input-number_menu_dolce_vita').val()) + parseFloat($('.input-number_menu_shanghai').val()) + parseFloat($('.input-number_menu_dune_de_sable').val()) + parseFloat($('.input-number_menu_art_de_vivre').val());
    $(".slider-one .error_show").removeClass("error_show").addClass("error");
    if ( calcul_menu == 2){
        $(this).text("Saving...").delay(900).queue(function(){
            $ctr.addClass("two slider-two-active").removeClass("one slider-one-active");
            $(".bloc_form").css("height", "500px");
            $(".slider").css("height", "300px");
            ScrollToReserver('reserver');
            $( this ).dequeue();
        });
    } else{
        $( ".slider-one .error" ).removeClass("error").addClass("error_show");
        $(".slider-one .error_show").animate({opacity:1});
        $(".slider-one .error_show").animate({opacity:0},2000)
    }
    e.preventDefault();
});
$secondButton.on("click", function(e){
    if ($('.adresse').val() != ""){
        $(this).text("Saving...").delay(900).queue(function(){
            $ctr.addClass("three slider-three-active").removeClass("two slider-two-active");
            $(".bloc_form").css("height", "850px");
            $(".slider").css("height", "650px");
            ScrollToReserver('reserver');
            $( this ).dequeue();
        });
    } else{
        $( ".slider-two .adresse" ).each().addClass("invalid");
        $( ".slider-two .invalid" ).each().addClass("error_show");
        ScrollToReserver('invalid');
    }
    e.preventDefault();
});
$thirdButton.on("click", function(e){
    if ($('.form-control').val().length == 5){
        $(this).text("Saving...").delay(900).queue(function(){
                $ctr.addClass("four slider-four-active").removeClass("three slider-three-active");
                $(".bloc_form").css("height", "650px");
                $(".slider").css("height", "450px");
                ScrollToReserver('reserver');
            $( this ).dequeue();
        });
    } else{
        $( ".slider-three input" ).each().addClass("invalid");
        $( ".slider-three .invalid" ).each().addClass("error_show");
        ScrollToReserver('invalid');
    }
    e.preventDefault();
});
$fourButton.on("click", function(e){
    if ($mail.test($("#email").val()) && $( ".slider-four #name" ).val() != "" && $( ".slider-four #phone" ).val().length == 10) {
        $(this).text("Saving...").delay(900).queue(function(){
            $ctr.addClass("five slider-five-active").removeClass("four slider-four-active");
            $(".bloc_form").css("height", "1300px");
            $(".slider").css("height", "1100px");
            ScrollToReserver('reserver');
            $( this ).dequeue();
    });
        var adresse = $('.adresse').val();
        var heure = $('.heure').val();
        var jour = $('.cal-day__day--selected').html();
        var mois = $('.cal-month__current').html();
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var menu="";
        var menus="";
        var image="";
        var images="";
        
        if ($('.menu_dolce_vita input').val() ==1){
            menu += "1x "+$('.menu_dolce_vita h5').html()+'\n';
            image = $('.menu_dolce_vita .photo').attr('src');
        }else if ($('.menu_dolce_vita input').val() ==2){
            menu += "2x "+$('.menu_dolce_vita h5').html();
            image = $('.menu_dolce_vita .photo').attr('src');
        }
        if ($('.menu_shanghai input').val() ==1){
            if (menu != ""){
                menus = "1x "+$('.menu_shanghai h5').html()+'\n';
                images = $('.menu_shanghai .photo').attr('src');
            }else {
                menu += "1x " + $('.menu_shanghai h5').html() + '\n';
                image = $('.menu_shanghai .photo').attr('src');
            }
        }else if ($('.menu_shanghai input').val() ==2){
            menu += "2x "+$('.menu_shanghai h5').html();
            image = $('.menu_shanghai .photo').attr('src');
        }
        if ($('.menu_dune_de_sable input').val() ==1){
            if (menu != ""){
                menus = "1x "+$('.menu_dune_de_sable h5').html()+'\n';
                images = $('.menu_dune_de_sable .photo').attr('src');
            }else {
                menu += "1x " + $('.menu_dune_de_sable h5').html() + '\n';
                image = $('.menu_dune_de_sable .photo').attr('src');
            }
        }else if ($('.menu_dune_de_sable input').val() ==2){
            menu += "2x "+$('.menu_dune_de_sable h5').html();
            image = $('.menu_dune_de_sable .photo').attr('src');
        }
        if ($('.menu_art_de_vivre input').val() ==1){
            if (menu != ""){
                menus = "1x "+$('.menu_art_de_vivre h5').html()+'\n';
                images = $('.menu_art_de_vivre  .photo').attr('src');
            }else {
                menu += "1x " + $('.menu_art_de_vivre h5').html() + '\n';
                image = $('.menu_art_de_vivre  .photo').attr('src');
            }
        }else if ($('.menu_art_de_vivre input').val() ==2){
            menu += "2x "+$('.menu_art_de_vivre h5').html();
            image = $('.menu_art_de_vivre  .photo').attr('src');
        }

        $('.recap .input_menu').prepend('<div><img src="'+image+'" alt=""><input name="menu" type="text" readonly value="'+menu+'"></div><div><img src="\'+images+\'" alt=""><input class="menus" name="menus" type="text" readonly value="'+menus+'"></div>');
        $('.recap .input_date').prepend('<input name="date_time " type="text" readonly value="'+jour+' '+mois+'"><input name="heure" type="text" readonly value="\'+heure+\'">');
        $('.recap .input_adresse').prepend('<input name="adresse" type="text" readonly value="'+adresse+'">');
        $('.recap .input_nom').prepend('<input name="nom" type="text" readonly value="'+name+'">');
        $('.recap .input_email').prepend('<input name="email" type="text" readonly value="'+email+'">');
        $('.recap .input_phone').prepend('<input name="phone" type="text" readonly value="'+phone+'">');
        if (menus == ""){
            $('.recap .menus').hide();
        }
    } else{
        $( ".slider-three input" ).each().addClass("invalid");
        $( ".slider-two .invalid" ).each().addClass("error_show");
        ScrollToReserver('invalid');
    }
    e.preventDefault();
});

/////////////////////////////////////////////
//Menu burger
/////////////////////////////////////////////
$(".menu-toggle").on('click', function () {
    $(this).toggleClass("on");
    $('.menu-section').toggleClass("on");
    $("nav ul").toggleClass('hidden');
});


/////////////////////////////////////////////
// addclass image home bloc ambiance
/////////////////////////////////////////////
$('.bloc_choix-ambiances_home ul li:first-child').addClass('col-sm-offset-1');


/////////////////////////////////////////////////
// Ancre home
/////////////////////////////////////////////////
$(document).ready(function () {
    $('.js-scrollTo').on('click', function () { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate({scrollTop: $(page).offset().top}, speed); // Go
        $('.menu-toggle').toggleClass("on");
        $('.menu-section').toggleClass("on");
        $("nav ul").toggleClass('hidden');
        return false;
    });
});
/////////////////////////////////////////////////
// switch logo_home
/////////////////////////////////////////////////
$(function(){
    $("h1 img").on({
        mouseenter: function(){
            $(this).attr('src','img/logo.gif');
        },
        mouseleave: function(){
            $(this).attr('src','img/logo_rose1.png');
        }
    });

});
/////////////////////////////////////////////
// choix menus
/////////////////////////////////////////////

(function() {

    window.inputNumber = function(el) {

        var min = el.attr('min') || false;
        var max = el.attr('max') || false;

        var els = {};

        els.dec = el.prev();
        els.inc = el.next();

        el.each(function () {
            init($(this));
        });

        function init(el) {

            els.dec.on('click', decrement);
            els.inc.on('click', increment);

            function decrement() {
                var value = el[0].value;
                value--;

                if (!min || value >= min) {
                    el[0].value = value;
                }
            }

            function increment() {
                var value = el[0].value;
                var calcul_menu = parseFloat($('.input-number_menu_dolce_vita').val()) + parseFloat($('.input-number_menu_shanghai').val()) + parseFloat($('.input-number_menu_dune_de_sable').val()) + parseFloat($('.input-number_menu_art_de_vivre').val());
                value++;
                if ((!max || value <= max) && calcul_menu < 2) {
                    el[0].value = value++;
                }
            }
        }
    };
    $(function(){
        calcul =  parseFloat($('.input-number_menu_dolce_vita').val()) + parseFloat($('.input-number_menu_shanghai').val()) + parseFloat($('.input-number_menu_dune_de_sable').val()) + parseFloat($('.input-number_menu_art_de_vivre').val());
        if (calcul>=2 ){
            $('.increment').removeClass(".input-number-increment");
        }else{
            $('.increment').removeClass(".input-number-increment").addClass(".input-number-increment");
        }
    });
})();
var NumberMenu = ".input-number";
inputNumber($('.input-number_menu_dolce_vita'));
inputNumber($('.input-number_menu_shanghai'));
inputNumber($('.input-number_menu_dune_de_sable'));
inputNumber($('.input-number_menu_art_de_vivre'));