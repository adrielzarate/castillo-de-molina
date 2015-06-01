<?php 
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();

  if($get['idioma'] == '')
  {
    $get['idioma'] = 'esp';
  }

  $items_opciones = Sql_select('items',array('cod_seccion' => 'menu','cod_sub_seccion' => 'opciones'),'=');
  $items_edad = Sql_select('items',array('cod_seccion' => 'menu','cod_sub_seccion' => 'edad'),'=');
  
  foreach ($items_opciones as $item) {
    if($item['nombre_esp'] == 'Nosotros')
    {
      $nosotros = $item[$get['idioma']];
    }
    if($item['nombre_esp'] == 'Historia')
    {
      $historia = $item[$get['idioma']];
    }
    if($item['nombre_esp'] == 'Valles')
    {
      $valles = $item[$get['idioma']];
    }
    if(utf8_encode($item['nombre_esp']) == 'Enología')
    {
      $enologia = $item[$get['idioma']];
    }
    if($item['nombre_esp'] == 'Noticias')
    {
      $noticias = $item[$get['idioma']];
    }
    if($item['nombre_esp'] == 'Vinos')
    {
      $vinos = $item[$get['idioma']];
    }
    if($item['nombre_esp'] == 'Cell Parking')
    {
      $cell_parking = $item[$get['idioma']];
    }
    if($item['nombre_esp'] == 'Contacto')
    {
      $contacto = $item[$get['idioma']];
    }
  }

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Castillo de Molina</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic|Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-select.min.css">
        <link rel="stylesheet" href="css/default_skin.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom" class="no-scroll">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="menu__noche-dia">
            <label><input type="checkbox" value="" > Noche / Dia</label>
        </div>

        <!-- <div class="small-menu"> -->
        <div class="container top-options">
            <div class="small-menu pull-left">
                <!-- <span>Síguenos</span> -->
                <ul class="pull-right list-inline social">
                    <li><a href="https://www.facebook.com/CastillodeMolina" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/castillo_molina" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/castillo_molina/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="small-menu pull-right">
                <!-- <span class="text-right">Idiomas</span> -->
                <ul class="pull-right list-inline languages">
                    <li><a href="index.php?idioma=eng">EN</a></li>
                    <li><a href="index.php?idioma=esp">ES</a></li>
                    <!-- <li><a href="">FI</a></li> -->
                    <!-- <li><a href="">Italiano</a></li> -->
                </ul>
            </div>
        </div>

        <header>
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="logo container">
                    <h1 class="sr-only">Castillo de Molina</h1>
                    <a id="go-home" href="#" alt="Castillo de Molina" title="Castillo de Molina"></a>
                </div>
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-main-collapse">
                        <ul class="nav nav-justified">
                            <li id="about-li">
                                <a id="about" href="#"><?php echo $nosotros; ?></a>
                                <ul class="nav-justified">
                                    <li><a href=""></a></li>
                                    <li><a id="history" href="#"><?php echo $historia; ?></a></li>
                                    <li class="valleys"><a id="valleys" href="#"><?php echo $valles; ?></a></li>
                                    <li><a id="enology" href="#"><?php echo $enologia; ?></a></li>
                                    <li><a href=""></a></li>
                                </ul>
                            </li>
                            <li><a id="news" class="new-page"><?php echo $noticias; ?></a></li>
                            <li><a id="wines" class="new-page" href="#"><?php echo $vinos; ?></a></li>
                            <li><a id="cellparking" class="new-page" href="#"><?php echo $cell_parking; ?></a></li>
                            <li><a id="contact" class="new-page" href="#"><?php echo $contacto; ?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main></main>
        <div id="cargando" class="text-center">
            <img src="img/loader.gif" alt="">
            <p><?php echo $get['idioma'] == 'esp'? 'cargando' : 'loading'; ?></p>
        </div>

        <footer>
            <!-- <div class="page-scroll">
                <a href="#" class="btn scroll-down">
                    <img src="img/scroll-down.svg" alt="">
                    <span>Scroll to view more</span>
                </a>
            </div> -->
            <div class="row">
                <div class="col-sm-12">
                    <a class="pull-left" href="">Terminos y condiciones</a>
                    <a class="pull-right" href="">Copyright 2011 Viña San Pedro</a>
                </div>
            </div>
        </footer>

        <div class="cover"></div>

        <div id="check-age" class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="img/logo-nigth.png" alt="">
                </div>

<!--                 <div class="col-sm-offset-3 col-sm-6">
                    <h2 class="enfasis">Verify your age</h2>
                    <em>Must be 18 years to visit the site</em>
                    <p><a href="#">I am over 18 years old</a></p>
                </div> -->

                <div class="col-sm-offset-3 col-sm-6">
                    <?php foreach($items_edad as $item)
                    { ?>
                      <?php if(utf8_encode($item['nombre_esp']) == 'Título')
                            { ?>
                              <h2 class="enfasis"><?php echo $item[$get['idioma']]; ?></h2>
                            <?php } ?>

                            <?php if(utf8_encode($item['nombre_esp']) == 'Condición')
                            { ?>
                              <em><?php echo $item[$get['idioma']]; ?></em>
                            <?php } ?>

                            <?php if(utf8_encode($item['nombre_esp']) == 'Texto botón')
                            { ?>
                              <p><a href="#"><?php echo $item[$get['idioma']]; ?></a></p>
                            <?php } ?>
                    <?php } ?>
                </div>

            </div>
        </div>

        <!--script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script-->
        <script type="text/javascript">
          var idioma = '<?php echo $get['idioma']; ?>';
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&language=es"></script>
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/bootstrap-select.js"></script>
        <script src="js/vendor/source/js/jquery.sky.carousel-1.0.2.min.js"></script>
        <script src="js/main.js"></script>
        <script>
          window.onload=function(){
          $('.selectpicker').selectpicker();
          $('.rm-mustard').click(function() {
            $('.remove-example').find('[value=Mustard]').remove();
            $('.remove-example').selectpicker('refresh');
          });
          $('.rm-ketchup').click(function() {
            $('.remove-example').find('[value=Ketchup]').remove();
            $('.remove-example').selectpicker('refresh');
          });
          $('.rm-relish').click(function() {
            $('.remove-example').find('[value=Relish]').remove();
            $('.remove-example').selectpicker('refresh');
          });
          $('.ex-disable').click(function() {
              $('.disable-example').prop('disabled',true);
              $('.disable-example').selectpicker('refresh');
          });
          $('.ex-enable').click(function() {
              $('.disable-example').prop('disabled',false);
              $('.disable-example').selectpicker('refresh');
          });

          // scrollYou
          $('.scrollMe .dropdown-menu').scrollyou();
            prettyPrint();
          };
        </script>
    </body>
</html>
