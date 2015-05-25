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
                            Home
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">

                            <div class="col-md-6">
                                <h1>Texto intro</h1>

                                <h2>Día</h2>

                                <div class="form-group">
                                    <label>Título</label>
                                    <input class="form-control" value="Este puede ser tu mejor día" >
                                </div>

                                <div class="form-group">
                                    <label>Texto</label>
                                    <textarea class="form-control" rows="3">Cualquier momento puede ser bueno si sabes disfrutarlo. Desconéctate y aprovecha tu energía del día, para disfrutar un gran momento junto a Castillo de Molina.</textarea>
                                </div>

                                <h2>Noche</h2>

                                <div class="form-group">
                                    <label>Título</label>
                                    <input class="form-control" value="Esta puede ser tu mejor noche" >
                                </div>

                                <div class="form-group">
                                    <label>Texto</label>
                                    <textarea class="form-control" rows="3">Si estás en casa, invita a tus amigos a cocinar algo nuevo o simplemente a descorchar una botella de buen vino y disfrutar del aquí y el ahora.</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h1>Nosotros</h1>

                                <div class="form-group">
                                    <label>Título</label>
                                    <input class="form-control" value="Nosotros" >
                                </div>

                                <div class="form-group">
                                    <label>Texto 1</label>
                                    <textarea class="form-control" rows="3">Castillo de Molina nace como la primer línea Reserva de Viña San Pedro, con una especial dedicación a la calidad e innovación, tomando con calma y cuidadosamente la búsqueda incansable de los mejores valles de Chile.</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Texto 2</label>
                                    <textarea class="form-control" rows="3">Castillo de Molina plantea el disfrutar a cada momento, en cada lugar, porque la vida es una vorágine, pero la vida es ahora.</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h1>Historia</h1>

                                <div class="form-group">
                                    <label>Título</label>
                                    <input class="form-control" value="Historia" >
                                </div>

                                <div class="form-group">
                                    <label>Texto 1</label>
                                    <textarea class="form-control" rows="3">“Se dice que los mejores vinos del mundo provienen de un château, un castillo”</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Texto 2</label>
                                    <textarea class="form-control" rows="3">Hace 150 años, los hermanos españoles Correa Albano fundaron Viña San Pedro en Molina, Chile. Al llegar a la cima más alta de sus tierras, maravillados contemplaron su majestuoso entorno. En ese instante, decidieron perpetuar esa sublime riqueza, en un “Castillo” que emergiera desde la tierra, su primer vino reserva: Castillo de Molina.</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h1>Valles</h1>

                                <div class="form-group">
                                    <label>Título</label>
                                    <input class="form-control" value="Valles" >
                                </div>

                                <div class="form-group">
                                    <label>Texto 1</label>
                                    <textarea class="form-control" rows="3">Castillo de Molina ha alcanzado una reconocida posición a nivel mundial, entre los mejores vinos chilenos en su segmento.</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Texto 2</label>
                                    <textarea class="form-control" rows="3">Busca constantemente descubrir el mejor origen específico para cada una de sus variedades y así obtener la máxima expresión en cada una de ellas.</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Texto valle Casa Blanca</label>
                                    <textarea class="form-control" rows="3">Casablanca es tal vez el más conocido de los valles fríos chilenos, a 18 km en línea recta del mar y rodeado por la Cordillera de la Costa. Tiene clara influencia marítima y cada día se presenta una neblina matinal llamada "camanchaca".</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Texto valle Elqui</label>
                                    <textarea class="form-control" rows="3">El Valle del Elqui está ubicado al norte de Chile y sus vides crecen bajo una poderosa influencia marina ya que están ubicadas a 20 km en línea recta del mar. Todas las mañanas, cubre los viñedos una nubosidad proveniente del mar hasta el medio día favoreciendo el clima fresco junto a una buena ventilación debido al fuerte viento del área. Sus suelos contienen un alto contenido mineral que le confieren una única identidad enológica a los Sauvignon Blanc. Castillo de Molina fue el primer Sauvignon Blanc de origen Valle de Elqui, siendo un éxito rotundo alrededor del mundo.</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Texto valle Rapel</label>
                                    <textarea class="form-control" rows="3">Ubicado al sur de Chile, nos encontramos con un valle generoso y de de suelos esponjosos, arcillosos y rocosos, donde se producen inmejorables vinos de variedad tinta como el Cabernet Sauvignon y Merlot. Este valle posee un clima Mediterráneo, con una gran oscilación térmica entre el día y la noche de casi 20°C y su verano es seco con un alto promedio de temperaturas, cercano a los 25°C.</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Texto valle Maule</label>
                                    <textarea class="form-control" rows="3">En el Valle del Maule se encuentra la localidad de Pencahue, un área conocida por su clima cálido-seco y por sus irregulares suelos rocosos. En tal ambiente, los Syrah de clima cálido y los Carmenère prueban su temple cultivados en secano, de excelente acidez natural y elegancia.</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Texto valle Curicó</label>
                                    <textarea class="form-control" rows="3">El Valle de Curicó se encuadra dentro de la región vitícola del Valle Central, situado en la Región del Maule. Este clima se caracteriza por la alta variación de temperatura entre el día y la noche. En las áreas más frescas se producen vinos Pinot Noir de calidad única. Los viñedos están plantados en una zona de lomajes suaves, en suelos de granito en descomposición sobre tobas volcanicas.</textarea>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <h1>Enología</h1>

                                <div class="form-group">
                                    <label>Título</label>
                                    <input class="form-control" value="Enología" >
                                </div>

                                <div class="form-group">
                                    <label>Texto 1</label>
                                    <textarea class="form-control" rows="3">Para cada cepa existe un valle que expresa a la perfección nuestra búsqueda de vinos de excelencia.</textarea>
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
