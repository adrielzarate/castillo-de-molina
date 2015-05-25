function timeHome(){
    var d = new Date();
    var hour = d.getHours();
    if(hour >= 20 || hour <= 4  ){
        gradientColor = "#000";
        $( "body" ).addClass( "night" );
        $("#msj-intro h2").text("Una noche mágica te espera");
        $("#msj-intro p").text("La magia esta presente nuestra bodega, bajo las estrellas también.");
    }else{
        gradientColor = "#fff";
        $( "body" ).removeClass( "night" );
        $("#msj-intro h2").text("Un gran día te espera");
        $("#msj-intro p").text("Hoy es un gran día en nuestro viñedos, seguramente lo es en donde estes.");
    }
}

var firstTime = true;
var idSelectedPage;

function mostrarSeccion(nombre){
    $("#cargando").show();
    $("main").addClass("desaparecer");
    $.ajax({
        url: nombre + ".php",
        cache: true,
        success: function(respuesta){
            window.location.hash = nombre;
            $("main").delay(100).fadeOut(function(){
                $(this).html(respuesta);
                $(".cover").removeClass( "cover-in" );
                // $("body").attr({ class: ''});
                // $("body").addClass(nombre);
                $("body").attr({ id: nombre});
            });

            ( nombre == "home" ) ? pageLoaded() : interPageLoaded();

        }
    });
}

function mostrarSeccionHome(section){
    $("#cargando").show();
    $("main").addClass("desaparecer");
    $.ajax({
        url: "home.php",
        cache: true,
        success: function(respuesta){
            window.location.hash = "#home";
            $("main").delay(100).fadeOut(function(){
                $(this).html(respuesta);
                $(".cover").removeClass( "cover-in" );
                $("#cargando").hide();
                $("body").attr({ id: "home"});
                $("main").fadeIn(100,function(){
                    $(this).removeClass("desaparecer");
                    $("html, body").animate({ scrollTop: $('#' + section + '-section').offset().top }, 800);
                });
            });
        }
    });
}

function crearLinks(){
    var opciones = $("nav ul.nav .new-page");
    opciones.click(function(){
        mostrarSeccion(this.id);
        idSelectedPage = this.id;
    });
}

function pageLoaded(){
    $( "html,body" ).scrollTop( 0 );
    $("#cargando").hide();
    $("main").fadeIn(100,function(){
        $(this).removeClass("desaparecer");
    });
}

function interPageLoaded(){
    $(".nav li").attr( "class","" );
    pageLoaded();
    setTimeout(function(){ $("#"+idSelectedPage).parent().attr( "class","active" ) }, 200);
}

(function() {

    var hashInit = window.location.hash;
    if ( hashInit == "home" || hashInit == ""  ) {
        mostrarSeccion("home");
    }
    else {
        var stringHashInit = hashInit.replace(/#/, "");
        mostrarSeccion( stringHashInit );
    }

})();

$(document).ready(function(){

    if(firstTime) {
        $("#check-age").show();
        $("body").show();
        firstTime = false;
    }

    crearLinks();
    // mostrarSeccion("home");

    timeHome();

    $('#menu__noche-dia input:checkbox').change(function() {
        if ( $( "body" ).hasClass( "night" ) ) {
            $( "body" ).removeClass( "night" );
        } else {
            $( "body" ).addClass( "night" );
        }
    });

});

$(window).scroll(function() {
    if ( $(document).scrollTop() > 50 ) {
        $(".page-scroll").fadeOut();
        $("footer").css({ bottom : -180 });
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".logo.container").css({marginTop: -90 },300);
        $(".cover").height(135);
    } else {
        $(".page-scroll").fadeIn(1250);
        $("footer").css({ bottom : 0 });
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".logo.container").css({marginTop: 10 },300);
        $(".cover").height(220);
    }

    if ( $(document).scrollTop() > $(window).height()/2 && $(document).scrollTop() < $(window).height()*2 ) {
        $("#home .nav li").removeClass('active');
        $("#about-li").addClass("active");
    } else {
        $("#about-li").removeClass("active");
    }

});

$(".scroll-down").click(function(){
    $("html, body").animate({scrollTop:$(window).height()}, 800);
});


$("#about-li a").click(function(e){
    e.preventDefault();
    var bodyId = $('body').attr('id')
    var idSelectedPage = this.id;
    if( bodyId == "home" ) {
        $("html, body").animate({ scrollTop: $('#' + idSelectedPage + '-section').offset().top }, 800);
    } else {
        mostrarSeccionHome(idSelectedPage);
    }
});

var closeSubMenu = window.setTimeout(function(){ $(".nav > li > ul").css( "display", "none" ) }, 500);

$("#about-li").mouseenter(function(){
    $(".nav > li > ul").css( "display", "none" );
    $(this).children().css( "display", "block" );
    $(".cover").addClass( "cover-in" );
    window.clearTimeout(closeSubMenu);
 });

$(".nav").mouseleave(function(){
    closeSubMenu = window.setTimeout(function(){
                    $(".nav > li > ul").css( "display", "none" );
                    $(".cover").removeClass( "cover-in" );
                   }, 250);
});

$("#check-age a").click(function(e){
    e.preventDefault();
    $("body").removeClass('no-scroll');
    $("#check-age").hide();
    firstTime = false;
});

$("#go-home").click(function(e){
    e.preventDefault();
    mostrarSeccion("home");
    $(".nav li").removeClass('active');
});


    var locations = [
        ['Finlandia', 64.905349, 27.209833, 1],
        ['Colombia', 4.531965, -73.325644, 2],
        ['Brasil', -10.851047, -51.686361, 3],
        ['Chile', -33.688351, -71.144956, 4]
    ];

    function cellparkingMap() {

        var mapOptions = {
            scrollwheel: false,
            zoom: 2,
            center: new google.maps.LatLng(20.001454, 91.628476),
            styles:[
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#A16244"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#F5EAE5"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#a8cacb"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
        };

        var map = new google.maps.Map(document.getElementById('cellparking-map-canvas'), mapOptions);

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

    }

// $(".small-menu > div")
// .mouseenter(function(){
//     $(this).find("ul").show();
// })
// .mouseleave(function(){
//     $(this).find("ul").hide();
// });

//jQuery for page scrolling feature - requires jQuery Easing plugin
/*
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});*/
