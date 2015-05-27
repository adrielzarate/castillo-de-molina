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
                            Noticias
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-md-6">

                            <h2>Nueva noticia</h2>

                            <div class="alert alert-info" role="alert">
                                <div class="row">
                                    <div class="col-sm-2"><a class="btn btn-primary text-right" href="editar-noticia.html">Cargar noticia</a></div>
                                </div>
                            </div>

                            <h2>Lista de noticias</h2>

                            <div class="alert alert-info" role="alert">
                                <div class="row">
                                    <div class="col-sm-10"><span  class="text-left">Titulo de la noticia</span></div>
                                    <div class="col-sm-2"><a class="btn btn-primary text-right" href="editar-noticia.html">Editar</a></div>
                                </div>
                            </div>

                            <div class="alert alert-info" role="alert">
                                <div class="row">
                                    <div class="col-sm-10"><span  class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, perspiciatis?</span></div>
                                    <div class="col-sm-2"><a class="btn btn-primary text-right" href="editar-noticia.html">Editar</a></div>
                                </div>
                            </div>

                            <div class="alert alert-info" role="alert">
                                <div class="row">
                                    <div class="col-sm-10"><span  class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing.</span></div>
                                    <div class="col-sm-2"><a class="btn btn-primary text-right" href="editar-noticia.html">Editar</a></div>
                                </div>
                            </div>

                            <nav>
                              <ul class="pagination">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>

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