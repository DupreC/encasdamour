/////////////////////////////////////////////////
// Mailchimp
/////////////////////////////////////////////////
(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';
    $.extend($.validator.messages, {
        required: "Ce champ est requis.",
        remote: "Veuillez remplir ce champ pour continuer.",
        email: "Veuillez entrer une adresse email valide.",
        url: "Veuillez entrer une URL valide.",
        date: "Veuillez entrer une date valide.",
        dateISO: "Veuillez entrer une date valide (ISO).",
        number: "Veuillez entrer un nombre valide.",
        digits: "Veuillez entrer (seulement) une valeur numérique.",
        creditcard: "Veuillez entrer un numéro de carte de crédit valide.",
        equalTo: "Veuillez entrer une nouvelle fois la même valeur.",
        accept: "Veuillez entrer une valeur avec une extension valide.",
        maxlength: $.validator.format("Veuillez ne pas entrer plus de {0} caractères."),
        minlength: $.validator.format("Veuillez entrer au moins {0} caractères."),
        rangelength: $.validator.format("Veuillez entrer entre {0} et {1} caractères."),
        range: $.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
        max: $.validator.format("Veuillez entrer une valeur inférieure ou égale à {0}."),
        min: $.validator.format("Veuillez entrer une valeur supérieure ou égale à {0}.")
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



