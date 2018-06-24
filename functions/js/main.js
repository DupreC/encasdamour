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
    $(this).text("Saving...").delay(900).queue(function(){
        $ctr.addClass("two slider-two-active").removeClass("four slider-one-active");
        $(".bloc_form").css("height", "500px");
        $(".slider").css("height", "300px");
        ScrollToReserver('reserver');
    });
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
        ScrollToReserver('reserver');
    });
    } else{
        $( ".slider-three input" ).each().addClass("invalid");
        $( ".slider-two .invalid" ).each().addClass("error_show");
        ScrollToReserver('invalid');
    }
    e.preventDefault();
});


/////////////////////////////////////////////
//Validation
// /////////////////////////////////////////////
// $(document).ready(function() {
//     <!-- Real-time Validation -->
//     <!--Name can't be blank-->
//     $('#contact_name').on('input', function() {
//         var input=$(this);
//         var is_name=input.val();
//         if(is_name){input.removeClass("invalid").addClass("valid");}
//         else{input.removeClass("valid").addClass("invalid");}
//     });
//
//     <!--Email must be an email -->
//     $('#contact_email').on('second', function() {
//         var input=$(this);
//         var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
//         var is_email=re.test(input.val());
//         if(is_email){input.removeClass("invalid").addClass("valid");}
//         else{input.removeClass("valid").addClass("invalid");}
//     });
//
//     <!--Website must be a website -->
//     $('.adresse').on('input', function() {
//         var input=$(this);
//         var is_adresse=input.val();
//         if(is_adresse){input.removeClass("invalid").addClass("valid");}
//         else{input.removeClass("valid").addClass("invalid");}
//     });
//
//     <!--Message can't be blank -->
//     $('#contact_message').keyup(function(event) {
//         var input=$(this);
//         var message=$(this).val();
//         console.log(message);
//         if(message){input.removeClass("invalid").addClass("valid");}
//         else{input.removeClass("valid").addClass("invalid");}
//     });
//
//     <!-- After Form Submitted Validation-->
//     $("dsqd").click(function(event){
//         var form_data=$(".slider-two").serializeArray();
//         var error_free=true;
//         for (var input in form_data){
//             var element=$("form"+form_data[input]['name']);
//             var valid=element.hasClass("valid");
//             var error_element=$("span", element.parent());
//             if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
//             else{error_element.removeClass("error_show").addClass("error");}
//         }
//         if (!error_free){
//             event.preventDefault();
//         }
//         else{
//             alert('No errors: Form will be submitted');
//         }
//     });
// });
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

        el.each(function() {
            init($(this));
        });

        function init(el) {

            els.dec.on('click', decrement);
            els.inc.on('click', increment);

            function decrement() {
                var value = el[0].value;
                value--;
                if(!min || value >= min) {
                    el[0].value = value;
                }
            }

            function increment() {
                var value = el[0].value;
                value++;
                if(!max || value <= max) {
                    el[0].value = value++;
                }
            }
        }
    }
})();
var NumberMenu = ".input-number";
inputNumber($('.input-number_menu_dolce_vita'));
inputNumber($('.input-number_menu_shanghai'));
inputNumber($('.input-number_menu_dune_de_sable'));
inputNumber($('.input-number_menu_art_de_vivre'));