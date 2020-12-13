<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trueque, Intercambio, productores, productos, agricultores, productos, desarrollo, sostenible">
    <meta name="author" content="Ascension45">
    <title>Inicio | Trueque Ñuu Savi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">

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
                            <!--
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            -->
                            
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
                        <!--<h1><img src="images/logo.png" alt="logo"></h1>-->
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
                                <!--
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="contact2.html">Contact us 2</a></li>
                                <li><a href="404.html">404 error</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                -->
                            </ul>
                        </li>                    
                        <li class="dropdown"><a href="#">Taller y Capacitacion<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="taller.php">Talleres</a></li>
                                <li><a href="service.php">Capacitaciones</a></li>
                                <li><a href="#">Progresos de Actividades</a></li>
                                <!--
                                <li><a href="#">Capacitaciones</a></li>
                                <li><a href="#">Capacitacion en curso</a></li>
                                <li><a href="#">Progreso de capacitacion</a></li>
                                -->
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Perfil<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="#">Ver perfil</a></li>
                                <li><a href="#">Modificar perfil</a></li>
                                <li><a href="#">Agregar ubicacion</a></li>
                                <!--
                                <li><a href="portfoliotwo.html">3 Columns + Left Sidebar</a></li>
                                <li><a href="portfoliothree.html">2 Columns</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                -->
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

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Rompiendo barreras</h1>
                        <p>En esta plataforma podra compartir sus productos o servicios a la comunidad de Tlaxiaco,Oax. para poder realizar un trueque o vender</p>
                        <a href="blogone.php" class="btn btn-common">Checar Productos</a>
                    </div>
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icons1.png" alt="">
                        </div>
                        <h2>Haga un Trueque</h2>
                        <p>hay muchos productos disponibles que le interesa puede realizar un trueque</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icons2.png" alt="">
                        </div>
                        <h2>Suba sus productos</h2>
                        <p>Podra subir sus productos en la plataforma para que los demas personas las puedan ver</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/images2.png" alt="">
                        </div>
                        <h2>Capacitece</h2>
                        <p>Si hay productos disponibles que le interesa puede realizar un trueque</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Consiga lo que necesita de manera sencilla</h1>
                            <p>Su producto llegara rapidamente</p>
                        </div>
                        <!--<div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">TAKE THE TOUR</a>
                             </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->
<!--
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/images1.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Ofrezca sus productos</h2>
                        <P>En esta plataforma podra ofrecer sus productos o vender de manera adecuada, sabiendo que tendra a su dispocision una entrega inmediata</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Reciba capacitacion</h2>
                        <P>Aqui podra encontrar cursos para ejercer el desarrollo sostenible en su hogar</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/images2.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/images3.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Comparta su experiencia</h2>
                        <P>Podra interactuar con demas personas de la plataforma para el intercambio de ideas</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
     <!--/#features-->
    <!--
    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Clients</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client1.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client2.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client3.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client4.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client5.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client6.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     -->
    <!--/#clients-->
    
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <!--<img src="images/home/under.png" class="img-responsive inline" alt="">-->
                </div>
                <div class="col-md-4 col-sm-6">
                    <!--
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile2.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>   
                    </div> 
                        -->
                </div>
                <!--
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br> 
                        Feeder Road, <br> 
                        Bristol, BS2 0UY <br> 
                        United Kingdom <br> 
                        </address>
                    </div>
                </div>
                -->
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Deje su comentario</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <!--<div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Correo electronico">
                            </div>-->  
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
                       <!-- <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                        -->
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
