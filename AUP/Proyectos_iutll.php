<!DOCTYPE html>
<html lang="es">
<head>
  <title>Proyectos del IUTLL de AUP</title>
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
 
<div class="container text-justify"><br> 
 <div class="row">
    <div class="col-sm-8" id="info">
      <h4 class="titulo">PROYECTOS DEL IUT DE LOS LLANOS</h4>
      <br>


      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          PNFI Trayecto I.
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul>
        <li><a href="T-I-G1.php"><B>PROYECTO Nº 1:</B> La familia González se autoabastece de productos agrícolas, Valle de la Pascua, Edo. Guárico.</a></li>
        <li><a href="T-I-G2.php"><B>PROYECTO Nº 2:</B> Siembra de legumbres para la producción de alimentos en hogares del Municipio El Socorro, Edo. Guárico.</a></li>
        <li><a href="T-I-G3.php"><B>PROYECTO Nº 3:</B> Creación de patios productivos como alternativa para fortalecer la agrícola alimentaria.</a></li>
        <li><a href="T-I-G4.php"><B>PROYECTO Nº 4:</B> Agricultura urbana y periurbana en la familia Osorio. Valle de la Pascua, Edo. Guárico.</a></li>
        <li><a href="T-I-G5.php"><B>PROYECTO Nº 5:</B> Agricultura Urbana y Periurbana como medio de producción de alimentos en hogares. Valle de la Pascua. Edo. Guárico.</a></li>
      </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          PNFI Trayecto II.
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      <ul>
        <li><a href="T-II-G1.php"><B>PROYECTO Nº 1:</B> Siembra de ají dulce para el abastecimiento de alimentos provenientes de la producción agrícola.</a></li>
        <li><a href="T-II-G2.php"><B>PROYECTO Nº 2:</B> Siembra de ají dulce, pimento, tomate y espinaca para el abastecimiento de alimentos provenientes de la producción agrícola.</a></li>
      </ul>        
      </div>
    </div>
  </div>
</div>
      <p class="parrafo"></p>
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
