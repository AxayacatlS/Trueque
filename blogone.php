<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Productos | Trueque</title>
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
                            <h1 class="title">Productos</h1>
                            <p>Elija el producto que mas le agrade</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

    <!--/#action-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="images/blog/timeline/1s.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">12 <br><small>Dic</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Carne</a></h2>
                                    <h3 class="post-author"><a href="#">Juan Perez</a></h3>
                                    <p>Deseo intercambiar carne por leche</p>
                                    <a href="#" class="read-more">Ver mas informacion</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Cambiar</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>Me gusta</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>Comentarios</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="images/blog/timeline/4s.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">12 <br><small>Dic</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Lechuga</a></h2>
                                    <h3 class="post-author"><a href="#">Maria Vasquez</a></h3>
                                    <p>Tengo lechuga fresca, puedo cambiar por verduras</p>
                                    <a href="#" class="read-more">Ver mas informacion</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Cambiar</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>Me gusta</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>Comentarios</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="images/blog/timeline/5s.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">10 <br><small>Dic</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Pacas de zacate</a></h2>
                                    <h3 class="post-author"><a href="#">Fernando Sanchez</a></h3>
                                    <p>Cambio zacate por gallinas, tambien se puede negociar con precio accesible</p>
                                    <a href="#" class="read-more">Ves mas informacion</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Cambiar</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>Me gusta</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>Comentarios</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="images/blog/timeline/6s.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">12 <br><small>Dic</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Panes</a></h2>
                                    <h3 class="post-author"><a href="#">Panaderia Morelos</a></h3>
                                    <p>Se ofrece pan a buen precio, interacmbio a tratar</p>
                                    <a href="#" class="read-more">Ver mas informacion</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Cambiar</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>Me gusta</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>Comentarios</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="images/blog/timeline/3s.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="blogdetails.html"><img src="images/blog/timeline/2s.jpg" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="blogdetails.html">Advanced business cards design</a></h2>
                                    <h3 class="post-author"><a href="#">Posted by micron News</a></h3>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber [...]</p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                    <div class="blog-pagination">
                        <ul class="pagination">
                          <li><a href="#">left</a></li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#">6</a></li>
                          <li><a href="#">7</a></li>
                          <li><a href="#">8</a></li>
                          <li><a href="#">9</a></li>
                          <li><a href="#">right</a></li>
                        </ul>
                    </div>
                 </div>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item  recent">
                            <h3>Comentarios de Uso</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/projects1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Es facil encontrar los productos sin necesidad de ir al mercado</a></h4>
                                    <p>Publicado: 09 diciembre 2020</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/projects2.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Tiene un uso rapido y es gratuito</a></h4>
                                    <p>Publicado: 07 diciembre 2020</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img src="images/portfolio/projects3.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#">Puedo intercambiar mis productos y conseguir mis articulos, es facil ya que los cambio por valor igual</a></h4>
                                    <p>Publicado: 07 diciembre 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-item categories">
                            <h3>Categorias</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="#">Carne<span class="pull-right">(1)</span></a></li>
                                <li class="active"><a href="#">Verduras<span class="pull-right">(8)</span></a></li>
                                <li><a href="#">Panes<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Frutas<span class="pull-right">(9)</span></a></li>
                                <li><a href="#">Insumos<span class="pull-right">(3)</span></a></li>
                                <li><a href="#">Variados<span class="pull-right">(4)</span></a></li>
                                <!--
                                <li><a href="#">Ut enim ad minim <span class="pull-right">(2)</span></a></li>
                                <li><a href="#">Veniam, quis nostrud <span class="pull-right">(8)</span></a></li>
                                -->
                            </ul>
                        </div>
                        <div class="sidebar-item tag-cloud">
                            <h3>Etiquetas</h3>
                            <ul class="nav nav-pills">
                                <li><a href="#">Carne</a></li>
                                <li><a href="#">Rapido</a></li>
                                <li><a href="#">Comida</a></li>
                                <li><a href="#">cereales</a></li>
                                <li><a href="#">Leche</a></li>
                                <li><a href="#">Agua</a></li>
                            </ul>
                        </div>
                        <!--
                        <div class="sidebar-item popular">
                            <h3>Latest Photos</h3>
                            <ul class="gallery">
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                            </ul>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->

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
