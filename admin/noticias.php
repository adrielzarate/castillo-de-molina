<?php
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();
  
  ControlAdmin();
  
  $pag_actual = 'noticias';

  $seccion_actual = Sql_select("secciones",array('nombre' => 'menu'),'=');
  $seccion_actual = $seccion_actual[0]; 


  $tabla = 'noticias';
  $pagina = 'noticias.php';
  $page = (isset($get['page'])) ? $get['page'] : 0;
  $search = (isset($get['search'])) ? $get['search'] : '';
  $limite['inicio'] = $page*6;
  $limite['final'] = 6;
  $orden['campo'] = (isset($get['order'])) ? $get['order'] : 'id';
  $orden['orden'] = (isset($get['order_by'])) ? $get['order_by'] : 'DESC';
  $order = $orden['campo'];
  $order_by = $orden['orden'];
  $order_by_new = ($order_by=='DESC') ? 'ASC' : 'DESC';

  if($search)
  {
    $lst = Sql_select_especial($tabla,array('titulo' => $search),'LIKE',0,$orden,'OR');
    $max_reg = 0;
  }
  else
  {
    $lst = Sql_select_especial($tabla,array('cod_idioma' => $get['idioma']),'=',$limite,$orden,'AND');
    $max_reg = count(Sql_select($tabla,array('cod_idioma' => $get['idioma']),'='));
  }
  $max_pag = ceil($max_reg/6);

  if(isset($post["id_noticia_borrar"]))
  {
    Sql_delete('noticias',array('id' => $post["id_noticia_borrar"]));
    header("location: noticias.php?operacion=exito&idioma=".$post['idioma']);
    exit;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("includes/head.php"); ?>
</head>
<body>
  <div id="wrapper">
      <?php include("includes/header.php"); ?>
      <div id="page-wrapper">
        <div class="container-fluid">
          <!-- Page Heading -->
          <?php if($get['operacion'] == 'exito')
          { ?>
            <div class="alert alert-success alert-dismissible fade in">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4>
                <?php if($get['idioma'] == 'esp'){
                echo "*Operación realizada con éxito.";
                }else {
                  echo "Successful operation"; } ?>
              </h4>
            </div>
          <?php } ?>
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">
                <?php echo utf8_encode($seccion_actual[$get['idioma']]); ?>
              </h1>
            </div>
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="col-md-6">
                <h2><?php echo $get["idioma"] == "esp"?"Nueva noticia":"New story"; ?></h2>
                <div class="alert alert-info" role="alert">
                  <div class="row">
                    <div class="col-sm-2">
                      <a class="btn btn-primary text-right" href="<?php echo 'editar-noticia.php?idioma='.$get['idioma']; ?>">
                        <?php echo $get["idioma"] == "esp"?"Cargar noticia":"Upload news"; ?>
                      </a>
                    </div>
                  </div>
                </div>
                <h2><?php echo $get["idioma"] == "esp"?"Lista de noticias":"News list"; ?></h2>
                <?php if(is_array($lst))
                  { 
                    foreach($lst as $news){ ?>
                      <div class="alert alert-info" role="alert">
                        <div class="row">
                          <div class="col-sm-7">
                            <span  class="text-left"><?php echo $news['titulo']; ?></span>
                          </div>
                          <div class="col-sm-2">
                            <a class="btn btn-primary text-right" href="<?php echo 'editar-noticia.php?idioma='.$get['idioma'].'&id_noticia='.$news['id']; ?>">
                              <?php echo $get["idioma"] == "esp"?"Editar":"Edit"; ?>
                            </a>
                          </div>
                          <div class="col-sm-2">
                            <a class="btn btn-danger text-right" href="javascript:void(0);" onclick="EliminarNoticia(<?php echo $news['id']; ?>)">
                              <?php echo $get["idioma"] == "esp"?"Eliminar":"Delete"; ?>
                            </a>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  <?php 
                  } 
                  else 
                  { ?>
                    <div class="well">
                      <h4>
                      <?php echo $get['idioma'] == 'esp' ? "No hay noticias cargadas" : "No charged news"; ?>
                      </h4>
                    </div>
                  <?php 
                  }  ?>
                <?php include("includes/paginador.php"); ?>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

  <div class="modal fade" id="modal_eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="POST" action="">
        <input type="hidden" name="id_noticia_borrar" id="id_noticia_borrar">
        <input type="hidden" name="idioma" value="<?php echo $get['idioma']; ?>">
        <div class="modal-content">
          <div class="modal-header">
            <a type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
            <h4 class="modal-title"><?php echo $get['idioma'] == 'esp' ? "Eliminar noticia" : "Delete news"; ?></h4>
          </div>
          <div class="modal-body" style="padding-bottom:0;">
            <?php echo $get['idioma'] == 'esp' ? "Se eliminará la noticia<br>¿Desea continuar?" : "The news will be deleted<br>Would you continue?"; ?>
          </div>
          <div class="modal-footer">
            <a data-dismiss="modal" class="btn btn-default"><?php echo $get['idioma'] == 'esp' ? "Cancelar" : "Cancel"; ?></a>
            <button type="submit" class="btn btn-success"><?php echo $get['idioma'] == 'esp' ? "Confirmar" : "Confirm"; ?></a>
          </div>
        </div>
      </form>
    </div>
  </div>


  <?php include("includes/footer.php"); ?>
  <script type="text/javascript">
  function EliminarNoticia(id_noticia)
  {
    $('#id_noticia_borrar').val(id_noticia);
    $('#modal_eliminar').modal('show');
  }
  </script>


</body>
</html>