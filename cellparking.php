<?php 
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();

  $items = Sql_select('items',array('cod_seccion' => 'cell_parking'),'=');

?>
<style>
    .labels {
        color: #A16345;
        background-color: #fff;
        font-size: 14px;
        text-align: center;
        white-space: nowrap;
        padding: 5px;
        font-family: Lora,sans-serif;
    }
</style>
<article id="cellparking-content">
      <iframe frameborder="0" height="100%" width="100%"

        <?php 
            if ( $get['idioma'] == 'esp' ) {
        ?>
                src="https://youtube.com/embed/DIRBUp8mzOU?autoplay=1&controls=0&showinfo=0&autohide=1"
        <?php
            } else {
        ?>
                src="https://youtube.com/embed/7G5FGAmlhyc?autoplay=1&controls=0&showinfo=0&autohide=1"
        <?php
            }
        ?>

        >

      </iframe>
    </div>
    <section class="intro text-center">
        <!-- <img class="img-background" src="img/cellparking.jpg" alt=""> -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                  <?php foreach($items as $item)
                        { ?>
                          <?php if(utf8_encode($item[nombre_esp]) == 'Título')
                                { ?>
                                  <h2><?php echo $item[$get['idioma']].'<br>'; ?></h2>
                          <?php } ?>

                          <?php if(utf8_encode($item[nombre_esp]) == 'Texto 1')
                                { ?>
                                  <h3><?php echo $item[$get['idioma']]; ?></h3>
                          <?php } ?>

                          <?php if(utf8_encode($item[nombre_esp]) == 'Texto 2')
                                { ?>
                                  <p><?php echo $item[$get['idioma']]; ?></p>
                          <?php } ?>
                  <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="cellparking-map-section">
        <?php foreach($items as $item)
              { ?>
                <?php if(utf8_encode($item[nombre_esp]) == 'Título 2')
                      { ?>
                        <h2><?php echo $item[$get['idioma']].'<br>'; ?></h2>
                <?php } ?>
        <?php } ?>
        <div id="cellparking-map-canvas"></div>
    </section>

    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <?php foreach($items as $item)
                      { ?>
                        <?php if(utf8_encode($item[nombre_esp]) == 'Texto 3')
                              { ?>
                                <p><?php echo $item[$get['idioma']].'<br>'; ?></p>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

</article>

<script src="js/vendor/markerwithlabel.js"></script>
<script>
   function initMap() {
     var latLng = new google.maps.LatLng(20.47805, -5.84716);
     var homeLatLng = new google.maps.LatLng(63.860491, 26.968134);

     var map = new google.maps.Map(document.getElementById('cellparking-map-canvas'), {
       zoom: 2,
       scrollwheel: false,
       center: latLng,
       mapTypeId: google.maps.MapTypeId.ROADMAP,
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
     });

     var finlandia = new MarkerWithLabel({
       position: homeLatLng,
       draggable: true,
       raiseOnDrag: true,
       map: map,
       labelContent: "Finlandia",
       labelAnchor: new google.maps.Point(22, 0),
       labelClass: "labels", // the CSS class for the label
       labelStyle: {opacity: 0.75},
     });

     var chile = new MarkerWithLabel({
       position: new google.maps.LatLng(-33.510213, -70.781599),
       draggable: true,
       raiseOnDrag: true,
       map: map,
       labelContent: "Chile",
       labelAnchor: new google.maps.Point(22, 0),
       labelClass: "labels", // the CSS class for the label
       labelStyle: {opacity: 1.0}
     });

     var brazil = new MarkerWithLabel({
       position: new google.maps.LatLng(-13.021635, -50.786482),
       draggable: true,
       raiseOnDrag: true,
       map: map,
       labelContent: "Brasil",
       labelAnchor: new google.maps.Point(22, 0),
       labelClass: "labels", // the CSS class for the label
       labelStyle: {opacity: 1.0}
     });

     var colombia = new MarkerWithLabel({
       position: new google.maps.LatLng(4.613709, -73.198592),
       draggable: true,
       raiseOnDrag: true,
       map: map,
       labelContent: "Colombia",
       labelAnchor: new google.maps.Point(22, 0),
       labelClass: "labels", // the CSS class for the label
       labelStyle: {opacity: 1.0}
     });
   }

    $( document ).ready(function() {
        initMap();
    });
   

</script>
