<?php 
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();

  $items = Sql_select('items',array('cod_seccion' => 'contactos'),'=');

  if(isset($post['nombre']))
  {
    EnviarMail('cmorabi@vspt.cl','Mensaje de'.$post['nombre'],$post['mensaje'],$post['email']);
    header("location: index.php");
    exit;
  }

?>
<article id="contact-content">
<!--     <section class="intro">
        <img class="img-background" src="img/contact.jpg" alt="">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div id="msj-intro" class="col-md-12">
                        <h2>¿Quiéres disfrutar?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
                    <?php foreach($items as $item)
                        { ?>
                          <?php if(utf8_encode($item[nombre_esp]) == 'Título')
                                { ?>
                                  <h2><?php echo $item[$get['idioma']]; ?></h2>
                          <?php } ?>

                    <?php } ?>
                </div>
            </div>
        </div>
        <img class="img-background" src="img/contact.jpg" alt="">
        <div class="container follow-us">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
                    <ul class="list-inline social">
                        <?php foreach($items as $item)
                        { ?>
                          <?php if(utf8_encode($item[nombre_esp]) == 'Título redes')
                                { ?>
                                  <li><?php echo $item[$get['idioma']].':'; ?></li>
                          <?php } ?>

                        <?php } ?>
                        <li><a href="https://www.facebook.com/CastillodeMolina" target="_parent"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="https://twitter.com/castillo_molina" target="_parent"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="https://instagram.com/castillo_molina/" target="_parent"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-md-10 col-md-offset-1 text-center x4-top">

                <form class="form-horizontal" role="form" method="post" id="form">

                        <div class="col-md-6 form-group">
                            <?php foreach($items as $item)
                            { ?>
                              <?php if(utf8_encode($item[nombre_esp]) == 'Título campo nombre')
                                    { ?>
                                      <label for="inputEmail3" class="col-sm-2 col-md-4 control-label"><?php echo $item[$get['idioma']].'*'; ?></label>
                              <?php } ?>

                            <?php } ?>
                            <div class="col-sm-8">
                                <input type="text" name="nombre" class="form-control" id="inputEmail3" placeholder="<?php echo $get['idioma'] == 'esp' ? 'Nombre y Apellido' : 'Name and Surname'; ?>">
                            </div>
                        </div>

                        <div class="col-md-6 form-group">
                            <?php foreach($items as $item)
                            { ?>
                              <?php if(utf8_encode($item[nombre_esp]) == 'Título campo Email')
                                    { ?>
                                      <label for="inputEmail3" class="col-sm-2 col-md-4 control-label"><?php echo $item[$get['idioma']].'*'; ?></label>
                              <?php } ?>
                            <?php } 
                            ?>
                            <div class="col-sm-8">
                                <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="<?php echo $get['idioma'] == 'esp' ? 'email@ejemplo.com' : 'email@example.com'; ?>">
                            </div>
                        </div>

                        <div class="col-md-12 x4-top form-group">
                              <?php foreach($items as $item)
                              { ?>
                                <?php if(utf8_encode($item[nombre_esp]) == 'Título campo Comentario')
                                      { ?>
                                        <label for="inputEmail3" class="col-sm-2 col-md-2 control-label"><?php echo $item[$get['idioma']].'*'; ?></label>
                                <?php } ?>

                              <?php } ?>
                            <div class="col-sm-8 col-md-10 text-area-col">
                                <textarea class="form-control pull-left" name="mensaje" rows="12" placeholder="<?php echo $get['idioma'] == 'esp' ? 'Cuerpo del mensaje' : 'Message body'; ?>"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 x4-top form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <?php foreach($items as $item)
                                { ?>
                                  <?php if(utf8_encode($item[nombre_esp]) == 'Botón Enviar mensaje')
                                        { ?>
                                          <p><input type="submit" value="<?php echo $item[$get['idioma']]; ?>"></p>
                                  <?php } ?>

                                  <?php if(utf8_encode($item[nombre_esp]) == 'Texto campos obligatorios')
                                        { ?>
                                          <p id="error" style="display:none;"><small><?php echo '* '.$item[$get['idioma']]; ?></small></p>
                                  <?php } ?>

                                <?php } ?>
                                
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </section>
</article>
<script type="text/javascript">
    $('#form').submit(function(){
      $('#error').hide();
      error = false;

      $('.form-control').each(function(){
        if($(this).val() == '')
        {
          error = true;
        }
      });

      if(error){
        $('#error').show();
        return false;
      }
    });
  </script>
