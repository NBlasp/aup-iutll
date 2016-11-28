<!DOCTYPE html>
<html lang="es">
<head>
  <title>A.U.P.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php   
include ("includes/banner-bol.php");
include ("includes/nav.php");
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/19.jpg" id="imgcarousel">
        <div class="carousel-caption">
          <h1>Agricultura Urbana y Periurbana<br>(A.U.P.)</h1>
          <h4>Alternativa de Producción Alimentaria</h4><br><a class="btn btn-success btn-lg" href="Agricultura_urbana_y_periurbana.php" >Leer más...</a><br><br>
        </div>      
      </div>

      <div class="item">
        <img src="img/18.jpg" id="imgcarousel">
        <div class="carousel-caption">
          <h1>Legislación</h1>
          <h4>Creación de la Corporación Venezolana para la Agricultura Urbana y Periurbana</h4><br><a class="btn btn-success btn-lg" href="legislacion.php" >Leer más...</a><br><br>
        </div>      
      </div>

      <div class="item">
        <img src="img/1.jpg" id="imgcarousel">
        <div class="carousel-caption">
          <h1>Vinculación del PNFI con la Agricultura Urbana y Periurbana</h1>
          <br><a class="btn btn-success btn-lg" href="pnfi_aup.php" >Leer más...</a><br><br>
        </div>      
      </div>

      <div class="item">
        <img src="img/16.jpg" id="imgcarousel">
        <div class="carousel-caption">
          <h1>Proyectos del IUTLL</h1>
          <h4>Creación de proyectos de Agricultura Urbana en Comunidades</h4><br><a class="btn btn-success btn-lg" href="Proyectos_iutll.php" >Leer más...</a><br><br>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">  
  <h4 class=""></h4><br>
  <div class="row">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/notic_8.png" alt="">
        <div class="caption">
          <h4 class="titulo">Ciudades Productivas Agrourbanas</h4>
          <p class="parrafo">Este plan está orientado en los principios de la agricultura urbana y  periurbana, contenidos...</p>
          <p><a href="ciudades_productivas.php" class="btn btn-success" role="button">Leer más...</a></p>
        </div>
      </div>
      <br>
      <div class="thumbnail">
        <img src="img/notic6.png" alt="">
        <div class="caption">
          <h4 class="titulo">Plan 100 días por la Agricultura Urbana</h4>
          <p class="parrafo">La ministra de Agricultura Urbana Lorena Fréitez, señaló que las líneas generales de la...</p>
          <p><a href="Plan_100_dias.php" class="btn btn-success" role="button">Leer más...</a></p>
        </div>
      </div>
      <br>
      <div class="thumbnail">
        <img src="img/notic3.jpg" alt="">
        <div class="caption">
          <h4 class="titulo">El crecimiento de la Agricultura Urbana</h4>
          <p class="parrafo">En economías locales, la producción de alimentos en áreas urbanas y peri-urbanas crea...</p>
          <p><a href="crecimiento_aup.php" class="btn btn-success" role="button">Leer más...</a></p>
        </div>
      </div>
      <br>
    </div>

    <div class="col-sm-4">
    <div class="thumbnail">
      <img src="img/notic2.jpg" alt="">
      <div class="caption">
        <h4 class="titulo">Modalidades de Producción</h4>
        <p class="parrafo">En la Agricultura Urbana y Periurbana se reconocen como modalidades de producción a...</p>
        <p><a href="Modalidades_produccion.php" class="btn btn-success" role="button">Leer más...</a></p>
      </div>
    </div>
    <br>
    <div class="thumbnail">
      <img src="img/notic7.jpg" alt="">
      <div class="caption">
        <h4 class="titulo">Balance del Plan 100 días</h4>
        <p class="parrafo">Datos del balance completo del plan de los 100 días de agricultura urbana y periurbana a nivel...</p>
        <p><a href="balance_plan.php" class="btn btn-success" role="button">Leer más...</a></p>
      </div>
    </div>  
    <br>
    <div class="thumbnail">
      <img src="img/notic.jpg" alt="">
      <div class="caption">
        <h4 class="titulo">Infografía de la AUP en América Latina</h4>
        <p class="parrafo">En sectores rurales de Venezuela, serán sembradas 2,4 millones de hectáreas a fin de...</p>
        <p><a href="Infografia.php" class="btn btn-success" role="button">Leer más...</a></p>
      </div>
    </div>  
    <br>
    </div>
    <div class="col-sm-4">
<?php   
include ("includes/lateral.php");
?>
    </div>
  </div>
</div><br>

<?php   
include ("includes/footer.php");
?>
<script src="js/jquery-3.1.0.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
