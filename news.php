<?php
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();


  $seccion_actual = Sql_select("secciones",array('nombre' => 'menu'),'=');
  $seccion_actual = $seccion_actual[0];


  $tabla = 'noticias';
  $page = (isset($get['page'])) ? $get['page'] : 0;
  $limite['inicio'] = $page*6;
  $limite['final'] = 6;
  $orden['campo'] = (isset($get['order'])) ? $get['order'] : 'fecha';
  $orden['orden'] = (isset($get['order_by'])) ? $get['order_by'] : 'DESC';
  $order = $orden['campo'];
  $order_by = $orden['orden'];
  $order_by_new = ($order_by=='DESC') ? 'ASC' : 'DESC';

  $noticias = Sql_select_especial($tabla,array('cod_idioma' => $get['idioma']),'=',$limite,$orden,'AND');
  $max_reg = count(Sql_select($tabla,array('cod_idioma' => $get['idioma']),'='));

  $max_pag = ceil($max_reg/6);


?>

<article id="news-content">
<!--     <section class="intro">
        <img class="img-background" src="img/news.jpg" alt="">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div id="msj-intro" class="col-md-12">
                        <h2>Noticias</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section>
        <div class="container">

            <div class="row">
                <?php
                if(is_array($noticias))
                {
                  foreach($noticias as $noticia)
                  { ?>
                    <div class="col-sm-4 a-new">
                        <a href="<?php echo $noticia['link']; ?>" target="_blank">
                            <img class="img-responsive" src="<?php echo 'img/noticias/'.$noticia['img']; ?>" alt="">
                            <h3><?php echo $noticia['titulo']; ?></h3>
                            <time><?php echo $noticia['fecha']; ?></time>
                            <p><?php echo $noticia['texto'].'[..]'; ?></p>
                            <p class="btn uppercase"><?php echo $get['idioma'] == 'esp'? 'Continuar leyendo' : 'Continue reading'; ?></p>
                        </a>
                    </div>
                  <?php }
                }else{
                  echo $get['idioma'] == 'esp'? 'No hay noticias cargadas' : 'No charged news';
                } ?>
            </div>

            <nav>
              <?php include("includes/paginador.php"); ?>
            </nav>


        </div>
    </section>
</article>
