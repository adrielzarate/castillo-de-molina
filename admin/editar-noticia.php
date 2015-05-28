<?php
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();
  
  ControlAdmin();
  
  $pag_actual = 'noticias';

  if(isset($get['id_noticia']))
  {
    $noticia = Sql_select('noticias',array('id' => $get['id_noticia']),'=');
    $noticia = $noticia[0];
  }


  if(isset($post["titulo"]))
  {
    $valores['titulo'] = $post['titulo'];
    $valores['texto'] = $post['texto'];
    $valores['cod_idioma'] = $post['idioma'];
    $valores['fecha'] = $post['fecha'];
    $valores['link'] = $post['link'];
    
    if($post['id_noticia'] == '')
    {
      Sql_insertar('noticias',$valores);
    }
    else
    {
      Sql_update('noticias',$valores,array('id' => $post['id_noticia']));
    }
    header("location: noticias.php?idioma=".$post['idioma']."&operacion=exito");
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
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              <?php echo $get["idioma"] == "esp"?"Editar noticia":"Edit news"; ?>
            </h1>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-12">
            <div id="error" class="alert alert-danger alert-dismissible fade in" style="display:none;">
              <h4>
                <?php if($get['idioma'] == 'esp'){
                echo "*El campo título y texto son obligatorios.";
                }else {
                  echo "The title and text field are required"; } ?>
              </h4>
            </div>
            <form role="form" method="post" id="form">
              <input type="hidden" name="idioma" value="<?php echo $get['idioma']; ?>">
              <input type="hidden" name="id_noticia" value="<?php echo $get['id_noticia']; ?>">
              <div class="col-md-6">
                <br>
                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Imagen de la noticia":"News image"; ?></label>
                  <input type="file">
                  <p class="help-block"><?php echo $get["idioma"] == "esp"?"La imagen debe ser de ":"Image should be "; ?>650x190 pixels</p>
                </div>
                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Título":"Title"; ?></label>
                  <input type="text" name="titulo" id="titulo" value="<?php echo $noticia['titulo']; ?>" class="form-control" placeholder="<?php echo $get['idioma'] == 'esp'?'Título de la noticia':'News title'; ?>" >
                </div>
                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Fecha':'Date'; ?></label>
                  <input data-provide="datepicker" class="form-control datepicker" name="fecha" value="<?php echo $noticia['fecha']; ?>" >
                </div>
                <div class="form-group">
                  <label><?php echo $get['idioma'] == 'esp'?'Texto':'Text'; ?></label>
                  <textarea name="texto" id="texto" class="form-control" rows="3" placeholder="<?php echo $get['idioma'] == 'esp'?'Texto de la noticia':'News text'; ?>"><?php echo $noticia['texto']; ?></textarea>
                </div>
                <div class="form-group">
                  <label><?php echo $get["idioma"] == "esp"?"Link a la noticia":"Link to the news"; ?></label>
                  <input type="text" name="link" id="link" value="<?php echo $noticia['link']; ?>" class="form-control" placeholder="<?php echo $get['idioma'] == 'esp'?'Link':'Link'; ?>" >
                </div>
                <div class="form-group text-right">
                  <button type="submit" class="btn btn-primary"><?php echo $get['idioma'] == 'esp'?'Guardar cambios':'Save changes'; ?></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->
  <?php include("includes/footer.php"); ?>
  <script type="text/javascript">
    $('#form').submit(function(){
      $('#error').hide();
      error = false;
      
      if($('#titulo').val() == '' || $('#texto').val() == '')
      {
        error = true;
      }

      if(error){
        $('#error').show();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      }
    });

    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd'
    });
    
  </script>

</body>
</html>
