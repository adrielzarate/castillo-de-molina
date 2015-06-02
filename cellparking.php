<?php 
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();

  $items = Sql_select('items',array('cod_seccion' => 'cell_parking'),'=');

?>
<article id="cellparking-content">
      <iframe frameborder="0" height="100%" width="100%"
        src="https://youtube.com/embed/5rljURvx5f0?autoplay=1&controls=0&showinfo=0&autohide=1">
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

<script>

    setTimeout(function(){
        cellparkingMap();
    }, 200);

</script>
