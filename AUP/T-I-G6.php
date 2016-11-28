<!DOCTYPE html>
<html lang="es">
<head>
  <title>Proyectos del IUTLL de AUP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/blueimp-gallery.min.css">
</head>
<body>
<?php   
include ("includes/banner-bol.php");
include ("includes/nav.php");
?>
 
<div class="container text-justify"><br> 
 <div class="row">
    <div class="col-sm-8" id="info">
      <h4 class="titulo">AGRICULTURA URBANA Y PERIURBANA COMO MEDIO DE PRODUCCIÓN DE ALIMENTOS EN HOGARES. VALLE DE LA PASCUA. EDO. GUÁRICO</h4>
      <br>
      <p class=""><b>Elaborado por.</b></p>
      <p class="parrafo">Estudiantes del PNFI Trayecto I, turno diurno, sección 3.</p>
      <br>
      <p class=""><b>Docente.</b></p>
      <p class="parrafo">Dra. Tibisay Acosta.</p>
      <br>
      <p class=""><b>Lugar de trabajo.</b></p>
      <p class="parrafo">?.</p>
      <br>
      <p class=""><b>Rubro.</b></p>
      <p class="parrafo">Berenjena.</p>
      <br>
      <p class="center"><b>GALERÍA DE ACTIVIDADES</b></p>
      <!--GALERÍA-->
      <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
          <div class="slides"></div>
          <h3 class="title"></h3>
          <a class="prev">‹</a>
          <a class="next">›</a>
          <a class="close">×</a>
          <a class="play-pause"></a>
          <ol class="indicator"></ol>
      </div>

      <div id="links">
          <a href="img/FOTOS_TI_G6/1.png" title="">
              <img src="img/FOTOS_TI_G6/1.png" class="img-responsive img-thumbnail" id="gal">
          </a>
          <a href="img/FOTOS_TI_G6/2.png" title="">
              <img src="img/FOTOS_TI_G6/2.png" class="img-responsive img-thumbnail" id="gal">
          </a>  
          <a href="img/FOTOS_TI_G6/3.png" title="">
              <img src="img/FOTOS_TI_G6/3.png" class="img-responsive img-thumbnail" id="gal">
          </a>
          <a href="img/FOTOS_TI_G6/4.png" title="">
              <img src="img/FOTOS_TI_G6/4.png" class="img-responsive img-thumbnail" id="gal">
          </a>
          <a href="img/FOTOS_TI_G6/5.png" title="">
              <img src="img/FOTOS_TI_G6/5.png" class="img-responsive img-thumbnail" id="gal">
          </a>
      </div>
      <!--FIN GALERÍA-->

      
      <br>
        <p class="right"><b>Nombre de los participantes.</b></p>
        <p class="right">Álvarez Dubraska.</p>
        <p class="right">Ortega Evelyn.</p>
        <p class="right">Salazar Ormary.</p>
        <p class="right">Vásquez Juan.</p>

      <nav>
        <ul class="pager">
          <li class="previous"><a href="Proyectos_iutll.php"><span aria-hidden="true">&larr;</span> Regresar al menú</a></li>
          <li class="next"><a href="T-II-G2.php">Siguiente Proyecto <span aria-hidden="true">&rarr;</span></a></li>
        </ul>
      </nav>
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
<script src="js/blueimp-gallery.min.js"></script>
<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
</body>
</html>
