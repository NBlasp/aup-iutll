  <div class="footer1">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <a href="https://www.facebook.com/minppau" target="_blank"><img src="img/icon-fb.png" class="imgf1"></a>
          <a href="https://twitter.com/Minppau?ref_src=twsrc%5Etfw" target="_blank"><img src="img/icon-twitter.png" class="imgf2"></a>
          <p style="color:white">Sigue al MinPPAU a través de las redes sociales</p>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
  <div class="footer2">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <p class="pf2">Instituto Universitario Tecnológico de los Llanos.</p>
        <p class="pf2">Dirección: Av. Circunvalación, Urb. Guamachal. Valle de la Pascua, Guárico.</p>
        <p class="pf2">Todos los Derechos Reservados © 2016.</p>
      </div>
        <div class="col-md-4">
          <br><br>
        <p class="pf2" style="text-align:center">Desarrolladores: PNFI Trayecto IV, sección 1, turno diurno.</p>
        <p class="pf2"></p>
        </div>
        <div class="col-md-4">
          <p class="pf2">Contáctanos:</p>
<?php
if (!isset($_POST['email'])) {
?>

<form class="form-horizontal" action="<?=$_SERVER['PHP_SELF']?>" method="post" runat="server">
  <div class="form-group">
    <label class="col-sm-2 control-label">Nombres:</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control" placeholder="Escribe tus nombres.">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">E-mail:</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" placeholder="nombre@correo.com">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Mensaje:</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="message" rows="3" placeholder="Escribe tu mensaje aquí..."></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button  class="submit" type="submit" name="botones" id="enviar" class="btn btn-default">Enviar</button>
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
  <center><p><strong>Su mensaje ha sido enviado con éxito!</strong></p></center>
  <center><p><strong>Pronto le responderemos.</strong></p></center>
<?php
}
?>
        </div>
      </div>
    </div>
  </div>
