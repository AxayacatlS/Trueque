<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Taller | Trueque Ñuu Savi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/faviconL.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="inicio.php">
                    <h1><img src="images/logoF2.jpg" alt="logo">Trueque Ñuu Savi</h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="inicio.php">Inicio</a></li>
                        
                        <li class="dropdown"><a href="#">Productos<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="blogone.php">Productos Disponibles</a></li>
                                <li><a href="" data-toggle="modal" data-target="#modalCartProductos">Ver sus productos</a></li>
                                <li><a href="" data-toggle="modal" data-target="#modalLoginAvatar">Agregar un producto</a></li>
                                <li><a href="" data-toggle="modal" data-target="#modalCart">Historial</a></li>
                            </ul>
                        </li>                    
                        <li class="dropdown"><a href="#">Taller y Capacitacion<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="taller.php">Talleres</a></li>
                                <li><a href="service.php">Capacitaciones</a></li>
                                <li><a href="#">Progresos de Actividades</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Perfil<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="#">Ver perfil</a></li>
                                <li><a href="#">Modificar perfil</a></li>
                                <li><a href="#">Agregar ubicacion</a></li>
                            </ul>
                        </li>                      
                        <li><a href="index.php" >Cerrar Sesion</a></li>                       
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Buscar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Talleres</h1>
                            <p>Demuestre sus habilidades y aprenda nuevos metodos de accion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="choose">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <img src="images/services/tallerlogo.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <h2>Aprenda una nueva actividad</h2>
                    <p>Con los talleres usted puede ejercer una nueva actividad productiva y proponer nuevas ideas para su comunidad<br /></p>
                    <ul class="elements">
                        <li class="wow fadeInUp" data-wow-duration="900ms" data-wow-delay="100ms"><i class="fa fa-angle-right"></i>Use materiales visuales</li>
                        <li class="wow fadeInUp" data-wow-duration="800ms" data-wow-delay="200ms"><i class="fa fa-angle-right"></i>Se le proporcionaran todas las herramientas necesarias</li>
                        <li class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><i class="fa fa-angle-right"></i>Material interactivo</li>
                        <li class="wow fadeInUp" data-wow-duration="600ms" data-wow-delay="400ms"><i class="fa fa-angle-right"></i>Dispondra de asesoria profesional</li>
                        <!--<li class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms"><i class="fa fa-angle-right"></i> but also the leap into electronic typesetting.</li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#company-information-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/services/s1.jpg" alt="">
                        </div>
                        <h2>Desarollo sostenible en casa</h2>
                        <p>Aprenda como llevar el desarrollo en casa y aprenda junto con su familia</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/services/s2.jpg" alt="">
                        </div>
                        <h2>Energias renovables</h2>
                        <p>Conozca las nuevas tecnologias de energia en el mundo</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/services/s3.jpg" alt="">
                        </div>
                        <h2>Hidroponia</h2>
                        <p>¿Puede sembrar sin tierra?. Conozca esta maravillosa tecnica de cultivar solo con agua</p>
                    </div>
                </div>

                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/services/s4.jpg" alt="">
                        </div>
                        <h2>Calentamiento global</h2>
                        <p>Debemos frenar el calentamiento global para mejorar el mundo</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/services/s5.jpg" alt="">
                        </div>
                        <h2>Mejorar la calidad de vida</h2>
                        <p>Conozca las maneras de mejorar los habitos de su vida</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/services/s6.jpg" alt="">
                        </div>
                        <h2>Un recurso vital: El agua</h2>
                        <p>El agua es un tema importante, aprenda nuevas tecnicas de reeutilizar y cuidar este gran recurso</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

 
    <!--/#action-->

   
    <!--/#recent-projects-->

  
    <!--/#clients-->


    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                </div>
                <div class="col-md-4 col-sm-6">
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Deje su comentario</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Añada su comentario"></textarea>
                            </div>                      
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Enviar comentario">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <!-- Modal: modalCart -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Historial de Trueque</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Producto</th>
              <th>Aproximado de costo:</th>
              <th>Remover del Historial</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Pan cemita</td>
              <td>10$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Leche</td>
              <td>30$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jitomate</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Canasta de Frutas</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr class="total">
              <th scope="row">5</th>
              <td>Total</td>
              <td>240$</td>
              <td></td>
            </tr>
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-primary">Checar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->

<!-- Modal: modalCart Sus Productos-->
<div class="modal fade" id="modalCartProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Mis productos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Producto</th>
              <th>Aproximado de costo:</th>
              <th>Remover mi Producto</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Pan cemita</td>
              <td>10$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Leche</td>
              <td>30$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jitomate</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-primary">Agregar Producto</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->

<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="images/agregarpr.jpg" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2">Ingrese una imagen de su producto</h5>
        <div class="text-center mt-4">
          <button class="btn btn-cyan mt-1">Agregar imagen</button>
        </div>
        <p></p>
        <div class="md-form ml-0 mr-0">
          <label data-error="wrong" data-success="right" for="form29" class="ml-0">Nombre del producto</label>
          <input  type="text" id="nombre-form29" class="form-control form-control-sm validate ml-0">
        </div>
        <div class="md-form ml-0 mr-0">
          <label data-error="wrong" data-success="right" for="form29" class="ml-0">Precio</label>
          <input  type="text" id="precio-form29" class="form-control form-control-sm validate ml-0">
        </div>
        <div class="md-form ml-0 mr-0">
          <label data-error="wrong" data-success="right" for="form29" class="ml-0">Descripcion</label>
          <input  type="text" id="descrpcion-form29" class="form-control form-control-sm validate ml-0">
        </div>
        <p></p>
        <div class="text-center mt-4">
          <button class="btn btn-cyan mt-1">Agregar Producto</button>
        </div>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login with Avatar Form-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>
