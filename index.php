<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Hanalei+Fill" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Hell Awaits - Tu portal de noticias extremas</title>
</head>
<body>
  <header>
    <!--Navbar color invertido(negro) fijado arriba y no ocupa el 100(no es "container fluid")-->
    <nav class="navbar navbar-inverse navbar-static.top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-pato">
            <!--Solo para disposiivo de lectura-->
            <span class="sr-only">Desplegar / Ocultar Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Hell Awaits</a>
         <!--Inicia el Menu-->
          <div class="collapse navbar-collapse" id="navegacion-pato">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Inicio</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                  Categorias <span class="caret"></span>
                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <li><a href="#">Ultimas Noticias</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Escena Nacional</a></li>
                      <li><a href="#">Escena Internacional</a></li>
                      <li><a href="#">Covertura de recitales</a></li>
                    </li>
                  </ul>

                </a>
              </li>
              <li><a href="#">Portal</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
            <form action="" class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-conrtol" placeholder="Buscar">
              </div>
              <button type="submit" class="btn btn-danger">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </form>


          </div>
        </div>
      </div>
    </nav>
  </header>

<!--Jumbotron-->
  <section class="jumbotron-main">
    <div class="container">
      <h1 class="titulo-pag">Hell Awaits</h1>
      <p class="jumbotron-sub">Noticias extremas de la escena del pesado metal</p>
    </div>
  </section>
<!--Miga de Pan-->
  <section class="mp-main container">
    <div class="row">
      <section class="posts col-md-9">
        <div class="miga-de-pan">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Categorias</a></li>
            <li class="active">Proximos Recitales</li>
          </ol>
        </div>
<!--Noticias-->
        <article class="post clearfix">
          <a href="#" class="thumb pull-left"></a>
            <img class="img-thumbnail" src="images/Ozzy-main.jpeg" alt="Ozzy">
            <h2 class="post-title">
              <a href="#">¿No More Tours?</a>
            </h2>
            <p><span class="post-fecha">10 de Octubre de 2018</span> por <span class="post-autor"><a href="#"></a>Patricio Mal Logrado</span></p>
            <p class="post-contenido text-justify">El "<b>Principe de las Tinieblas"</b> dio su último recital en el país...¿Esta vez será verdad?
            </p>

           <div class="contenedor-botones">
             <a href="#" class="btn btn-danger">Leer Mas</a>
             <a href="#" class="btn btn-primary">Comentarios <span class="badge">10</span></a></div>

          </article>


          <article class="post clearfix">
            <a href="#" class="thumb pull-left"></a>
            <img class="img-thumbnail" src="images/Metallica.jpg" alt="Ozzy">
            <h2 class="post-title">
              <a href="#">Misa Negra para la Autodestruccion</a>
            </h2>
            <p><span class="post-fecha">10 de Octubre de 2018</span> por <span class="post-autor"><a href="#"></a>Patricio Mal Logrado</span></p>
            <p class="post-contenido text-justify"> <b>Metallica</b> anuncia un nuevo Tour que pasará por tierras criollas y se rumorea que <b>Ghost</b> podria acompañarlos
            </p>

           <div class="contenedor-botones">
             <a href="#" class="btn btn-danger">Leer Mas</a>
             <a href="#" class="btn btn-primary">Comentarios <span class="badge">45</span></a>
           </div>
          </article>

           <article class="post clearfix">
            <a href="#" class="thumb pull-left"></a>
            <img class="img-thumbnail" src="images/V8.jpeg.jpg" alt="V8">
            <h2 class="post-title">
              <a href="#">A 35 años de "Luchando por el Metal"</a>
            </h2>
            <p><span class="post-fecha">10 de Octubre de 2018</span> por <span class="post-autor"><a href="#"></a>Patricio Mal Logrado</span></p>
            <p class="post-contenido text-justify">A 35 años de este gran hito del Metal Nacional. Te contamos la historia de los <b>V8</b> antes de ser leyenda
            </p>

           <div class="contenedor-botones">
             <a href="#" class="btn btn-danger">Leer Mas</a>
             <a href="#" class="btn btn-primary">Comentarios <span class="badge">10</span></a></div>
        </article>

        <nav>
          <div class="center-block">
            <ul class="pagination">
              <li class="disabled"><a href="#">&laquo; <span class="sr-only">Anterior</span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo; <span class="sr-only">Posterior</span></a></li>

            </ul>
          </div>
        </nav>

      </section>

    <aside class="col-md-3 hidden-xs hidden-sm">
      <h4>Categorias</h4>
      <div class="list-group">
      <a href="#" class="list-group-item active">Categoria</a>
      <a href="" class="list-group-item">Proximos Recitales</a>
      <a href="" class="list-group-item">Ultimas Noticias</a>
      <a href="" class="list-group-item">Vamos las bandas</a>
      <a href="" class="list-group-item">Mejores CD´s del Mes</a>
      <a href="" class="list-group-item">Entrevistas a nuestros idolos</a>
      <a href="" class="list-group-item">Concurso "Cabeza de tacho 2018"</a>
      <a href="" class="list-group-item">Proximos eventos</a>
    </div>

      <h4>Articulos Recientes</h4>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">¿No More Tours?</h4>
        <p class="list-group-item-text">El "Principe de las Tinieblas" dio su último recital en el país...¿Esta vez será verdad?</p>
      </a>

      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Misa Negra para la Autodestruccion</h4>
        <p class="list-group-item-text">Metallica anuncia un nuevo Tour que pasará por tierras criollas y se rumorea que Ghost podria acompañarlos</p>
      </a>

      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">A 35 años de "Luchando por el Metal"</h4>
        <p class="list-group-item-text">A 35 años de este gran hito del Metal Nacional. Te contamos la historia de los V8 antes de ser leyenda </p>
      </a>

  </aside>
    </div>
  </section>





  <footer>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <p>Patricio Mal Logrado - Hell Awaits</p>
        </div>
        <div class="col-xs-6">
          <ul class="list-inline text-right">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



  <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
