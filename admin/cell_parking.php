<?php
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();
  
  ControlAdmin();
  
  $pag_actual = 'cell_parking';

  $items = Sql_select('items',array('cod_seccion' => 'cell_parking'),'=');
  $seccion_actual = Sql_select("secciones",array('nombre' => 'cell_parking'),'=');
  $seccion_actual = $seccion_actual[0]; 

  if(isset($post['idioma'])){
    foreach ($post as $id => $traduccion) {
      if($id != "idioma")
      {
        $valores[$post['idioma']] = $traduccion;
        Sql_update('items',$valores,array('id' => $id));
      }
    }
    header("location: cell_parking.php?idioma=".$post['idioma'].'&operacion=exito');
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
            <div id="error" class="panel panel-danger" style="display:none;">
                <div class="panel-heading">
                  <h3>
                    <?php if($get['idioma'] == 'esp'){
                    echo "*No se pueden dejar campos en blanco.";
                    }else {
                      echo "*Fields can not be left blank"; } ?>
                  </h3>
                </div>
              </div>
            <form role="form" method="post" id="form">
              <input type="hidden" name="idioma" value=<?php echo $get['idioma']; ?>>
                <div class="col-md-6">
                  <h1></h1>
                  <?php foreach($items as $item){ ?>
                    <div class="form-group">
                      <label><?php echo utf8_encode($item['nombre_'.$get['idioma']]); ?></label>
                      <?php if($item['text'] == 'si'){ ?>
                        <textarea class="form-control" rows="5" name=<?php echo $item['id']; ?> id=<?php echo $item['id']; ?>><?php echo $item[$get['idioma']]; ?></textarea>
                      <?php } else { ?>
                        <input multiple="on" autocomplete="off" type="text" class="form-control" value="<?php echo $item[$get['idioma']]; ?>" name=<?php echo $item['id']; ?> id=<?php echo $item['id']; ?>>
                      <?php } ?>
                    </div>
                  <?php } ?>
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

      $('.form-control').each(function(){
        if($(this).val() == '')
        {
          error = true;
        }
      });

      if(error){
        $('#error').show();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      }
    });
  </script>

</body>
</html>
