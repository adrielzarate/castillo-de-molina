<?php
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();
  $items_edad = Sql_select('items',array('cod_seccion' => 'menu','cod_sub_seccion' => 'edad'),'=');
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

        <link rel="icon" href="favicon.png">

        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic|Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.min.css">
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

        <div id="cargando" class="text-center">
            <img src="img/loader.gif" alt="">
            <p>cargando</p>
        </div>

        <footer>
            <div class="row">
                <div class="col-sm-12">
                    <a class="pull-left" href="">Terminos y condiciones</a>
                    <a class="pull-right" href="">Copyright 2011 Viña San Pedro</a>
                </div>
            </div>
        </footer>

        <div class="cover"></div>
        <div id="check-language" class="container select-language">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="img/logo-nigth.png" alt="">
                </div>

                <br><br><br><br><br>

                <div class="col-xs-offset-1 col-xs-11 col-sm-offset-3 col-sm-3 language-esp">
                  <?php foreach($items_edad as $item)
                  { ?>
                    <?php if(utf8_encode($item['nombre_esp']) == 'Título')
                    { ?>
                      <h2 id="titulo" class="enfasis age_index"><?php echo $item[esp]; ?></h2>
                    <?php } ?>
                    <?php if(utf8_encode($item['nombre_esp']) == 'Condición')
                    { ?>
                      <em id="condicion" class="age_index"><?php echo $item[esp]; ?></em>
                    <?php } ?>
                    <?php if(utf8_encode($item['nombre_esp']) == 'Texto botón')
                    { ?>
                      <a href="index.php?idioma=esp"><?php echo $item[esp]; ?></a>
                    <?php } ?>
                  <?php } ?>
                </div>

                <div class="col-xs-offset-1 col-xs-11 col-sm-3 language-eng">
                  <?php foreach($items_edad as $item)
                  { ?>
                    <?php if(utf8_encode($item['nombre_esp']) == 'Título')
                    { ?>
                      <h2 id="titulo" class="enfasis age_index"><?php echo $item[eng]; ?></h2>
                    <?php } ?>
                    <?php if(utf8_encode($item['nombre_esp']) == 'Condición')
                    { ?>
                      <em id="condicion" class="age_index"><?php echo $item[eng]; ?></em>
                    <?php } ?>
                    <?php if(utf8_encode($item['nombre_esp']) == 'Texto botón')
                    { ?>
                      <a href="index.php?idioma=esp"><?php echo $item[eng]; ?></a>
                    <?php } ?>
                  <?php } ?>
                </div>

            </div>
        </div>

        <!--script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script-->
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script type="text/javascript">
          var idioma = '<?php echo $get['idioma']; ?>';

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&language=es"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/source/js/jquery.sky.carousel-1.0.2.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
