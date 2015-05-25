<?php
	include('mysql/mysql.php');
	include('includes/funciones.php');

	$get = LimpiarGET();
	$post = LimpiarPOST();
	
	ControlAdmin();
	
	$pag_actual = 'home';

	
?>
<!DOCTYPE html>
<html>
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
              Bienvenido <small>Seleccione una opción para comenzar a editar.</small>
            </h1>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-6">
            <div class="panel panel-yellow">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-9">
                    <div class="huge">Español</div>
                  </div>
                  <div class="col-xs-3 text-right">
                    <i class="fa fa-comments fa-4x"></i>
                  </div>
                </div>
              </div>
              <div class="list-group">
                <?php foreach($secciones as $seccion){ ?>
                	<a href=<?php echo $seccion['nombre'].'.php?idioma=esp'; ?> class="list-group-item"><?php echo utf8_encode($seccion["esp"]); ?></a>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-red">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-9">
                    <div class="huge">Inglés</div>
                  </div>
                  <div class="col-xs-3 text-right">
                    <i class="fa fa-comments fa-4x"></i>
                  </div>
                </div>
              </div>
              <div class="list-group">
              	<?php foreach($secciones as $seccion){ ?>
                	<a href=<?php echo $seccion['nombre'].".php?idioma=eng"; ?> class="list-group-item"><?php echo $seccion["eng"]; ?></a>
                <?php } ?>
              </div>
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
	<?php include("includes/footer.php"); ?>
</body>
</html>
