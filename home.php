<article id="home-content">
    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div id="msj-intro" class="col-md-12">
                        <div id="text-intro-day" class="col-sm-6 text-right">
                            <h2>Este puede ser tu mejor día</h2>
                            <p class="intro-text">Cualquier momento puede ser bueno si sabes disfrutarlo. Desconéctate y aprovecha tu energía del día, para disfrutar un gran momento junto a Castillo de Molina.</p>
                        </div>
                        <div id="text-intro-night" class="col-sm-6 text-right">
                            <h2>Esta puede ser tu mejor noche</h2>
                            <p class="intro-text">Si estás en casa, invita a tus amigos a cocinar algo nuevo o simplemente a descorchar una botella de buen vino y disfrutar del aquí y el ahora.</p>
                        </div>
                        <div id="col-video" class="col-sm-6">
                            <!-- <img src="img/video.jpg" alt=""> -->
                            <iframe frameborder="0" allowfullscreen title="YouTube video player" width="600" height="330" src="https://www.youtube.com/embed/XPWy9dpWRro?controls=0?autohide=1&list=0&showinfo=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fwww.millohorarios.cl" id="widget3"></iframe>
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
                <h2>Nosotros</h2>
                <p>Castillo de Molina nace como la primer línea Reserva de Viña San Pedro, con una especial dedicación a la calidad e innovación, tomando con calma y cuidadosamente la búsqueda incansable de los mejores valles de Chile.</p>
            </div>
            <div class="col-lg-10 col-lg-offset-1">
                <img class="img-responsive" src="img/intro-nosotros.jpg" alt="">
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <p>Castillo de Molina plantea el disfrutar a cada momento, en cada lugar, porque la vida es una vorágine, pero la vida es ahora.</p>
            </div>
        </div>
    </section>

    <section class="img-section porton-fixed">
        <!-- <img class="img-background" src="img/porton.jpg" alt=""> -->
    </section>

    <section id="history-section" class="about container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Historia</h2>
                <h3><em>“Se dice que los mejores vinos del mundo provienen de un château, un castillo”</em></h3>
                <p>Hace 150 años, los hermanos españoles Correa Albano fundaron Viña San Pedro en Molina, Chile. Al llegar a la cima más alta de sus tierras, maravillados contemplaron su majestuoso entorno. En ese instante, decidieron perpetuar esa sublime riqueza, en un “Castillo” que emergiera desde la tierra, su primer vino reserva: Castillo de Molina.</p>
            </div>
        </div>
    </section>

    <section class="img-section field-fixed">
        <!-- <img class="img-background" src="img/field.jpg" alt=""> -->
    </section>

    <section id="valleys-section" class="about container content-section">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2>Valles</h2>
                <h3><em>Castillo de Molina ha alcanzado una reconocida posición a nivel mundial, entre los mejores vinos chilenos en su segmento.</em></h3>
                <p>Busca constantemente descubrir el mejor origen específico para cada una de sus variedades y así obtener la máxima expresión en cada una de ellas.</p>
            </div>
        </div>

    </section>

    <div id="valleys-map">

        <ul class="list-inline">
            <li><a id="casa-blanca" href="#">Casa Blanca</a></li>
            <li><a id="elqui" href="#">Elqui</a></li>
            <li><a id="rapel" href="#">Rapel</a></li>
            <li><a id="maule" href="#">Maule</a></li>
            <li><a id="curico" href="#">Curicó</a></li>
        </ul>

        <div id="valley1" class="row valley-box valley-box-active">
            <div class="col-xs-12">
                <img class="img-responsive" src="img/field-2.jpg" alt="">
                <h4>Casa Blanca</h4>
                <p>Casablanca es tal vez el más conocido de los valles fríos chilenos, a 18 km en línea recta del mar y rodeado por la Cordillera de la Costa. Tiene clara influencia marítima y cada día se presenta una neblina matinal llamada "camanchaca".</p>
            </div>
        </div>

        <div id="valley2" class="row valley-box">
            <div class="col-xs-12">
                <img class="img-responsive" src="img/elqui.jpg" alt="">
                <h4>Elqui</h4>
                <p>El Valle del Elqui está ubicado al norte de Chile y sus vides crecen bajo una poderosa influencia marina ya que están ubicadas a 20 km en línea recta del mar. Todas las mañanas, cubre los viñedos una nubosidad proveniente del mar hasta el medio día favoreciendo el clima fresco junto a una buena ventilación debido al fuerte viento del área. Sus suelos contienen un alto contenido mineral que le confieren una única identidad enológica a los Sauvignon Blanc.</p>
                <p>Castillo de Molina fue el primer Sauvignon Blanc de origen Valle de Elqui, siendo un éxito rotundo alrededor del mundo.</p>
            </div>
        </div>

        <div id="valley3" class="row valley-box">
            <div class="col-xs-12">
                <img class="img-responsive" src="img/rapel.jpg" alt="">
                <h4>Rapel</h4>
                <p>Ubicado al sur de Chile, nos encontramos con un valle generoso y de de suelos esponjosos, arcillosos y rocosos, donde se producen inmejorables vinos de variedad tinta como el Cabernet Sauvignon y Merlot. Este valle posee un clima Mediterráneo, con una gran oscilación térmica entre el día y la noche de casi 20°C y su verano es seco con un alto promedio de temperaturas, cercano a los 25°C.</p>
            </div>
        </div>

        <div id="valley4" class="row valley-box">
            <div class="col-xs-12">
                <img class="img-responsive" src="img/maule.jpg" alt="">
                <h4>Maule</h4>
                <p>En el Valle del Maule se encuentra la localidad de Pencahue, un área conocida por su clima cálido-seco y por sus irregulares suelos rocosos. En tal ambiente, los Syrah de clima cálido y los Carmenère prueban su temple cultivados en secano, de excelente acidez natural y elegancia.</p>
            </div>
        </div>

        <div id="valley5" class="row valley-box">
            <div class="col-xs-12">
                <img class="img-responsive" src="img/curico.jpg" alt="">
                <h4>Curicó</h4>
                <p>El Valle de Curicó se encuadra dentro de la región vitícola del Valle Central, situado en la Región del Maule. Este clima se caracteriza por la alta variación de temperatura entre el día y la noche. En las áreas más frescas se producen vinos Pinot Noir de calidad única. </p>
                <p>Los viñedos están plantados en una zona de lomajes suaves, en suelos de granito en descomposición sobre tobas volcanicas.</p>
            </div>
        </div>

        <div id="map-canvas"></div>

    </div>

    <section id="enology-section" class="about cv container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Enología</h2>
                <p>Para cada cepa existe un valle que expresa a la perfección nuestra búsqueda de vinos de excelencia.</p>
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
        center: new google.maps.LatLng(mapLat, mapLong),
        styles: [
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
