<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Castillo de Molina - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

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
                <a class="navbar-brand" href="index.html">Castillo de Molina - Admin</a>
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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-home"></i> Inicio</a>
                    </li>
<!--                     <li>
                        <a href="charts.html"><i class="fa fa-newspaper-o"></i> Editar noticias</a>
                    </li> -->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#espanol"><i class="fa fa-comments"></i> Editar español <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="espanol" class="collapse">
                            <li>
                                <a href="editar/espanol/menu.html">Menú y verificación edad</a>
                            </li>
                            <li>
                                <a href="editar/espanol/home.html">Home</a>
                            </li>
                            <li>
                                <a href="editar/espanol/noticias.html">Noticias</a>
                            </li>
                            <li>
                                <a href="editar/espanol/vinos.html">Vinos</a>
                            </li>
                            <li>
                                <a href="editar/espanol/cellparking.html">Cell Parking</a>
                            </li>
                            <li>
                                <a href="editar/espanol/contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ingles"><i class="fa fa-comments"></i> Editar inglés <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="ingles" class="collapse">
                            <li>
                                <a href="editar/ingles/menu.html">Menú y verificación edad</a>
                            </li>
                            <li>
                                <a href="editar/ingles/home.html">Home</a>
                            </li>
                            <li>
                                <a href="editar/ingles/noticias.html">Noticias</a>
                            </li>
                            <li>
                                <a href="editar/ingles/vinos.html">Vinos</a>
                            </li>
                            <li>
                                <a href="editar/ingles/cellparking.html">Cell Parking</a>
                            </li>
                            <li>
                                <a href="editar/ingles/contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Menú y verificación edad
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">

                            <div class="col-md-6">
                                <h1>Opciones del menú</h1>
                                <div class="form-group">
                                    <label>Nosotros</label>
                                    <input class="form-control" value="Nosotros" >
                                </div>

                                <div class="form-group">
                                    <label>Historia</label>
                                    <input class="form-control" value="Historia" >
                                </div>

                                <div class="form-group">
                                    <label>Valles</label>
                                    <input class="form-control" value="Valles" >
                                </div>

                                <div class="form-group">
                                    <label>Enología</label>
                                    <input class="form-control" value="Enología" >
                                </div>

                                <div class="form-group">
                                    <label>Noticias</label>
                                    <input class="form-control" value="Noticias" >
                                </div>

                                <div class="form-group">
                                    <label>Vinos</label>
                                    <input class="form-control" value="Vinos" >
                                </div>

                                <div class="form-group">
                                    <label>CellParking</label>
                                    <input class="form-control" value="CellParking" >
                                </div>

                                <div class="form-group">
                                    <label>Contacto</label>
                                    <input class="form-control" value="Contacto" >
                                </div>

                            </div>

                            <div class="col-md-6">

                                <h1>Verificación de edad</h1>

                                <div class="form-group">
                                    <label>Título</label>
                                    <input class="form-control" value="Verifique su edad" >
                                </div>

                                <div class="form-group">
                                    <label>Condición</label>
                                    <input class="form-control" value="Debe ser mayor de 18 años para visitar el sitio" >
                                </div>

                                <div class="form-group">
                                    <label>Texto botón</label>
                                    <input class="form-control" value="Soy mayor de 18 años" >
                                </div>

                            </div>

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

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../js/plugins/morris/raphael.min.js"></script>
    <script src="../../js/plugins/morris/morris.min.js"></script>
    <script src="../../js/plugins/morris/morris-data.js"></script>

</body>

</html>
