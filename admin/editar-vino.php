<?php
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();
  
  ControlAdmin();
  
  $pag_actual = 'vinos';

  if(isset($get['id_vino']))
  {
    $vino = Sql_select('vinos',array('id' => $get['id_vino']),'=');
    $vino = $vino[0];
  }


  if(isset($post["nombre"]))
  {
    $valores['nombre'] = $post['nombre'];
    $valores['cod_idioma'] = $post['cod_idioma'];
    $valores['titulo_origen'] = $post['titulo_origen'];
    $valores['texto_origen'] = $post['texto_origen'];
    $valores['titulo_vendimia'] = $post['titulo_vendimia'];
    $valores['titulo_clima'] = $post['titulo_clima'];
    $valores['texto_clima'] = $post['texto_clima'];
    $valores['titulo_vinificacion'] = $post['titulo_vinificacion'];
    $valores['texto_vinificacion'] = $post['texto_vinificacion'];
    
    if($post['id_vino'] == '')
    {
      Sql_insertar('vinos',$valores);
    }
    else
    {
      Sql_update('vinos',$valores,array('id' => $post['id_vino']));
    }
    header("location: vinos.php?idioma=".$post['idioma']."&operacion=exito");
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
              <?php echo $get["idioma"] == "esp"?"Editar vino":"Edit wine"; ?>
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
            <form role="form">
              <div class="col-md-6">
                <br>
                <div class="form-group">
                    <label><?php echo $get["idioma"] == "esp"?"Nombre del vino":"Wine name"; ?></label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $vino['nombre']; ?>" class="form-control" placeholder="<?php echo $get['idioma'] == 'esp'?'Nombre del vino':'Wine name'; ?>" >
                </div>

                <div class="form-group">
                    <label><?php echo $get["idioma"] == "esp"?"Imagen vino slideshow":"Wine image slideshow"; ?></label>
                    <input type="file">
                    <p class="help-block"><?php echo $get["idioma"] == "esp"?"La imagen debe ser de ":"Image should be "; ?>200x378 pixels</p>
                </div>

                <div class="form-group">
                    <label><?php echo $get["idioma"] == "esp"?"Imagen vino horizontal":"Wine image horizontally"; ?></label>
                    <input type="file">
                    <p class="help-block"><?php echo $get["idioma"] == "esp"?"La imagen debe ser de ":"Image should be "; ?>800x228 pixels</p>
                </div>

                <div class="form-group">
                    <label><?php echo $get["idioma"] == "esp"?"Imagen texto gestual dia":"Image text gestural day"; ?></label>
                    <input type="file">
                    <p class="help-block"><?php echo $get["idioma"] == "esp"?"La imagen debe ser de ":"Image should be "; ?>843x597 pixels</p>
                </div>

                <div class="form-group">
                    <label><?php echo $get["idioma"] == "esp"?"Imagen texto gestual noche":"Image text gestural night"; ?></label>
                    <input type="file">
                    <p class="help-block"><?php echo $get["idioma"] == "esp"?"La imagen debe ser de ":"Image should be "; ?>843x597 pixels</p>
                </div>

                <div class="form-group">
                    <label>Wine Kit</label>
                    <input type="file">
                    <p class="help-block"><?php echo $get["idioma"] == "esp"?"El archivo debe estar en formato zip":"Image text gestural day"; ?></p>
                </div>

                <div class="form-group">
                    <label>Título Origen</label>
                    <input class="form-control" value="Origen" >
                </div>

                <div class="form-group">
                    <label>Texto Origen</label>
                    <textarea class="form-control" rows="3" placeholder="Texto del vino"></textarea>
                </div>

                <div class="form-group">
                    <label>Título Vendimia</label>
                    <input class="form-control" value="Vendimia" >
                </div>

                <div class="form-group">
                    <label>Texto Vendimia</label>
                    <textarea class="form-control" rows="3" placeholder="Texto de Vendimia"></textarea>
                </div>

                <div class="form-group">
                    <label>Título Clima</label>
                    <input class="form-control" value="Clima" >
                </div>

                <div class="form-group">
                    <label>Texto Clima</label>
                    <textarea class="form-control" rows="3" placeholder="Texto de Clima"></textarea>
                </div>

                <div class="form-group">
                    <label>Título Vinificación</label>
                    <input class="form-control" value="Vinificación" >
                </div>

                <div class="form-group">
                    <label>Texto Vinificación</label>
                    <textarea class="form-control" rows="3" placeholder="Texto de Vinificación"></textarea>
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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
</body>
</html>
