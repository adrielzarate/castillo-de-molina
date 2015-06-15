<?php 
include('mysql/mysql.php');
include('includes/funciones.php');
include('includes/geoiploc.php');

$get = LimpiarGET();
$post = LimpiarPOST();
$ip = $_SERVER["REMOTE_ADDR"];
$pais_actual = getCountryFromIP($ip, " NamE ");
if($pais_actual != "Chile" && $pais_actual != "Colombia" && $pais_actual != "Venezuela" && $pais_actual != "Finland")
{
  $pais_actual = 'resto';
}

$vinos_por_idioma = Sql_select('vinos',array('cod_idioma' => $get['idioma']),'=');
$vinos = array();

foreach($vinos_por_idioma as $vino_tmp)
{
  $control = false;
  $visibilidad = explode(',',$vino_tmp['visibilidad']);
  if(count($visibilidad)> 1)
  {
    foreach($visibilidad as $tmp)
    {
      if($tmp == $pais_actual)
      {
        $control = true;
        break;
      }
    }
  }
  else
  {
    $control = true;
  }
  if($control)
  {
    array_push($vinos, $vino_tmp);
  }
}

?>
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

                                <?php if(is_array($vinos))
                                { 
                                  foreach($vinos as $vino)
                                  { ?>
                                    <li>
                                        <img src="<?php echo 'img/vinos/'.$vino['slide']; ?>" alt="" />
                                        <div class="sc-content">
                                            <h2><a id="show_wine" data-id-vino="<?php echo $vino['id'];?>" href="#"><?php echo $vino['nombre']; ?></a></h2>
                                        </div>
                                    </li>
                                  <?php } 
                                   }else{
                                    echo $get['idioma'] == 'esp'? "No hay vinos cargados" : "No wines loaded";
                                  } ?>
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
            type: 'GET',
            data: { idioma : idioma,id_vino : $(nombre).data('id-vino')},
            url: $(nombre).attr('id') + ".php",
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

    $(".sky-carousel a").attr("onclick", "scrollToDescription(this)");

    $(".sky-carousel li").bind('click', function(event){
        var findId = $(this).find('h2 a');
        mostrarVino(findId);
        event.preventDefault()
    });


</script>
