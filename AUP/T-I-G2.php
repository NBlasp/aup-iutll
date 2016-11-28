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
    <h4 class="titulo">SIEMBRA DE LEGUMBRES PARA LA PRODUCCIÓN DE ALIMENTOS EN HOGARES DEL MUNICIO EL SOCORRO, EDO. GUÁRICO.</h4>
      <br>
      <p class=""><b>Lugar de trabajo.</b></p>
      <p class="parrafo">Municipio El Socorro.</p>
      <br>
      <p class=""><b>Asesor.</b></p>
      <p class="parrafo">Danyelo Rodolfo Reyes.</p>
      <br>
      <p class=""><b>Biografía del asesor.</b></p>
      <p class="parrafo">Danyelo Rodolfo Reyes, portador de la C.I:18.144.610, es Un Ingeniero En Agroalimentaria graduado en el Instituto Tecnológico Los Llanos en el año 2001 fue el sucesor de nuestro proyecto de formación critica denominado denimada agricultura urbana que trata sobre la siembra del maíz.</p>
      <p class="parrafo">Sus últimas cosechas han sido maíz, frijol, tomate, cacao, melón y lechosa</p>
      <br>

      <p class="center"><b>GALERÍA DE ACTIVIDADES</b></p><br>
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
        <p class=""><b>Primer encuentro.</b></p>
          <a href="img/FOTOS_TI_G2/1.jpg" title="">
              <img src="img/FOTOS_TI_G1/1.jpg" class="img-responsive img-thumbnail" id="gal">
          </a>
          <a href="img/FOTOS_TI_G2/2.jpg" title="">
              <img src="img/FOTOS_TI_G2/2.jpg" class="img-responsive img-thumbnail" id="gal">
          </a>
          <a href="img/FOTOS_TI_G2/3.jpg" title="">
              <img src="img/FOTOS_TI_G2/3.jpg" class="img-responsive img-thumbnail" id="gal">
          </a>  
          <a href="img/FOTOS_TI_G2/4.jpg" title="">
              <img src="img/FOTOS_TI_G2/4.jpg" class="img-responsive img-thumbnail" id="gal">
          </a>
          <a href="img/FOTOS_TI_G2/5.jpg" title="">
              <img src="img/FOTOS_TI_G2/5.jpg" class="img-responsive img-thumbnail" id="gal">
          </a><br><br>
        <p class=""><b>Segundo encuentro.</b></p>  
          <a href="img/FOTOS_TI_G2/6.jpg" title="">
              <img src="img/FOTOS_TI_G2/6.jpg" class="img-responsive img-thumbnail" id="gal">
          </a>
          <a href="img/FOTOS_TI_G2/7.jpg" title="">
              <img src="img/FOTOS_TI_G2/7.jpg" class="img-responsive img-thumbnail" id="gal">
          </a>        
      </div>
      <br>
      <!--FIN GALERÍA-->

      <p class=""><b>Nombre de los participantes.</b></p>
      <p class="parrafo">Christian Contreras.</p>
      <p class="parrafo">Elvis López.</p>
      <p class="parrafo">Elvis Tablante.</p>
      <p class="parrafo">Gabriel Ramírez.</p>
      <p class="parrafo">Julio Requena.</p>
      <br>

      <nav>
        <ul class="pager">
          <li class="previous"><a href="T-I-G1.php"><span aria-hidden="true">&larr;</span> Proyecto Anterior</a></li>
          <li class="next"><a href="T-I-G3.php">Siguiente Proyecto <span aria-hidden="true">&rarr;</span></a></li>
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
