<?php
  include('mysql/mysql.php');
  include('includes/funciones.php');

  $get = LimpiarGET();
  $post = LimpiarPOST();
  
  ControlAdmin();
  
  $pag_actual = 'menu';

  $subsecciones = Sql_select('subsecciones',array('cod_seccion' => 'menu'),'=');
  $seccion_actual = Sql_select("secciones",array('nombre' => 'menu'),'=');
  $seccion_actual = $seccion_actual[0]; 

  if(isset($post['idioma'])){
    foreach ($post as $id => $traduccion) {
      if($id != "idioma")
      {
        $valores[$post['idioma']] = $traduccion;
        Sql_update('items',$valores,array('id' => $id));
      }
    }
    header("location: menu.php?idioma=".$post['idioma']);
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
                    echo "Fields can not be left blank"; } ?>
                </h3>
              </div>
            </div>
            <form role="form" method="post" id="form">
              <input type="hidden" name="idioma" value=<?php echo $get['idioma']; ?>>
              <?php foreach($subsecciones as $subseccion) { ?>
                <div class="col-md-6">
                <h1><?php echo utf8_encode($subseccion[$get['idioma']]); ?></h1>
                <?php $items = Sql_select('items',array('cod_seccion' => 'menu','cod_sub_seccion' => $subseccion['nombre']),'='); ?>
                <?php foreach($items as $item){ ?>
                  <div class="form-group">
                    <label><?php echo utf8_encode($item['nombre_'.$get['idioma']]); ?></label>
                    <?php if($item['cod_sub_seccion'] == 'edad'){ ?>
                      <textarea class="form-control" rows="5" name=<?php echo $item['id']; ?> id=<?php echo $item['id']; ?>><?php echo $item[$get['idioma']]; ?></textarea>
                    <?php } else { ?>
                      <input multiple="on" autocomplete="off" type="text" class="form-control" value="<?php echo $item[$get['idioma']]; ?>" name=<?php echo $item['id']; ?> id=<?php echo $item['id']; ?>>
                    <?php } ?>
                  </div>
                <?php } ?>
                </div>
              <?php } ?>
              <div class="col-md-12 text-right breadcrumb">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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

      for(i=0; i < $('.form-control').length; i+=1)
      {
        if($('.form-control')[i].value == '')
        {
          error = true;
        }
      }

      if(error){
        $('#error').show();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      }
    });
  </script>
</body>
</html>