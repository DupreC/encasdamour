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
    $input = $("input"),
    $name = $(".name"),
    $more = $(".more"),
    $yourname = $(".yourname"),
    $reset = $(".reset"),
    $ctr = $(".contain_form"),
    $mail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

$firstButton.on("click", function(e){
    var calcul_menu =  parseFloat($('.input-number_menu_dolce_vita').val()) + parseFloat($('.input-number_menu_shanghai').val()) + parseFloat($('.input-number_menu_dune_de_sable').val()) + parseFloat($('.input-number_menu_art_de_vivre').val());
    $(".slider-one .error_show").removeClass("error_show").addClass("error");
    if ( calcul_menu == 2){
        $(this).text("Saving...").delay(900).queue(function(){
            $ctr.addClass("two slider-two-active").removeClass("four slider-one-active");
            $(".bloc_form").css("height", "500px");
            $(".slider").css("height", "300px");
            ScrollToReserver('reserver');
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
            $ctr.addClass("three slider-three-active").removeClass("two slider-two-active slider-one-active");
            $(".bloc_form").css("height", "850px");
            $(".slider").css("height", "650px");
            ScrollToReserver('reserver');
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
                $ctr.addClass("four slider-four-active").removeClass("three slider-three-active slider-two-active slider-two-active");
                $(".bloc_form").css("height", "650px");
                $(".slider").css("height", "450px");
                ScrollToReserver('reserver');
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
            $ctr.addClass("five slider-four-active").removeClass("four slider-four-active three slider-three-active slider-two-active slider-two-active");
            $(".bloc_form").css("height", "850px");
            $(".slider").css("height", "650px");
            ScrollToReserver('reserver');
    });
        var adresse = $('.adresse').val();
        var heure = $('.heure').val();
        var jour = $('.cal-day__day--selected').html();
        var mois = $('.cal-month__current').html();
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var menu="";
        if($('.nom_menu').hasClass('valeur1')) {
            $('.valeur1').each(function () {
                menu += "1x "+$(this).html() + "<br>";
            });
        }else if($('.nom_menu').hasClass('valeur2')){
            menu ="2x "+$('.valeur2').html();
        }

        $('.recap .input_menu').prepend('<span>'+menu+'</span>');
        $('.recap .input_date').prepend('<span>'+jour+' '+mois+'</span>');
        $('.recap .input_heure').prepend('<span>'+heure+'</span>');
        $('.recap .input_adresse').prepend('<span>'+adresse+'</span>');
        $('.recap .input_nom').prepend('<span>'+name+'</span>');
        $('.recap .input_email').prepend('<span>'+email+'</span>');
        $('.recap .input_phone').prepend('<span>'+phone+'</span>');
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
// switch images
/////////////////////////////////////////////////
var calcul;
$('.petite_photo').on({
    'click': function () {
        var src = ($(this).attr('src'));
        $('.grande_photo').attr('src', src);
    }
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
                    if ($('.input-1').val() == 1) {
                        $('.nom_menu-1').removeClass('valeur2').addClass('valeur1');
                    } else if ($('.input-2').val() == 1) {
                        $('.nom_menu-2').removeClass('valeur2').addClass('valeur1');
                    } else if ($('.input-3').val() == 1) {
                        $('.nom_menu-3').removeClass('valeur2').addClass('valeur1');
                    } else if ($('.input-4').val() == 1) {
                        $('.nom_menu-4').removeClass('valeur2').addClass('valeur1');
                    } else if ($('.input-1').val() == 0) {
                        $('.nom_menu-1').removeClass('valeur1');
                    } else if ($('.input-2').val() == 0) {
                        $('.nom_menu-2').removeClass('valeur1');
                    } else if ($('.input-3').val() == 0) {
                        $('.nom_menu-3').removeClass('valeur1');
                    } else if ($('.input-4').val() == 0) {
                        $('.nom_menu-4').removeClass('valeur1');
                    }
                }
            }

            function increment() {
                var value = el[0].value;
                var calcul_menu = parseFloat($('.input-number_menu_dolce_vita').val()) + parseFloat($('.input-number_menu_shanghai').val()) + parseFloat($('.input-number_menu_dune_de_sable').val()) + parseFloat($('.input-number_menu_art_de_vivre').val());
                value++;
                if ((!max || value <= max) && calcul_menu < 2) {
                    el[0].value = value++;
                    if ($('.input-1').val() == 1) {
                        $('.nom_menu-1').addClass('valeur1')
                    } else if ($('.input-2').val() == 1) {
                        $('.nom_menu-2').addClass('valeur1')
                    } else if ($('.input-3').val() == 1) {
                        $('.nom_menu-3').addClass('valeur1')
                    } else if ($('.input-4').val() == 1) {
                        $('.nom_menu-4').addClass('valeur1')
                    }else if ($('.input-1').val() == 2) {
                        $('.nom_menu-1').removeClass('valeur1').addClass('valeur2')
                    } else if ($('.input-2').val() == 2) {
                        $('.nom_menu-2').removeClass('valeur1').addClass('valeur2')
                    } else if ($('.input-3').val() == 2) {
                        $('.nom_menu-3').removeClass('valeur1').addClass('valeur2')
                    } else if ($('.input-4').val() == 2) {
                        $('.nom_menu-4').removeClass('valeur1').addClass('valeur2')
                    }

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