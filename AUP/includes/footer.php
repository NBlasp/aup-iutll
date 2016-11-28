<footer>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> <!--col-md-4-->
        <br><br><br>
	        <p class="pf2">Instituto Universitario Tecnológico de los Llanos.</p>
	        <p class="pf2">Dirección: Av. Circunvalación, Urb. Guamachal. Valle de la Pascua, Guárico.</p>
	        <p class="pf2">Todos los Derechos Reservados © 2016.</p>
	        <p class="pf2">Desarrolladores: <a href="desarrolladores.php">PNFI Trayecto IV, sección 1, turno diurno.</a></p>
	    </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
          <br><br><br>
          <a href="https://www.facebook.com/minppau" target="_blank"><img src="img/icon-fb.png" class="imgf1"></a>
          <a href="https://twitter.com/Minppau?ref_src=twsrc%5Etfw" target="_blank"><img src="img/icon-twitter.png" class="imgf2"></a>
          <p style="color:white">Sigue al MinPPAU a través de las redes sociales</p>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <br>
        <p class="pf2">Contacta con nosotros:</p>
<?php
if (!isset($_POST['email'])) {
?>

<form class="form-horizontal" action="<?=$_SERVER['PHP_SELF']?>" method="post" runat="server">
  <div class="form-group">
    <p class="col-sm-2 control-label" style="color:white">Nombres</p>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control input-sm" placeholder="Escribe tus nombres.">
    </div>
  </div>
  <div class="form-group">
    <p class="col-sm-2 control-label" style="color:white">Email</p>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control input-sm" placeholder="nombre@correo.com">
    </div>
  </div>
  <div class="form-group">
    <p class="col-sm-2 control-label" style="color:white">Mensaje</p>
    <div class="col-sm-10">
      <textarea class="form-control input-sm" name="message" rows="1" placeholder="Escribe tu mensaje aquí..."></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="botones" id="enviar" class="btn btn-success">Enviar</button>
    </div>
  </div>
</form>




<?php
}else{
  $mensaje="Mensaje del formulario de contacto de nnatali.com";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nMensaje: \n".$_POST['message'];
  $destino= "ircelebolivar1@hotmail.com";//escribir correo nuevo
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <center><p style="color:white"><b>¡Su mensaje ha sido enviado con éxito!</b></p></center>
  <center><p style="color:white"><b>Pronto le responderemos.</b></p></center>
<?php
}
?>
        </div>
      </div>
    </div>
 </footer>