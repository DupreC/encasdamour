/////////////////////////////////////////////////
// Mailchimp
/////////////////////////////////////////////////
(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';
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
    });}(jQuery));var $mcj = jQuery.noConflict(true);

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
        navigator.geolocation.getCurrentPosition(function(position) {
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

/////////////////////////////////////////////////
// Menu burger
/////////////////////////////////////////////////
$(".menu-toggle").on('click', function() {
    $(this).toggleClass("on");
    $('.menu-section').toggleClass("on");
    $("nav ul").toggleClass('hidden');
});

/////////////////////////////////////////////////
// Ancre home
/////////////////////////////////////////////////
$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        $('.menu-toggle').toggleClass("on");
        $('.menu-section').toggleClass("on");
        $("nav ul").toggleClass('hidden');
        return false;
    });
});