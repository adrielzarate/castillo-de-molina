<?php $secciones = Sql_select('secciones',0,'='); ?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="index.php"> Castillo de Molina - Admin </a>
	</div>
	<!-- Top Menu Items -->
	<ul class="nav navbar-right top-nav">
	  <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bienvenido <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <!-- <li>
            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
        </li>
        <li class="divider"></li> -->
        <li>
            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
        </li>
      </ul>
	  </li>
	</ul>
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
	  <ul class="nav navbar-nav side-nav">
	    <li class="active">
        <a href="index.php"><i class="fa fa-home"></i> Inicio</a>
	    </li>
			<!--<li>
	        <a href="charts.html"><i class="fa fa-newspaper-o"></i> Editar noticias</a>
	    </li> -->
	    <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#espanol"><i class="fa fa-comments"></i> Editar español <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="espanol" class="collapse">
          <?php foreach($secciones as $seccion){ ?>
            <li>
              <a href=<?php echo $seccion["nombre"].".php?idioma=esp"; ?>><?php echo utf8_encode($seccion["esp"]); ?></a>
            </li>
          <?php } ?>
        </ul>
      </li>
      <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#ingles"><i class="fa fa-comments"></i> Editar inglés <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="ingles" class="collapse">
          <?php foreach($secciones as $seccion){ ?>
            <li>
              <a href=<?php echo $seccion["nombre"].".php?idioma=eng"; ?>><?php echo $seccion["eng"]; ?></a>
            </li>
          <?php } ?>
        </ul>
	    </li>
	  </ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>