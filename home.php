<?php 
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();

  $items_dia = Sql_select('items',array('cod_seccion' => 'nosotros','cod_sub_seccion' => 'intro_dia'),'=');
  $items_noche = Sql_select('items',array('cod_seccion' => 'nosotros','cod_sub_seccion' => 'intro_noche'),'=');
  $items_nosotros = Sql_select('items',array('cod_seccion' => 'nosotros','cod_sub_seccion' => 'nosotros'),'=');
  $items_historia = Sql_select('items',array('cod_seccion' => 'nosotros','cod_sub_seccion' => 'historia'),'=');
  $items_enologia = Sql_select('items',array('cod_seccion' => 'nosotros','cod_sub_seccion' => 'enologia'),'=');
  $items_valles = Sql_select('items',array('cod_seccion' => 'nosotros','cod_sub_seccion' => 'valles'),'=');

?>
<article id="home-content">
    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div id="msj-intro" class="col-md-12">
                        <div id="text-intro-day" class="col-sm-6 text-right">
                            <?php foreach($items_dia as $item)
                                  { ?>
                                    <?php if(utf8_encode($item[nombre_esp]) == 'Título')
                                          { ?>
                                            <h2><?php echo $item[$get['idioma']]; ?></h2>
                                    <?php } ?>

                                    <?php if(utf8_encode($item[nombre_esp]) == 'Texto')
                                          { ?>
                                            <p class="intro-text"><?php echo $item[$get['idioma']]; ?></p>
                                    <?php } ?>
                            <?php } ?>
                        </div>
                        <div id="text-intro-night" class="col-md-6 text-right">
                            <?php foreach($items_noche as $item)
                                  { ?>
                                    <?php if(utf8_encode($item[nombre_esp]) == 'Título')
                                          { ?>
                                            <h2><?php echo $item[$get['idioma']]; ?> <?php echo $get['idioma']; ?> </h2>
                                    <?php } ?>

                                    <?php if(utf8_encode($item[nombre_esp]) == 'Texto')
                                          { ?>
                                            <p class="intro-text"><?php echo $item[$get['idioma']]; ?></p>
                                    <?php } ?>
                            <?php } ?>
                        </div>
                        <div id="col-video" class="col-md-6">
                            <!-- <img src="img/video.jpg" alt=""> -->
                            <iframe frameborder="0" allowfullscreen title="YouTube video player" width="600" height="330" 

                            <?php 
                                if ( $get['idioma'] == 'esp' ) {
                            ?>
                                    src="https://www.youtube.com/embed/vJZ68tLbG54?controls=0?autohide=1&list=0&showinfo=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fwww.millohorarios.cl"
                            <?php
                                } else {
                            ?>
                                    src="https://www.youtube.com/embed/DnBGl2oCuxs?controls=0?autohide=1&list=0&showinfo=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fwww.millohorarios.cl"
                            <?php
                                }
                            ?>

                            id="widget3"></iframe>
                            <a id="play-video" href="javascript:void(0);"></a>
                            <script>

                                $('#play-video').on('click', function(e) {
                                    $("#widget3").show();
                                    $(this).hide();
                                    $("#widget3")[0].src += "&autoplay=1";

                                    // if (
                                    //     document.fullscreenEnabled ||
                                    //     document.webkitFullscreenEnabled ||
                                    //     document.mozFullScreenEnabled ||
                                    //     document.msFullscreenEnabled
                                    // ) {
                                    //     var i = document.getElementById("col-video");
                                    //     if (i.requestFullscreen) {
                                    //         this.requestFullscreen();
                                    //     } else if (i.webkitRequestFullscreen) {
                                    //         i.webkitRequestFullscreen();
                                    //     } else if (i.mozRequestFullScreen) {
                                    //         i.mozRequestFullScreen();
                                    //     } else if (i.msRequestFullscreen) {
                                    //         i.msRequestFullscreen();
                                    //     }
                                    // }

                                    e.preventDefault();
                                });

                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--div class="page-scroll">
            <a href="#about" class="btn scroll-down">
                <img src="img/scroll-down.svg" alt="">
                <span>Scroll to view more</span>
            </a>
        </div-->
    </section>

    <section id="about-section" class="about container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <?php foreach($items_nosotros as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Título')
                              { ?>
                                <h2><?php echo $item[$get['idioma']]; ?></h2>
                        <?php } ?>

                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto 1')
                              { ?>
                                <p><?php echo $item[$get['idioma']]; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
            <div class="col-lg-10 col-lg-offset-1">
                <img class="img-responsive" src="img/intro-nosotros.jpg" alt="">
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <?php foreach($items_nosotros as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto 2')
                              { ?>
                                <p><?php echo $item[$get['idioma']]; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="img-section porton-fixed">
        <!-- <img class="img-background" src="img/porton.jpg" alt=""> -->
    </section>

    <section id="history-section" class="about container content-section text-center">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <?php foreach($items_historia as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Título')
                              { ?>
                                <h2><?php echo $item[$get['idioma']]; ?></h2>
                        <?php } ?>

                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto 1')
                              { ?>
                                <h3><em><?php echo $item[$get['idioma']]; ?></em></h3>
                        <?php } ?>

                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto 2')
                              { ?>
                                <p><?php echo $item[$get['idioma']]; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>

    </section>

    <section class="img-section field-fixed">
        <!-- <img class="img-background" src="img/field.jpg" alt=""> -->
    </section>

    <section id="valleys-section" class="about container content-section">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <?php foreach($items_valles as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Título')
                              { ?>
                                <h2><?php echo $item[$get['idioma']]; ?></h2>
                        <?php } ?>

                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto 1')
                              { ?>
                                <h3><em><?php echo $item[$get['idioma']]; ?></em></h3>
                        <?php } ?>

                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto 2')
                              { ?>
                                <p><?php echo $item[$get['idioma']]; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>

    </section>

    <div id="valleys-map">

        <ul class="list-inline">
            <li><a id="casa-blanca" href="#">Casablanca</a></li>
            <li><a id="elqui" href="#">Elqui</a></li>
            <li><a id="rapel" href="#">Rapel</a></li>
            <li><a id="maule" href="#">Maule</a></li>
            <li><a id="curico" href="#">Curicó</a></li>
        </ul>

        <div id="valley1" class="row valley-box valley-box-active">
            <div class="col-xs-12">
                <img class="img-responsive" src="img/field-2.jpg" alt="">
                <h4>Casablanca</h4>
                <?php foreach($items_valles as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto valle Casa Blanca')
                              { ?>
                                <p><?php echo $item[$get['idioma']]; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div id="valley2" class="row valley-box">
            <div class="col-xs-12">
                <img class="img-responsive" src="img/elqui.jpg" alt="">
                <h4>Elqui</h4>
                <?php foreach($items_valles as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto valle Elqui')
                              { ?>
                                <p><?php echo $item[$get['idioma']]; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div id="valley3" class="row valley-box">
            <div class="col-xs-12">
                <img class="img-responsive" src="img/rapel.jpg" alt="">
                <h4>Rapel</h4>
                <?php foreach($items_valles as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto valle Rapel')
                              { ?>
                                <p><?php echo $item[$get['idioma']]; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div id="valley4" class="row valley-box">
            <div class="col-xs-12">
                <img class="img-responsive" src="img/maule.jpg" alt="">
                <h4>Maule</h4>
                <?php foreach($items_valles as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto valle Maule')
                              { ?>
                                <p><?php echo $item[$get['idioma']]; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div id="valley5" class="row valley-box">
            <div class="col-xs-12">
                <img class="img-responsive" src="img/curico.jpg" alt="">
                <h4>Curicó</h4>
                <?php foreach($items_valles as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto valle Curicó')
                              { ?>
                                <p><?php echo $item[$get['idioma']]; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div id="map-canvas"></div>

    </div>

    <section class="img-section dark-cava text-center">
        <!-- <img class="img-background" src="img/dark-cava.jpg" alt=""> -->
        <?php foreach($items_valles as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto 3')
                              { ?>
                                <h3><em><?php echo $item[$get['idioma']]; ?></em></h3>
                        <?php } ?>
                <?php } ?>
    </section>

    <section id="enology-section" class="about cv container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <?php foreach($items_enologia as $item)
                      { ?>
                        
                        <?php if(utf8_encode($item[nombre_esp]) == 'Título')
                              { ?>
                                <h2><?php echo $item[$get['idioma']]; ?></h2>
                        <?php } ?>

                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto 1')
                              { ?>
                                <p><?php echo $item[$get['idioma']]; ?></p>
                        <?php } ?>
                <?php } ?>
            </div>
            <div  class="col-lg-12">
                <img src="img/cv/main-picture.png" alt="">
            </div>
            <div id="date" class="col-sm-6 text-right transform-animation-1 pre-animated-from-left">
                <img src="img/cv/date.png" alt="">
            </div>
            <div id="cv-logo" class="col-sm-6 text-left transform-animation-1 pre-animated-from-right">
                <img src="img/cv/cv-logo.png" alt="">
            </div>
            <div  class="col-lg-12 text-center">
                <img id="top-five-title" class="block transform-animation-1 pre-animated-from-bottom" src="img/cv/top-five-title.png" alt="">
                <img id="top-five-one" class="block transform-animation-1 pre-animated-from-bottom" src="img/cv/top-five-1.png" alt="">
                <img id="top-five-two" class="block transform-animation-1 pre-animated-from-bottom" src="img/cv/top-five-2.png" alt="">
                <img id="top-five-three" class="block transform-animation-1 pre-animated-from-bottom" src="img/cv/top-five-3.png" alt="">
                <img id="top-five-four" class="block transform-animation-1 pre-animated-from-bottom" src="img/cv/top-five-4.png" alt="">
                <img id="top-five-five" class="block transform-animation-1 pre-animated-from-bottom" src="img/cv/top-five-5.png" alt="">
            </div>

            <div id="expertice-title" class="col-sm-12 transform-animation-1 pre-animated-from-bottom">
                <img src="img/cv/expertices-title.png" alt="">
            </div>

            <div id="expertice-one" class="col-sm-2 col-sm-offset-3 transform-animation-1 pre-animated-from-right">
                <img src="img/cv/expertices-1.png" alt="">
            </div>
            <div id="expertice-two" class="col-sm-2 transform-animation-13 pre-animated-from-right">
                <img src="img/cv/expertices-2.png" alt="">
            </div>
            <div id="expertice-three" class="col-sm-2 transform-animation-16 pre-animated-from-right">
                <img src="img/cv/expertices-3.png" alt="">
            </div>

            <div class="col-sm-12">

            </div>

        </div>
    </section>

</article>

<script>
    $.fn.isOnScreen = function(){
        var viewport = {};
        viewport.top = $(window).scrollTop();
        viewport.bottom = viewport.top + $(window).height();
        var bounds = {};
        bounds.top = this.offset().top;
        bounds.bottom = bounds.top + this.outerHeight();
        return ((bounds.top <= viewport.bottom) && (bounds.bottom >= viewport.top));
    };

    $(window).scroll(function() {
        // if ( $("#valley1").isOnScreen() ) {
        //     $("#valley1").removeClass('pre-animated-from-bottom');
        // }
        // if ( $("#valley2").isOnScreen() ) {
        //     $("#valley2").removeClass('pre-animated-from-bottom');
        // }
        // if ( $("#valley3").isOnScreen() ) {
        //     $("#valley3").removeClass('pre-animated-from-bottom');
        // }
        // if ( $("#valley4").isOnScreen() ) {
        //     $("#valley4").removeClass('pre-animated-from-bottom');
        // }
        // if ( $("#valley5").isOnScreen() ) {
        //     $("#valley5").removeClass('pre-animated-from-bottom');
        // }

        if ( $("#date").isOnScreen() ) {
            $("#date").removeClass('pre-animated-from-left');
        }
        if ( $("#cv-logo").isOnScreen() ) {
            $("#cv-logo").removeClass('pre-animated-from-right');
        }

        if ( $("#top-five-title").isOnScreen() ) {
            $("#top-five-title").removeClass('pre-animated-from-bottom');
        }
        if ( $("#top-five-one").isOnScreen() ) {
            $("#top-five-one").removeClass('pre-animated-from-bottom');
        }
        if ( $("#top-five-two").isOnScreen() ) {
            $("#top-five-two").removeClass('pre-animated-from-bottom');
        }
        if ( $("#top-five-three").isOnScreen() ) {
            $("#top-five-three").removeClass('pre-animated-from-bottom');
        }
        if ( $("#top-five-four").isOnScreen() ) {
            $("#top-five-four").removeClass('pre-animated-from-bottom');
        }
        if ( $("#top-five-five").isOnScreen() ) {
            $("#top-five-five").removeClass('pre-animated-from-bottom');
        }

        if ( $("#expertice-title").isOnScreen() ) {
            $("#expertice-title").removeClass('pre-animated-from-bottom');
        }
        if ( $("#expertice-one").isOnScreen() ) {
            $("#expertice-one").removeClass('pre-animated-from-right');
        }
        if ( $("#expertice-two").isOnScreen() ) {
            $("#expertice-two").removeClass('pre-animated-from-right');
        }
        if ( $("#expertice-three").isOnScreen() ) {
            $("#expertice-three").removeClass('pre-animated-from-right');
        }
    });

    var map;
    function initialize( mapLat , mapLong ) {
            if ( mapLat == undefined ) mapLat = -33.324680;
            if ( mapLong ==  undefined ) mapLong = -71.407569;
      var mapOptions = {
        scrollwheel: false,
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.HYBRID,
        center: new google.maps.LatLng(mapLat, mapLong),
        /*styles: [
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
            ]*/
      };
      map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
    }

    // google.maps.event.addDomListener(window, 'load', initialize);
    initialize();

    /******************************************************************/

    $("#casa-blanca").on('click', function(e) {
        initialize( -33.324680, -71.407569 );
        $(".valley-box").removeClass('valley-box-active');
        $("#valley1").addClass('valley-box-active');
        e.preventDefault();
    });

    $("#elqui").on('click', function(e) {
        initialize( -29.826597, -70.740802 );
        $(".valley-box").removeClass('valley-box-active');
        $("#valley2").addClass('valley-box-active');
        e.preventDefault();
    });

    $("#rapel").on('click', function(e) {
        initialize( -34.138215, -70.811815 );
        $(".valley-box").removeClass('valley-box-active');
        $("#valley3").addClass('valley-box-active');
        e.preventDefault();
    });

    $("#maule").on('click', function(e) {
        initialize( -35.604218, -71.535980 );
        $(".valley-box").removeClass('valley-box-active');
        $("#valley4").addClass('valley-box-active');
        e.preventDefault();
    });

    $("#curico").on('click', function(e) {
        initialize( -35.251706, -70.864768 );
        $(".valley-box").removeClass('valley-box-active');
        $("#valley5").addClass('valley-box-active');
        e.preventDefault();
    });

    // google.maps.event.addDomListener(window, 'load', initialize);



</script>
