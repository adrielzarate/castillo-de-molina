<article id="wines-content">
<!--     <section class="intro">
        <img class="img-background" src="img/wines.jpg" alt="">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div id="msj-intro" class="col-md-12">
                        <h2>Vinos</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="intro">
        <div class="container wines">
            <div class="row">
                <div class="col-xs-12">
                    <div class="sky-carousel">
                        <div class="sky-carousel-wrapper">
                            <ul class="sky-carousel-container">
<!--
                                <li>
                                    <img src="img/sauvignon_blanc_valle_del_equi.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="sauvignon_blanc_valle_del_equi" href="#">Sauvignon Blanc Valle Del Equi</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/sauvignon_blanc.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="sauvignon_blanc" href="#">Sauvignon Blanc</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/pinot_noir.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="pinot_noir" href="#">Pinot Noir</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/cabernet_sauvignon.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="cabernet_sauvignon" href="#">Cabernet Sauvignon</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/merlot.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="merlot" href="#">Merlot</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/chardonnay.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="chardonnay" href="#">Chardonnay</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/carmenere.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="carmenere" href="#">Carménère</a></h2>
                                    </div>
                                </li> -->

                                <li>
                                    <img src="img/vinos/cabernet-sauvignon-valle-central.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Cabernet Sauvignon Valle Central</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/cabernet-sauvignon-valle-rapel.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Cabernet Sauvignon Valle Rapel</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/carmenere-valle-maule.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Carmenere Valle Maule</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/chardonnay-valle-casablanca.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Chardonnay Valle Casablanca</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/merlot-valle-rapel.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Merlot Valle Rapel</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/pinot-noir-valle-curico.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Pinot Noir Valle Curico</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/rose-organico-valle-cachapoal.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Rose Organico Valle Cachapoal</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/sauvignon-blanco-valle-casablanca.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Sauvignon Blanco Valle Casablanca</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/sauvignon-blanco-valle-elqui.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Sauvignon Blanco Valle Elqui</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/syrah-valle-maule.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Syrah Valle Maule</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/syrah-valle-maule.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Syrah Valle Maule</a></h2>
                                    </div>
                                </li>

                                <li>
                                    <img src="img/vinos/winemaker-blend-valle-rapel.png" alt="" />
                                    <div class="sc-content">
                                        <h2><a id="" href="#">Winemaker Blend Valle Rapel</a></h2>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wine-description">
    </section>

    <div id="cargando" class="text-center">
        <img src="img/loader.gif" alt="">
        <p>cargando</p>
    </div>

</article>


<script>

    $(function() {
        setTimeout(function(){
            $('.sky-carousel').carousel({
                itemWidth: 201,
                itemHeight: 351,
                distance: -10,
                selectedItemDistance: 35,
                selectedItemZoomFactor: 0.9,
                unselectedItemZoomFactor: 0.6,
                unselectedItemAlpha: 0.6,
                motionStartDistance: 140,
                topMargin: 30,
                gradientStartPoint: 0.36,
                gradientOverlaySize: 190,
                selectByClick: true,
                enableMouseWheel: false,
                loop: false,
                gradientOverlayColor: gradientColor
            });
            $(".center-block").attr("src","img/logo-day.png");
            $(".nav li").attr( "class","" );
            $("#wines").parent().attr( "class","active" );
        }, 200);
    });

    function mostrarVino(nombre){
        $("#cargando").show();
        $("#wine-description").addClass("desaparecer");
        $.ajax({
            url: nombre + ".php",
            cache: true,
            success: function(respuesta){
                $("#wine-description").delay(100).fadeOut(function(){
                    $(this).html(respuesta);
                    $(this).removeClass("desaparecer");
                });
                $("#wine-description").fadeIn(100,function(){
                    $('html, body').animate({ scrollTop: $("#wine-description").offset().top }, 800);
                });
                $("#cargando").hide();
            }
        });
    }



    function scrollToDescription(thisId){
        mostrarVino(thisId);
    }

    $(".sky-carousel a").attr("onclick", "scrollToDescription(this.id)");

    $(".sky-carousel li").bind('click', function(event){
        var findId = $(this).find('h2 a').attr('id');
        mostrarVino(findId);
        event.preventDefault()
    });

</script>
