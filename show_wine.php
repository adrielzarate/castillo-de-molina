<?php 
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();

  $vino = Sql_select('vinos',array('id' => $get['id_vino']),'=');
  $vino = $vino[0];

?>
        <div class="wine container">
            <div class="row">
                <header class="col-sm-8 col-sm-offset-2">
                    <em>Castillo de Molina Reserva</em>
                    <h1><?php echo $vino['nombre']; ?></h1>
                    <img class="img-responsive" src="img/vinos/<?php echo $vino['horizontal']; ?>" alt="">
                </header>
            </div>
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                    <img id="wine-title" class="img-responsive" src="" alt="">
                    <br>
                    <!-- <table>
                        <thead>
                            <tr>
                                <th>
                                    <strong>ANÁLISIS</strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    Aº: 13.05 %
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    AT: 7.09 g/L (C4H6O6)
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    pH: 3.15
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    AV: 0.33g/L
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    AR: 3.3 g/L
                                </th>
                            </tr>
                        </tbody>
                    </table> -->
                    <?php if($vino['zip'] != '')
                    { ?>
                      <a class="pdf-wine" href="<?php echo 'img/vinos/zip/'.$vino['zip']; ?>"><?php echo $vino['zip_nombre']; ?></a>
                    <?php } ?>
                </div>
                <div class="col-sm-6">
                    <strong><?php echo $vino[titulo_origen]; ?></strong>
                    <p><?php echo $vino[texto_origen]; ?></p>
                    <strong><?php echo $vino[titulo_vendimia]; ?></strong>
                    <p><?php echo $vino[texto_vendimia]; ?></p>
                    <strong><?php echo $vino[titulo_clima]; ?></strong>
                    <p><?php echo $vino[texto_clima]; ?></p>
                    <strong><?php echo $vino[titulo_vinificacion]; ?></strong>
                    <p><?php echo $vino[texto_vinificacion]; ?></p>
                    <strong><?php echo $vino[titulo_maridaje]; ?></strong>
                    <p><?php echo $vino[texto_maridaje]; ?></p>
                </div>
            </div>
        </div>
        <script>
          if ( $("body").hasClass('night')) {
              $("#wine-title").attr('src', "<?php echo 'img/vinos/'.$vino['img_noche']; ?>");
          } else {
              $("#wine-title").attr('src',"<?php echo 'img/vinos/'.$vino['img_dia']; ?>");
          }
      </script>
